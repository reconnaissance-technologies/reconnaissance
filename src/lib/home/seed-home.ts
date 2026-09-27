import type {
  HomeArticle,
  HomeCaseStudy,
  HomeExpertiseCard,
  HomeIndustryCard,
  HomeProcessStep,
  HomeStackCard,
  HomeTestimonial,
} from "./types";

/**
 * All content below was pulled verbatim from the live reconnaissance.test
 * homepage on 2026-09-27, the same methodology used for the Industry and
 * Service templates (see seed-industries.ts / seed-services.ts).
 *
 * Two content-quality issues found on this page, carried through verbatim
 * per project policy rather than silently fixed:
 *
 * 1. **The "Our Core Expertise" teaser cards don't describe the services
 *    they link to — this is the most visible content bug found on the
 *    site so far.** All 6 cards use generic Vamtam-theme-demo copy
 *    ("Mobile App Development", "AI/ML Development", "Cybersecurity",
 *    "Cloud & Infrastructure", "IoT & Emerging Tech", "Software
 *    Development") that doesn't match any of the site's real 6 services,
 *    yet each card links to one of the real `/services/[slug]/` pages —
 *    in what looks like arbitrary order. For example, the card titled
 *    "Mobile App Development" links to Support Triage & Ticketing, and
 *    "IoT & Emerging Tech" (which even mentions "AR/VR" and "Chatbots" —
 *    capabilities not offered anywhere else on the site) links to Systems
 *    Integration. This reads like leftover demo content whose 6 links
 *    were bulk-swapped to the real service URLs without anyone updating
 *    the card text. HOME_EXPERTISE_CARDS below preserves the live
 *    title/description → href pairing exactly; each card's `href` is
 *    flagged inline. This needs a real content decision in wp-admin (does
 *    the team want 6 cards that describe the actual 6 services, or do
 *    they want to keep broader capability messaging here and link
 *    somewhere other than the service pages?), not a guess from this
 *    codebase.
 * 2. **One of the "Trusted Technology Partner" client logos repeats.**
 *    The live marquee shows Cloudframe, Atlas Property, Finstack Group,
 *    RouteOne, Northbridge, then RouteOne again. Likely a placeholder
 *    logo set (these don't appear to be real named clients anywhere else
 *    on the site) reused to fill out the strip; HOME_TRUSTED_BY below
 *    lists each name once rather than repeating the duplicate.
 *
 * Two things that look like they could be issues but, after checking,
 * aren't:
 *   - The "Engineered For Your Industry" teaser only shows 5 of the 7 real
 *     industries (Civic & Municipal Infrastructure, Logistics, eCommerce,
 *     Healthcare, Finance — Real Estate and Education are absent from
 *     this section specifically). Each of the 5 shown links correctly and
 *     its description matches that industry's own real hero subhead, so
 *     this looks like a deliberate curated subset for the homepage rather
 *     than a bug. Confirm with the team before "completing" it to all 7.
 *   - All 3 "Proven results" case studies are tagged "FINTECH", and two of
 *     the three show an identical "52%" headline stat for two different
 *     metrics (lead conversion vs. faster resolution). Plausible rather
 *     than clearly wrong (early clients genuinely could all be fintech),
 *     so this isn't flagged as a mismatch — just noted here in case a
 *     future edit reveals it was actually a copy/paste.
 *
 * The homepage's "How we work" process section reuses the same 4 step
 * *titles* as the Service template's process section (see
 * SERVICE_PROCESS in seed-services.ts) but has its own, differently
 * worded step *descriptions* — this one genuinely is homepage-specific
 * copy, not shared boilerplate, so it's kept as its own HOME_PROCESS
 * constant rather than reusing SERVICE_PROCESS.
 */

export const HOME_HERO = {
  eyebrow: "Enterprise Software, SaaS, & Civic Tech",
  title: "Precision Software Engineering. Practical AI Infrastructure.",
  subhead: "We architect secure, high-performance applications and proprietary systems across industries.",
  primaryCta: { label: "Architect Your Next Project", href: "/book-a-discovery-call/" },
  secondaryCta: { label: "Discover Our Solutions", href: "#examples" },
};

