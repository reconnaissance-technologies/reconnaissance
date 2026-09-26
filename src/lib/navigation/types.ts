/**
 * Mega menu data shape — mirrors the "Site Navigation" ACF Options Page
 * schema proposed in the architecture plan (§4), so the same TypeScript
 * types describe both the WPGraphQL response (once wired up) and the seed
 * data used to build this component before that's ready.
 *
 * Structure modeled on hiddenbrains.com's mega menu (architecture plan §1):
 * trigger row → left-rail tabs → 2-column link grid with descriptions →
 * a flexible right-column slot that varies per tab.
 */

export type NavLink = {
  title: string;
  description?: string;
  url: string;
  /** Optional icon identifier; left as a string so WP can hand back an
   * icon slug, SVG name, or media URL without the type needing to change. */
  icon?: string;
};

export type NavColumn = {
  links: NavLink[];
};

/** The flexible-content "right slot" — one layout is active per tab. */
export type RightSlotWidgetList = {
  type: "widget_list";
  heading: string;
  items: { title: string; description?: string }[];
};

export type RightSlotTagCloud = {
  type: "tag_cloud";
  heading: string;
  subheading?: string;
  tags: string[];
};

export type RightSlotPromoBox = {
  type: "promo_box";
  heading: string;
  highlightedWord?: string;
  body: string;
  cta: { label: string; url: string };
  showPhoneIcon?: boolean;
};

export type RightSlotBannerImage = {
  type: "banner_image";
  imageSrc: string;
  imageAlt: string;
  url?: string;
};

export type RightSlot =
  | RightSlotWidgetList
  | RightSlotTagCloud
  | RightSlotPromoBox
  | RightSlotBannerImage;

export type NavTab = {
  id: string;
  label: string;
  icon?: string;
  columns: NavColumn[];
  viewAllLink?: { label: string; url: string };
  rightSlot?: RightSlot;
};

export type QuickTechIcon = {
  label: string;
  icon: string;
  url: string;
};

/** A top-level trigger. `tabs` present → renders as a mega menu panel;
 * `tabs` absent → renders as a plain link (e.g. Home, Contact). */
export type NavItem = {
  id: string;
  label: string;
  url?: string;
  tabs?: NavTab[];
  quickTechIcons?: QuickTechIcon[];
};

export type SiteNavigation = {
  items: NavItem[];
};
