import type {
  Service,
  ServiceDeliverablePhase,
  ServiceExample,
  ServiceFaqItem,
  ServiceProcessStep,
  ServiceStandardPoint,
  ServiceTestimonial,
} from "./types";

/**
 * All content below was pulled verbatim from the live reconnaissance.test
 * service pages on 2026-09-26 (the same session/methodology used for the
 * industry pages — see seed-industries.ts). Nothing here is invented.
 *
 * The one thing worth understanding before editing this file: **the live
 * Service template shares almost everything across its 6 pages.** Diffing
 * get_page_text output for all 6 (/services/ai-workflow-automation/,
 * /data-orchestration/, /support-triage-ticketing/, /ai-tools-agents/,
 * /support-monitoring/, /system-integrations/) turned up byte-identical
 * text everywhere except the hero (title + subhead). The stat card
 * ("20–40% reduction in manual workflow load"), the "problem with messy
 * internal tools" copy, the "Our Standard" checklist, all 4 deliverable
 * phases, all 4 process steps, all 3 example cards, the tech-stack logos,
 * all 4 testimonials, and all 8 FAQ questions are the same regardless of
 * which service page you're on. That's why this file has one `services`
 * array (just slug/name/hero) plus a set of `SERVICE_*` constants, instead
 * of repeating this content 6 times the way seed-industries.ts repeats its
 * (genuinely distinct) CTA text per industry.
 *
 * Whether that's an intentional "one methodology page, pick your entry
 * point" design or wp-admin content that was never actually filled in
 * per-service is a real open question — flagged in the architecture plan
 * for the team, not something to guess at here.
 *
 * Three content-quality issues on the live site, carried through verbatim
 * rather than silently fixed (same policy as the Logistics/Education
 * mismatches already flagged for the Industry pages):
 *
 * 1. **FAQ answers are shifted out of sequence for questions 5, 6, and 8.**
 *    "How do you handle data security?" gets the "existing tools and
 *    vendors" answer; "Can you work with our existing tools and vendors?"
 *    gets the "not sure what to automate first" answer; and "What if we're
 *    not sure what to automate first?" gets an answer about 50–60 minute
 *    sessions and biweekly meeting cadence that reads like it was copied
 *    from a coaching/consulting template and doesn't belong on this site
 *    at all. See SERVICE_FAQ below — each shifted item has an inline note.
 * 2. **The service is named three different things in three places**: the
 *    mega menu / hub grid calls it "AI Tools & Agents" (slug
 *    `ai-tools-agents`), the page's own H1 says "AI Agents & Internal
 *    Tools", and the footer's service list says "Internal Tools & Agents".
 *    `name` below uses the mega-menu spelling (matching seed-navigation.ts
 *    and this app's other links to the page) since that's what the rest of
 *    this codebase already uses as the canonical label; the H1 variant is
 *    kept verbatim in `hero.title` since that's what the page itself shows.
 * 3. **The hub page's "What we help automate" 3-column list repeats
 *    "Cross-system reporting" under both the "Operations" and "AI
 *    Enablement" columns** — almost certainly meant to be two different
 *    line items. Kept verbatim in the Operations column list below.
 *
 * The live hero eyebrow ("✦ Services", linking back to /services/) is
 * identical across all 6 pages too, and is hardcoded in the page template
 * rather than repeated as data here.
 */

export const services: Service[] = [
  {
    slug: "ai-workflow-automation",
    name: "AI Workflow Automation",
    hero: {
      eyebrow: "Services",
      title: "AI Workflow Automation",
      subhead: "Transform repetitive processes into intelligent, self-running workflows.",
    },
  },
  {
    slug: "support-triage-ticketing",
    name: "Support Triage & Ticketing",
    hero: {
      eyebrow: "Services",
      title: "Support Triage & Ticketing",
      // Verbatim from the live page — reads like Systems Integration copy
      // ("connect disconnected tools so data flows...") rather than
      // something specific to support triage/ticketing. Kept as-is; not
      // corrected.
      subhead: "Connect disconnected tools so data flows where you need it, when needed.",
    },
  },
  {
    slug: "ai-tools-agents",
    name: "AI Tools & Agents",
    hero: {
      eyebrow: "Services",
      // Verbatim H1 from the live page — see naming-inconsistency note
      // above; the mega menu/hub call this same page "AI Tools & Agents".
      title: "AI Agents & Internal Tools",
      subhead: "Build custom interfaces and AI assistants tailored to your specific workflows.",
    },
  },
  {
    slug: "data-orchestration",
    name: "Data Orchestration",
    hero: {
      eyebrow: "Services",
      title: "Data Orchestration",
      subhead: "Automate data collection, transformation and enrichment for better insights.",
    },
  },
  {
    slug: "support-monitoring",
    name: "Support & Monitoring",
    hero: {
      eyebrow: "Services",
      title: "Support & Monitoring",
      subhead: "Ongoing maintenance, optimization, and proactive monitoring for peace of mind.",
    },
  },
  {
    slug: "system-integrations",
    name: "Systems Integration",
    hero: {
      eyebrow: "Services",
      title: "System Integrations",
      subhead: "We connect CRM, ERP, support, and internal tools into a single automated workflow layer.",
    },
  },
];