export const HOME_TRUSTED_BY = {
  heading: "Trusted Technology Partner for World-Class Enterprises",
  // See module doc comment #2 — "RouteOne" repeats on the live marquee;
  // listed once here.
  names: ["Cloudframe", "Atlas Property", "Finstack Group", "RouteOne", "Northbridge"],
};

export const HOME_EXPERTISE = {
  eyebrow: "Our Core Expertise",
  heading: "Engineering Your Digital Foundation.",
  subhead:
    "From core infrastructure provisioning to custom software development & software security, we provide the essential IT services that keep you competitive and your operations running flawlessly.",
};

// See module doc comment #1 — title/description text here is verbatim
// live-site copy that does NOT describe the service each card links to.
export const HOME_EXPERTISE_CARDS: HomeExpertiseCard[] = [
  {
    title: "Software Development",
    description: "Get world-class software solutions that scale and thrive.",
    href: "/services/ai-workflow-automation/",
  },
  {
    title: "Mobile App Development",
    description: "Get custom and responsive mobile apps for iOS and Android.",
    href: "/services/support-triage-ticketing/",
  },
  {
    title: "AI/ML Development",
    description: "Building AI solutions tailored to your business needs.",
    href: "/services/ai-tools-agents/",
  },
  {
    title: "Cybersecurity",
    description: "Secure your digital assets with advanced cybersecurity.",
    href: "/services/data-orchestration/",
  },
  {
    title: "Cloud & Infrastructure",
    description: "Scale securely with cloud and infrastructure solutions.",
    href: "/services/support-monitoring/",
  },
  {
    title: "IoT & Emerging Tech",
    description:
      "Improve workflows with IoT, transform interactions with AR/VR, and design smarter Chatbots for customer support.",
    href: "/services/system-integrations/",
  },
];

export const HOME_STACK = {
  eyebrow: "Engineering Pipelines",
  heading: "See How We Build.",
  subhead: "The enterprise-grade frameworks, languages, and deployment architectures powering our software solutions.",
};

export const HOME_STACK_CARDS: HomeStackCard[] = [
  {
    tags: ["Web", "UI/UX"],
    title: "Frontend & CMS Architecture",
    tech: ["React", "Vue.js", "Tailwind CSS", "Next.js", "Strapi", "Drupal", "WordPress", "Magento", "Shopify", "Sitecore", "WooCommerce"],
    result: "High-performance, responsive interfaces.",
  },
  {
    tags: ["Mobile", "Cross-Platform"],
    title: "Mobile & XR Engineering",
    tech: ["Flutter", "Swift", "Kotlin", "React Native", "Unity 3D", "Java", "Unreal Engine", "ARCore / ARKit", "OpenXR", "WebXR"],
    result: "Seamless, native-feel user experiences.",
  },
  {
    tags: ["Backend", "API"],
    title: "Backend & API Frameworks",
    tech: ["Laravel", "Node.js", "Python", ".NET Core", "Java", "Ruby", ".NET", "Go (Golang)", "Rust", "PHP", "FastAPI", "Django"],
    result: "Secure, scalable server environments.",
  },
  {
    tags: ["Data", "Processing"],
    title: "Database & Event Streaming",
    // "Superbase" is verbatim from the live page — almost certainly meant
    // to be "Supabase". Kept as shown rather than silently corrected.
    tech: ["PostgreSQL", "MongoDB", "Elastic Search", "Kafka", "MariaDB", "DynamoDB", "MySQL", "SQLite", "Sybase", "Superbase"],
    result: "Resilient, real-time data pipelines.",
  },
  {
    tags: ["Cloud", "DevOps"],
    title: "Cloud, DevOps & QA",
    // "Nobus Cloud" is verbatim — not a tool we could identify; possibly a
    // typo for another vendor. Kept as shown.
    tech: ["AWS", "Docker", "Kubernetes", "Jenkins", "Selenium", "CircleCI", "Maven", "Google Cloud", "Azure", "Openshift", "Nobus Cloud"],
    result: "Zero-downtime, secure provisioning.",
  },
  {
    tags: ["AI", "ML"],
    title: "AI & Machine Learning",
    tech: ["Computer Vision", "Generative AI", "NLP", "Python", "Edge AI", "TensorRT", "Deep Learning", "RAG"],
    result: "Intelligent & automated secure systems.",
  },
];

