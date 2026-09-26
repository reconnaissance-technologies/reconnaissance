import { Industry } from "./types";

/**
 * Seed data for the Industry page template, until this is wired up to
 * WPGraphQL against the `group_industry_dynamic_content` ACF field group
 * (see /mnt/user-data/outputs/acf-industry-fields.json for the field
 * sketch this shape is designed to match 1:1).
 *
 * `logistics` is complete and **real** — every string below was pulled
 * verbatim from https://reconnaissance.test/industries/logistics/ on
 * 2026-09-26 (hero, challenge, solutions, use cases, impact, and CTA
 * copy), not paraphrased or invented.
 *
 * The other six industries are intentionally left as `status: "stub"`.
 * Their `name` and `slug` are real (pulled from the live site's own
 * Industries mega-menu column — see seed-navigation.ts), but the mega
 * menu's one-line descriptions are flagged there as placeholder copy
 * invented for the nav layout, not real page content — so reusing them
 * here as if they were real hero subheads would just be laundering a
 * placeholder into something that reads as sourced. Rather than inventing
 * full challenge/solutions/use-case/impact sections for industries whose
 * pages haven't been extracted yet (which would mean fabricating stats,
 * client quotes, and case studies for a real business site), each stub
 * renders a plain "content coming soon" hero and nothing else, until the
 * same page-by-page extraction done for Logistics happens for the rest.
 */

const logistics: Industry = {
  slug: "logistics",
  name: "Logistics",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Logistics Enterprises",
    subhead:
      "Turn dispatch → tracking → delivery → reconciliation into one connected system across your fleet, warehouse, and customers.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where visibility breaks down",
    paragraphs: [
      "Logistics and supply-chain teams often run on a patchwork of spreadsheets, WhatsApp groups, and rider apps that don't talk to each other. When a shipment goes missing, a customs document is delayed, or a delivery address is really “the yellow building behind the market,” fragile point tools break down and visibility disappears.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom logistics platform built from scratch, a connective layer across your existing tools, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "No single view of shipments in transit",
      "Manual dispatch and route planning",
      "Disconnected fleet, warehouse & order systems",
      "Slow customs & compliance paperwork",
      "Cash-on-delivery reconciliation headaches",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep freight connected",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Operations",
        description:
          "From dispatch consoles to driver apps, we design and build software tailored to how your fleet actually runs — not a generic TMS you have to bend around.",
        bullets: ["Custom dispatch & driver apps", "Built around your fleet, your routes, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — fleet management, warehouse, payments, customer comms — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your logistics stack", "One source of truth for shipments & inventory"],
      },
      {
        tag: "Extended Team",
        title: "Your Extended Team",
        description:
          "Need more engineering capacity without the overhead of hiring? Our team works as an embedded extension of yours — architecture, code, and delivery, on demand.",
        bullets: ["Dedicated engineers who know your systems", "Scale up or down as your roadmap shifts"],
      },
    ],
  },
  useCases: {
    eyebrow: "In practice",
    heading: "From dispatch to doorstep",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Build", "Custom"],
        title: "Building a Dispatch Console From Scratch",
        inputs: "Fleet size, route data, driver workflows",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A dispatch tool built for how you actually run routes.",
      },
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Fleet, Warehouse & Delivery",
        inputs: "GPS, driver app, warehouse scans",
        automationSteps: ["Connect", "Sync", "Reconcile"],
        result: "One system instead of five disconnected tools.",
      },
      {
        tags: ["Team", "Scale"],
        title: "Scaling Engineering Without the Hiring Cycle",
        inputs: "Roadmap, sprint cadence, existing codebase",
        automationSteps: ["Onboard", "Embed", "Ship"],
        result: "Extra engineering capacity in weeks, not months.",
      },
    ],
  },
  impact: {
    eyebrow: "Proven impact",
    heading: "What real-time delivery looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~25%",
        label: "fewer delivery delays",
        description: "Typical improvement through real-time tracking, better routing, and proactive delivery notifications.",
      },
      {
        number: "~20%",
        label: "lower fleet & fuel costs",
        description: "Achieved through optimized routing, predictive maintenance, and reduced vehicle idle time.",
      },
    ],
    quote: {
      text: "Supply-chain visibility is no longer a nice-to-have — it's the baseline for competing in modern logistics and e-commerce.",
      source: "Industry Outlook 2026",
    },
    points: [
      {
        title: "Real-Time Shipment Tracking",
        // Verbatim from the live page. Kept as-is rather than "corrected" —
        // this description (identity verification / sanction screening)
        // doesn't match its own title and reads like it was copy-pasted
        // from another industry's content. Same class of issue as the
        // Manufacturing page mismatch already flagged in design-system.md
        // §8; worth a manual re-check/re-save in wp-admin, not a silent fix.
        description:
          "Autonomous identity verification and sanction screening to eliminate onboarding bottlenecks without compromising security.",
      },
      {
        title: "Smart Route & Fleet Optimization",
        description: "AI-assisted routing and predictive maintenance that cut fuel spend and reduce breakdowns.",
      },
      {
        title: "Warehouse & Inventory Automation",
        description: "Real-time stock visibility and automated replenishment across every location.",
      },
      {
        title: "COD & Payment Reconciliation",
        description: "Automated matching between rider collections and bank records — fewer disputes, faster cash close.",
      },
      {
        title: "Customs & Compliance Documentation",
        description: "Digitized paperwork and audit trails that speed clearance and reduce cross-border delays.",
      },
      {
        title: "AI-Powered Delivery Support",
        description: "Intelligent agents that handle order-status inquiries and escalate exceptions to your team instantly.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

// Real name/slug (from the live Industries mega menu); everything else is
// a stub — see the module comment above for why.
const stub = (name: string, slug: string, subhead: string): Industry => ({
  slug,
  name,
  status: "stub",
  hero: {
    eyebrow: "Industries",
    title: name,
    subhead,
  },
});

export const industries: Industry[] = [
  {
    ...stub(
      "Civic & Municipal Infrastructure",
      "civic-municipal-infrastructure",
      "Modernize public-sector systems without disrupting services residents depend on."
    ),
  },
  logistics,
  stub("eCommerce", "ecommerce", "Scale checkout, fulfillment, and support without scaling headcount 1:1."),
  stub("Healthcare", "healthcare", "Secure, compliant systems built around clinical and administrative workflows."),
  stub("Finance", "finance", "Automate reconciliation and reporting without compromising on audit trails."),
  stub("Real Estate", "real-estate", "Streamline listings, leasing, and property operations end to end."),
  stub("Education", "education", "Tools that fit how schools and institutions actually operate."),
];

export function getIndustry(slug: string): Industry | undefined {
  return industries.find((industry) => industry.slug === slug);
}