export function getService(slug: string): Service | undefined {
  return services.find((service) => service.slug === slug);
}

// ---- Shared content (identical across all 6 service pages) --------------

export const SERVICE_STAT = {
  eyebrow: "What's Included",
  number: "20–40%",
  label: "Reduction in\nmanual workflow load",
  footnote: "Mid-Market SaaS · 6–8 Week Deployment",
};

export const SERVICE_EXPERTISE = {
  eyebrow: "What's Included",
  heading: 'The problem with\n"messy" internal tools',
  paragraphs: [
    "Most teams start with simple zaps that quickly spiral into unmanageable spaghetti code. When an API changes or a token expires, business-critical processes break silently.",
    "We treat automation as software engineering. Every workflow is mapped, error-handled, and documented so your team isn't dependent on a black box.",
  ] as [string, string],
  standardHeading: "Our Standard",
  standard: [
    { label: "Mapped from current processes" },
    { label: "Integration points documented" },
    { label: "Monitoring + error handling" },
    { label: "Ownership + handoff plan" },
  ] as ServiceStandardPoint[],
};

export const SERVICE_DELIVERABLES: { eyebrow: string; heading: string; phases: ServiceDeliverablePhase[] } = {
  eyebrow: "Deliverables",
  heading: "What's included",
  phases: [
    {
      number: "01",
      title: "Strategy",
      description: "Architectural alignment before implementation.",
      items: ["Workflow mapping", "Success criteria definition", "Risk & dependency review"],
    },
    {
      number: "02",
      title: "Build",
      description: "Controlled deployment of automation infrastructure.",
      items: ["Automation flows", "System integrations", "QA & testing checklist"],
    },
    {
      number: "03",
      title: "Handoff",
      description: "Operational enablement and system ownership transfer.",
      items: ["Technical documentation", "Team training", "Operational runbook"],
    },
    {
      number: "04",
      title: "Support",
      description: "Ongoing performance governance and system optimization.",
      items: ["System monitoring", "Iteration cycles", "Performance adjustments"],
    },
  ],
};

/**
 * "HOW WE WORK" / "A process built for results" — word-for-word identical
 * on every individual service page AND on the /services/ hub page itself.
 */
export const SERVICE_PROCESS: { eyebrow: string; heading: string; subheading: string; steps: ServiceProcessStep[] } = {
  eyebrow: "How We Work",
  heading: "A process built for results",
  subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
  steps: [
    {
      step: 1,
      title: "Discovery & Success Criteria",
      description: "We map your current workflows, identify bottlenecks, and define clear metrics for success.",
    },
    {
      step: 2,
      title: "Map Workflows + Data Access",
      description:
        "We document every step, identify bottlenecks, and determine what data and systems need to connect. No surprises down the road.",
    },
    {
      step: 3,
      title: "Build + Test + Security Review",
      description:
        "We build incrementally, test thoroughly, and review security at every stage. You see progress weekly and can give feedback early.",
    },
    {
      step: 4,
      title: "Launch + Monitor + Iterate",
      description: "Go live confidently. We monitor performance, catch issues, and optimize based on data.",
    },
  ],
};

/** Real vendor/tool names shown as a logo strip under "Our stack" on every
 * service page (Zapier, n8n, OpenAI, Claude, HubSpot, Salesforce, Slack) —
 * rendered as plain text badges here rather than reproducing the trademarked
 * logo artwork itself. */
export const SERVICE_STACK_HEADING = "Our stack";
export const SERVICE_STACK_TOOLS = ["Zapier", "n8n", "OpenAI", "Claude", "HubSpot", "Salesforce", "Slack"];