export const HOME_PROCESS: { eyebrow: string; heading: string; subheading: string; steps: HomeProcessStep[]; phoneCta: string; phone: string } = {
  eyebrow: "How we work",
  heading: "A Process Built For Results",
  subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get your software from idea to impact.",
  steps: [
    {
      step: 1,
      title: "Discovery & Success Criteria",
      description:
        "Every engagement is anchored by transparent, documented milestones to ensure total alignment with your business vision.",
    },
    {
      step: 2,
      title: "Map Workflows + Data Access",
      description:
        "We blueprint your data architecture and system connections. We document every API and integration requirement before writing a single line of code.",
    },
    {
      step: 3,
      title: "Build + Test + Security Review",
      description:
        "We engineer incrementally using modern, scalable frameworks. Because security is paramount, we enforce zero-trust network practices at every stage of development.",
    },
    {
      step: 4,
      title: "Launch + Monitor + Iterate",
      description:
        "Post-launch, we continuously monitor application performance, catch issues early, and optimize your infrastructure based on real user data.",
    },
  ],
  phoneCta: "Prefer to talk first?",
  phone: "+234 907 479 9583",
};

export const HOME_INDUSTRIES = {
  eyebrow: "Industries",
  heading: "Engineered For Your Industry",
  subhead: "We tailor our software architecture to your precise operational, data, and regulatory compliance requirements.",
};

// Verbatim — the live homepage's industry carousel shows only these 5 of
// the site's 7 real industries. See module doc comment: this looks
// deliberate (a curated subset), not a bug, since each card here links
// correctly and matches that industry's own real hero subhead.
export const HOME_INDUSTRY_CARDS: HomeIndustryCard[] = [
  {
    name: "Civic & Municipal Infrastructure",
    description:
      "Deploy edge-computing traffic analytics and automated compliance workflows to modernize urban infrastructure and optimize internal revenue generation.",
    href: "/industries/civic-municipal-infrastructure/",
  },
  {
    name: "Logistics",
    description:
      "Turn dispatch → tracking → delivery → reconciliation into one connected system across your fleet, warehouse, and customers.",
    href: "/industries/logistics/",
  },
  {
    name: "eCommerce",
    description: "Sync orders, inventory, support tickets, and returns so ops stays clean while customers get fast, consistent updates.",
    href: "/industries/ecommerce/",
  },
  {
    name: "Healthcare",
    description:
      "Reduce admin load by automating scheduling, intake routing, and internal handoffs—without touching sensitive clinical workflows.",
    href: "/industries/healthcare/",
  },
  {
    name: "Finance",
    description: "Streamline approvals and reconciliations with controlled automations that log actions and keep humans in the loop.",
    href: "/industries/finance/",
  },
];

export const HOME_CASE_STUDIES = {
  eyebrow: "Proof & Credibility",
  heading: "Proven results",
  subhead: "Real results from real engagements. We measure success by outcomes, not activity.",
  viewAllHref: "/tag/assets/",
};

