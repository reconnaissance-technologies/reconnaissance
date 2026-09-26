import { wordpressGraphQL, WordPressGraphQLError } from "@/lib/wordpress/graphql-client";
import { siteNavigation as seedSiteNavigation } from "./seed-navigation";
import type { NavColumn, NavItem, NavLink, NavTab, RightSlot, SiteNavigation } from "./types";

/**
 * Live data source for the mega menu, replacing the static
 * `seed-navigation.ts` export (architecture plan §5, phase 2's last
 * remaining step). Queries the "Site Navigation" ACF options page over
 * WPGraphQL — schema and field names confirmed live against
 * `reconnaissance.test` on 2026-09-26 (see the query-shape note in the
 * architecture plan §4).
 *
 * Only the layouts actually in use on the live site today —
 * `promo_box` and `tag_cloud` — are queried as typed fragments below.
 * `widget_list` and `banner_image` exist in the ACF schema but no current
 * nav item uses them; add their fragments here (following the same
 * `NavigationFieldsNavItemsTabsRightSlot<Layout>Layout` naming pattern)
 * once an editor actually picks one of those layouts in wp-admin, so the
 * image-field shape can be confirmed against real data rather than
 * guessed. Until then a tab that somehow gets one of those layouts will
 * just render with no right slot, which is a safe default (matches how a
 * tab with no right slot at all already renders).
 *
 * Image/icon fields (link icons, tab icons, quick-tech-icons) are left
 * out of the query for the same reason: nothing in the live options page
 * has one set yet (every "Icon" field is "No image selected"). Add them
 * once populated — `NavLink.icon` etc. are already optional in the type,
 * so wiring them up later won't require a shape change here.
 */

// ---- WPGraphQL response shape ---------------------------------------

type WPLink = { url: string; title: string | null } | null;

type WPPromoBoxRightSlot = {
  __typename: "NavigationFieldsNavItemsTabsRightSlotPromoBoxLayout";
  heading: string;
  highlightedWord: string | null;
  body: string;
  showPhoneIcon: boolean | null;
  cta: WPLink;
};

type WPTagCloudRightSlot = {
  __typename: "NavigationFieldsNavItemsTabsRightSlotTagCloudLayout";
  heading: string;
  subheading: string | null;
  tags: { label: string }[] | null;
};

/** Any layout GraphQL hands back that isn't one of the two typed above
 * (a future `widget_list`/`banner_image` pick, or any other unknown
 * layout) — treated as unsupported until its fragment is added. */
type WPUnhandledRightSlot = { __typename: string };

type WPRightSlot = WPPromoBoxRightSlot | WPTagCloudRightSlot | WPUnhandledRightSlot;

type WPNavLink = {
  title: string;
  description: string | null;
  url: WPLink;
};

type WPColumn = { links: WPNavLink[] | null };

type WPTab = {
  tabLabel: string;
  columns: WPColumn[] | null;
  viewAllLink: WPLink;
  rightSlot: WPRightSlot[] | null;
};

type WPNavItem = {
  label: string;
  link: WPLink;
  tabs: WPTab[] | null;
};

type SiteNavigationQueryResult = {
  siteNavigation: {
    navigationFields: {
      navItems: WPNavItem[] | null;
    } | null;
  } | null;
};

const SITE_NAVIGATION_QUERY = /* GraphQL */ `
  query SiteNavigation {
    siteNavigation {
      navigationFields {
        navItems {
          label
          link {
            url
            title
          }
          tabs {
            tabLabel
            columns {
              links {
                title
                description
                url {
                  url
                  title
                }
              }
            }
            viewAllLink {
              url
              title
            }
            rightSlot {
              __typename
              ... on NavigationFieldsNavItemsTabsRightSlotPromoBoxLayout {
                heading
                highlightedWord
                body
                showPhoneIcon
                cta {
                  url
                  title
                }
              }
              ... on NavigationFieldsNavItemsTabsRightSlotTagCloudLayout {
                heading
                subheading
                tags {
                  label
                }
              }
            }
          }
        }
      }
    }
  }
`;

// ---- WPGraphQL shape -> app shape -------------------------------------

function slugify(label: string): string {
  return (
    label
      .toLowerCase()
      .trim()
      .replace(/[^a-z0-9]+/g, "-")
      .replace(/^-+|-+$/g, "") || "item"
  );
}

/** De-dupes ids within one list (e.g. two tabs both literally labeled
 * "Resources") by appending -2, -3, ... to repeats, so `id` stays usable
 * as a React key and as the mega menu's open/active-tab lookup key. */