export const SERVICE_EXAMPLES: { eyebrow: string; heading: string; subheading: string; items: ServiceExample[] } = {
  eyebrow: "AI Agents & Internal Tools Examples",
  heading: "See what's possible",
  subheading: "Real scenarios we've automated for teams like yours",
  items: [
    {
      tags: ["Sales", "CRM"],
      title: "Lead Intake & Enrichment",
      inputs: "Lead Form / Email",
      automationSteps: ["Enrich", "Route", "CRM"],
      result: "Cleaner leads. Faster handoff.",
    },
    {
      tags: ["Support", "AI"],
      title: "Support Triage",
      // Verbatim from the live page — every example card's "Inputs" row
      // reads "Lead Form / Email", even for Support Triage and Invoice
      // Processing where that doesn't obviously fit. Kept as-is.
      inputs: "Lead Form / Email",
      automationSteps: ["Analyze", "Tag", "Draft"],
      result: "Faster triage. Cleaner queues.",
    },
    {
      tags: ["Finance", "Ops"],
      title: "Invoice Processing",
      inputs: "Lead Form / Email",
      automationSteps: ["Extract", "Match", "ERP"],
      result: "Fewer errors. Faster close.",
    },
  ],
};

export const SERVICE_TESTIMONIALS_HEADING = "What clients say";
export const SERVICE_TESTIMONIALS: ServiceTestimonial[] = [
  {
    quote:
      "The team didn't just build an automation; they re-engineered our entire operations workflow. We're moving twice as fast now.",
    name: "Alex Rivera",
    title: "COO, HAUS",
  },
  {
    quote:
      "Finally, an automation partner who actually understands enterprise security requirements. No hand-waving, just solid execution.",
    name: "Sarah Jenkins",
    title: "VP Engineering, DataCorp",
  },
  {
    quote:
      "The team understood our complex integration requirements and built something that just works. Worth every penny.",
    name: "Michael Rodriguez",
    title: "VP of Sales, GrowthLabs",
  },
  {
    quote:
      "They made sense of our complex requirements and produced a solution that just works. Couldn't be happier with the value.",
    name: "Marcia Solis",
    // Verbatim — the live page spells this company "HOUS" here, vs. "HAUS"
    // for the first testimonial above. Likely the same client, inconsistently
    // typed; kept as shown rather than guessing which spelling is correct.
    title: "VP Engineering, HOUS",
  },
];

export const SERVICE_FAQ: { eyebrow: string; heading: string; subheading: string; items: ServiceFaqItem[] } = {
  eyebrow: "FAQ",
  heading: "Common questions",
  subheading: "Everything you need to know before we start working together.",
  items: [
    {
      question: "How long does a typical automation project take?",
      answer:
        "It depends on complexity. A single workflow can be live in a few weeks. Multi-system projects with AI components typically take longer. We'll give you a realistic timeline after our discovery call—no surprises.",
    },
    {
      question: "What access do you need to our systems?",
      answer:
        "We request only the minimum access required for each integration. For most projects, this means API keys or OAuth connections. We document all access and follow least-privilege principles.",
    },
    {
      question: "Who owns the automations you build?",
      answer:
        "You do. Everything we build belongs to you. We provide full documentation, and you can maintain or modify the workflows yourself. We're also happy to provide ongoing support if you prefer.",
    },
    {
      question: "What happens if something breaks after launch?",
      answer:
        "We don't disappear after launch. If something breaks or needs adjustment, our team is available to quickly diagnose and resolve the issue. We also offer ongoing support and optimization to ensure everything continues to run smoothly as your business evolves.",
    },
    {
      // Verbatim mismatch (1 of 3) — this answer is actually the live
      // page's answer for "Can you work with our existing tools and
      // vendors?" (below). Kept in place rather than reordered.
      question: "How do you handle data security?",
      answer:
        "Absolutely. We're platform-agnostic and work with whatever tools you already use. If you have preferred vendors or existing technical teams, we collaborate seamlessly.",
    },
    {
      // Verbatim mismatch (2 of 3) — this answer is actually the live
      // page's answer for "What if we're not sure what to automate
      // first?" (below).
      question: "Can you work with our existing tools and vendors?",
      answer:
        "That's exactly what our discovery process is for. We'll help you identify the highest-impact opportunities based on time savings, error reduction, and strategic value.",
    },
    {
      question: "Do you offer ongoing maintenance?",
      answer:
        "Yes. Ongoing maintenance is a key part of our approach. We provide continuous support, updates, monitoring, and optimization to ensure long-term stability, performance, and scalability.",
    },
    {
      // Verbatim mismatch (3 of 3) — this answer doesn't belong to any
      // automation-project question at all. It reads like leftover
      // coaching/consulting-template copy ("50–60 minute sessions",
      // meeting cadence) that was never replaced. Flagged for a manual
      // wp-admin fix rather than invented a plausible-sounding answer.
      question: "What if we're not sure what to automate first?",
      answer:
        "Each session is 50-60 minutes. We'll decide together how often to meet—typically weekly or bi-weekly, depending on your needs and schedule.",
    },
  ],
};

export const SERVICE_CTA = {
  eyebrow: "Get Started",
  heading: "Let's talk about your workflows",
  subhead: "Book a discovery call or send us a message. We'll get back to you within one business day.",
};
