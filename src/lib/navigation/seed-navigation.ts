import { SiteNavigation } from "./types";

/**
 * Formerly the mega menu's only data source; now the **fallback** used by
 * `getSiteNavigation()` (`./get-site-navigation.ts`) when the live
 * WPGraphQL query fails or comes back empty (WordPress unreachable, a
 * misconfigured endpoint, etc.) — see that module's doc comment. The
 * real content now lives in wp-admin's "Site Navigation" options page,
 * fully populated and GraphQL-verified as of 2026-09-26 (architecture
 * plan §3/§5), so this file should stay in sync with that content
 * loosely at best; it's a safety net, not the source of truth anymore.
 *
 * The top-level labels, links, and hrefs below were pulled live from the
 * current reconnaissance.test header (its plain Elementor dropdown menu)
 * back when this was written, so they're real — nothing here is a
 * placeholder link. What IS new/invented for this rebuild:
 *   - The rail-tab split on Services (the live site has no sub-categories;
 *     "AI & Automation" vs "Integration & Operations" is a proposed
 *     grouping to demonstrate the tab pattern — confirm with the team or
 *     replace with the real categories, since it's now also live in
 *     wp-admin, not just here).
 *   - The right-column widgets (promo box copy reuses the real "Book a
 *     discovery call" CTA already on the site; the Resources tag list is
 *     illustrative only).
 *
 * The Services links' one-line descriptions are NOT placeholder, despite
 * an earlier note here claiming otherwise: they're verbatim matches for
 * each service's real hero subhead on its own /services/[slug]/ page
 * (confirmed 2026-09-26 while building that template — see
 * seed-services.ts). The old Elementor dropdown itself never showed
 * descriptions, which is likely why that assumption was made, but the
 * text isn't invented — it's just sourced from a different part of the
 * live site than the dropdown that used to hold these links.
 */
export const siteNavigation: SiteNavigation = {
  items: [
    { id: "home", label: "Home", url: "/" },
    {
      id: "services",
      label: "Services",
      url: "/services/",
      tabs: [
        {
          id: "ai-automation",
          label: "AI & Automation",
          columns: [
            {
              links: [
                {
                  title: "AI Workflow Automation",
                  description:
                    "Automate repetitive operational work with agents that plug into the tools your team already uses.",
                  url: "/services/ai-workflow-automation/",
                },
                {
                  title: "AI Tools & Agents",
                  description:
                    "Purpose-built agents and internal tools for the workflows generic software doesn't cover.",
                  url: "/services/ai-tools-agents/",
                },
                {
                  title: "Support Triage & Ticketing",
                  description:
                    "Route, prioritize, and draft responses automatically, with a human in the loop where it matters.",
                  url: "/services/support-triage-ticketing/",
                },
              ],
            },
          ],
          viewAllLink: { label: "View all services", url: "/services/" },
          rightSlot: {
            type: "promo_box",
            heading: "Struggling with tech decisions?",
            highlightedWord: "free consultation",
            body: "Get a free consultation to scope your first automation win.",
            cta: { label: "Book a discovery call", url: "/book-a-discovery-call/" },
            showPhoneIcon: true,
          },
        },
        {
          id: "integration-ops",
          label: "Integration & Operations",
          columns: [
            {
              links: [
                {
                  title: "Data Orchestration",
                  description:
                    "Move and reconcile data across systems on a schedule your business actually runs on.",
                  url: "/services/data-orchestration/",
                },
                {
                  title: "Systems Integration",
                  description:
                    "Connect systems that were never meant to talk to each other, without duct tape.",
                  url: "/services/system-integrations/",
                },
                {
                  title: "Support & Monitoring",
                  description:
                    "Ongoing monitoring and support once a system goes live in production.",
                  url: "/services/support-monitoring/",
                },
              ],
            },
          ],
          viewAllLink: { label: "View all services", url: "/services/" },
          rightSlot: {
            type: "promo_box",
            heading: "Struggling with tech decisions?",
            highlightedWord: "free consultation",
            body: "Get a free consultation to scope your first automation win.",
            cta: { label: "Book a discovery call", url: "/book-a-discovery-call/" },
            showPhoneIcon: true,
          },
        },
      ],
    },
    {
      id: "industries",
      label: "Industries",
      url: "/industries/",
      tabs: [
        {
          id: "all-industries",
          label: "Industries",
          columns: [
            {
              links: [
                {
                  title: "Civic & Municipal Infrastructure",
                  description: "Modernize public-sector systems without disrupting services residents depend on.",
                  url: "/industries/civic-municipal-infrastructure/",
                },
                {
                  title: "Logistics",
                  description: "Real-time visibility across fleets, warehouses, and delivery networks.",
                  url: "/industries/logistics/",
                },
                {
                  title: "eCommerce",
                  description: "Scale checkout, fulfillment, and support without scaling headcount 1:1.",
                  url: "/industries/ecommerce/",
                },
                {
                  title: "Healthcare",
                  description: "Secure, compliant systems built around clinical and administrative workflows.",
                  url: "/industries/healthcare/",
                },
              ],
            },
            {
              links: [
                {
                  title: "Finance",
                  description: "Automate reconciliation and reporting without compromising on audit trails.",
                  url: "/industries/finance/",
                },
                {
                  title: "Real Estate",
                  description: "Streamline listings, leasing, and property operations end to end.",
                  url: "/industries/real-estate/",
                },
                {
                  title: "Education",
                  description: "Tools that fit how schools and institutions actually operate.",
                  url: "/industries/education/",
                },
              ],
            },
          ],
          viewAllLink: { label: "All industries", url: "/industries/" },
        },
      ],
    },
    {
      id: "about",
      label: "About",
      url: "/our-company/",
      tabs: [
        {
          id: "company",
          label: "Company",
          columns: [
            {
              links: [
                { title: "Who we are", url: "/our-company/" },
                { title: "Leadership", url: "/our-company/leadership/" },
                { title: "Process", url: "/our-company/process/" },
              ],
            },
            {
              links: [
                { title: "Partners", url: "/our-company/partners/" },
                { title: "Careers", url: "/our-company/careers/" },
              ],
            },
          ],
        },
      ],
    },
    {
      id: "resources",
      label: "Resources",
      url: "/resources/",
      tabs: [
        {
          id: "resources",
          label: "Resources",
          columns: [
            {
              links: [
                {
                  title: "Articles & Insights",
                  description: "Short, practical write-ups from engagements we've shipped.",
                  url: "/articles-insights/",
                },
                {
                  title: "Guides",
                  description: "Longer-form guides for teams scoping their own automation work.",
                  url: "/category/guide/",
                },
                {
                  title: "FAQ",
                  description: "Answers to the questions we hear most on discovery calls.",
                  url: "/faq/",
                },
              ],
            },
          ],
          viewAllLink: { label: "All resources", url: "/resources/" },
          rightSlot: {
            type: "tag_cloud",
            heading: "Popular topics",
            tags: ["Automation", "Integrations", "Case Studies"],
          },
        },
      ],
    },
    { id: "contact", label: "Contact", url: "/contact-us/" },
  ],
};