function uniqueIds(labels: string[]): string[] {
  const seen = new Map<string, number>();
  return labels.map((label) => {
    const base = slugify(label);
    const count = (seen.get(base) ?? 0) + 1;
    seen.set(base, count);
    return count === 1 ? base : `${base}-${count}`;
  });
}

function mapLink(link: WPLink, fallbackLabel: string): { label: string; url: string } | undefined {
  if (!link?.url) return undefined;
  return { label: link.title || fallbackLabel, url: link.url };
}

function mapNavLink(link: WPNavLink): NavLink {
  return {
    title: link.title,
    description: link.description ?? undefined,
    url: link.url?.url ?? "#",
  };
}

function mapColumn(column: WPColumn): NavColumn {
  return { links: (column.links ?? []).map(mapNavLink) };
}

function isPromoBox(slot: WPRightSlot): slot is WPPromoBoxRightSlot {
  return slot.__typename === "NavigationFieldsNavItemsTabsRightSlotPromoBoxLayout";
}

function isTagCloud(slot: WPRightSlot): slot is WPTagCloudRightSlot {
  return slot.__typename === "NavigationFieldsNavItemsTabsRightSlotTagCloudLayout";
}

function mapRightSlot(slots: WPRightSlot[] | null): RightSlot | undefined {
  // `right_slot` is ACF flexible_content with min:0, max:1 — at most one
  // layout is ever active per tab, so we only need the first entry.
  const slot = slots?.[0];
  if (!slot) return undefined;

  // Using type-guard functions rather than a `switch` on `__typename`:
  // `WPUnhandledRightSlot.__typename` is a plain `string` (any layout we
  // haven't added a fragment for comes back with only `__typename` and
  // nothing else typed), and a wide `string` discriminant sitting in the
  // union defeats TypeScript's usual switch-based narrowing.
  if (isPromoBox(slot)) {
    const cta = mapLink(slot.cta, slot.heading);
    if (!cta) return undefined; // cta is required by the ACF schema; a promo box without one is malformed data, so skip rather than crash the render.
    return {
      type: "promo_box",
      heading: slot.heading,
      highlightedWord: slot.highlightedWord ?? undefined,
      body: slot.body,
      cta,
      showPhoneIcon: slot.showPhoneIcon ?? undefined,
    };
  }

  if (isTagCloud(slot)) {
    return {
      type: "tag_cloud",
      heading: slot.heading,
      subheading: slot.subheading ?? undefined,
      tags: (slot.tags ?? []).map((tag) => tag.label),
    };
  }

  // Unhandled layout (widget_list/banner_image picked in wp-admin before
  // their fragments are added above) — degrade to "no right slot" rather
  // than throwing.
  return undefined;
}

function mapTab(tab: WPTab, id: string): NavTab {
  return {
    id,
    label: tab.tabLabel,
    columns: (tab.columns ?? []).map(mapColumn),
    viewAllLink: mapLink(tab.viewAllLink, tab.tabLabel),
    rightSlot: mapRightSlot(tab.rightSlot),
  };
}

function mapNavItem(item: WPNavItem, id: string): NavItem {
  const tabIds = uniqueIds((item.tabs ?? []).map((t) => t.tabLabel));
  return {
    id,
    label: item.label,
    url: item.link?.url,
    tabs: item.tabs?.length ? item.tabs.map((tab, i) => mapTab(tab, tabIds[i])) : undefined,
  };
}

function mapSiteNavigation(navItems: WPNavItem[]): SiteNavigation {
  const ids = uniqueIds(navItems.map((item) => item.label));
  return { items: navItems.map((item, i) => mapNavItem(item, ids[i])) };
}

// ---- Public API --------------------------------------------------------

/**
 * Fetches the mega menu's content from WordPress. Falls back to the
 * static seed data (with a console warning) if the request fails or the
 * options page comes back empty — e.g. WordPress unreachable during a
 * local build, or a stale/misconfigured GraphQL endpoint — so a WP outage
 * degrades the header instead of failing the whole page render.
 */
export async function getSiteNavigation(): Promise<SiteNavigation> {
  try {
    const data = await wordpressGraphQL<SiteNavigationQueryResult>(SITE_NAVIGATION_QUERY);
    const navItems = data.siteNavigation?.navigationFields?.navItems;

    if (!navItems?.length) {
      console.warn("[getSiteNavigation] WPGraphQL returned no nav items; falling back to seed data.");
      return seedSiteNavigation;
    }

    return mapSiteNavigation(navItems);
  } catch (error) {
    const reason = error instanceof WordPressGraphQLError ? error.message : error;
    console.warn("[getSiteNavigation] Falling back to seed data —", reason);
    return seedSiteNavigation;
  }
}