export const HOME_CASE_STUDY_ITEMS: HomeCaseStudy[] = [
  {
    number: "01",
    title: "Revenue Operations Automation",
    tag: "Fintech",
    stat: "52%",
    statLabel: "lead conversion",
    summary: "Automated scoring and handoff.",
    problem: "Sales team handled unqualified leads and manually transferred data between marketing and CRM systems.",
    approach: "Built automated lead scoring, enrichment workflows, and ownership assignment logic.",
    outcome: "Cleaner pipeline visibility, improved handoffs, and measurable lift in qualified conversions.",
    href: "/revenue-operations-automation/",
  },
  {
    number: "02",
    title: "Customer Support AI Agent",
    tag: "Fintech",
    stat: "52%",
    statLabel: "faster resolution",
    summary: "AI triage and auto-response routing.",
    problem: "Support agents manually triaged incoming tickets and repeated answers to common questions.",
    approach: "Deployed AI ticket classification, knowledge base integration, and smart routing to the right agent.",
    outcome: "Response times improved significantly, and agents focused on complex, high-value cases.",
    href: "/customer-support-ai-agent/",
  },
  {
    number: "03",
    title: "Automating Loan Processing",
    tag: "Fintech",
    stat: "38%",
    statLabel: "faster resolution",
    summary: "Automated document intake and routing.",
    problem: "Loan officers were spending 3+ hours daily on manual document validation, CRM updates, and status follow-ups.",
    approach: "Implemented AI-based document extraction, automated eligibility checks, and CRM workflow orchestration.",
    outcome: "Application processing time reduced, fewer manual errors, and faster decision turnaround.",
    href: "/automating-loan-processing/",
  },
];

export const HOME_TESTIMONIALS_HEADING = "What clients say";
export const HOME_TESTIMONIALS: HomeTestimonial[] = [
  {
    quote: "The team didn't just build an automation; they re-engineered our entire operations workflow. We're moving twice as fast now.",
    name: "Alex Rivera",
    title: "COO, Haus",
  },
  {
    quote:
      "Finally, an automation partner who actually understands enterprise security requirements. No hand-waving, just solid execution.",
    name: "Sarah Jenkins",
    title: "VP Engineering, DataCorp",
  },
  {
    quote: "The team understood our complex integration requirements and built something that just works. Worth every penny.",
    name: "Michael Rodriguez",
    title: "VP of Sales, GrowthLabs",
  },
  {
    quote: "They made sense of our complex requirements and produced a solution that just works. Couldn't be happier with the value.",
    name: "Marcia Solis",
    title: "VP Engineering, Hous",
  },
  {
    // New on the homepage — not one of the 4 reused on every Service page.
    quote: "They quickly grasped our complicated integration needs and delivered a solution that works flawlessly. Absolutely worth the investment.",
    name: "Adam Smith",
    title: "CEO, TechSpace",
  },
];

export const HOME_CTA = {
  eyebrow: "Get Started",
  heading: "Let's talk about your workflows",
  subhead: "Book a discovery call or send us a message. We'll get back to you within one business day.",
};

export const HOME_ARTICLES = {
  eyebrow: "From our blog",
  heading: "Articles & insights",
  // Verbatim — the live view-all link's text is actually "All articels"
  // (typo, not "articles"), confirmed via DOM inspection on 2026-09-27.
  // Its target is /articles-insights/, not /category/guide/ (that's the
  // separate "Guides" nav link — see seed-navigation.ts).
  viewAllLabel: "All articels",
  viewAllHref: "/articles-insights/",
};

// The live page loops these 3 real posts to fill a 9-slot carousel (an
// infinite-scroll illusion) — there are only 3 distinct articles. All 3
// hrefs below were confirmed via DOM `href` inspection, not guessed.
export const HOME_ARTICLE_ITEMS: HomeArticle[] = [
  {
    category: "Delivery & Ops",
    title: "Build vs Buy",
    description:
      "A clear decision framework for when a micro-tool is enough—and when reliable automation needs custom integration.",
    href: "/build-vs-buy/",
  },
  {
    category: "Security & Compliance",
    title: "Security Checklist",
    description: "What to verify before connecting tools—access scopes, secrets, logging, retention, and where sensitive data is allowed to flow.",
    href: "/security-checklist/",
  },
  {
    category: "Outcomes & Measurement",
    title: "Measure What Matters",
    description: "How to track automation impact using cycle time, quality, and error-rate signals instead of vanity metrics.",
    href: "/measure-what-matters/",
  },
];
