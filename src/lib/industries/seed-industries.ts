import { Industry } from "./types";

/**
 * Seed data for the Industry page template, until this is wired up to
 * WPGraphQL against the `group_industry_dynamic_content` ACF field group
 * (see /mnt/user-data/outputs/acf-industry-fields.json for the field
 * sketch this shape is designed to match 1:1).
 *
 * All seven industries (`logistics`, `civicMunicipalInfrastructure`,
 * `ecommerce`, `healthcare`, `finance`, `realEstate`, and `education`) are
 * complete and **real** — every string below was pulled verbatim from their
 * live https://reconnaissance.test/industries/<slug>/ pages (hero,
 * challenge, solutions, use cases, impact, and CTA copy) on 2026-09-26, not
 * paraphrased or invented. Two things worth knowing when reading or editing
 * this data:
 *   - Civic's use-case cards have no tag badges on the live page (unlike
 *     the others'), hence the empty `tags: []` there — see the field
 *     comment in `IndustryUseCase` in types.ts.
 *   - A couple of pages have visible content-quality issues on the live
 *     site itself (copy that looks pasted from a different industry, or an
 *     impact point whose description doesn't match its own title) —
 *     Logistics' "Real-Time Shipment Tracking" and Education's "AP/AR
 *     Workflow Orchestration"/"Liquidity & Cash Forecasting" points are
 *     flagged inline where they occur. These are kept verbatim rather than
 *     silently "corrected," since the brief is to mirror the live site, not
 *     to edit it; they're worth a manual re-check/re-save in wp-admin.
 *
 * The CTA section (`cta`) is identical word-for-word across all seven
 * pages — it appears to be shared/templated copy on the live site rather
 * than per-industry content, which is why it repeats unchanged below.
 */

const civicMunicipalInfrastructure: Industry = {
  slug: "civic-municipal-infrastructure",
  name: "Civic & Municipal Infrastructure",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Civic & Municipal Infrastructure Enterprises",
    subhead:
      "Deploy edge-computing traffic analytics and automated compliance workflows to modernize urban infrastructure and optimize internal revenue generation.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where Teams Get Stuck",
    paragraphs: [
      "Municipalities often struggle with fragmented data systems, manual traffic enforcement, and delayed revenue collection. Without integrated civic technology, transport authorities face operational paralysis and high leakage in internally generated revenue (IGR).",
      "We replace fragile manual processes with secure, AI-assisted edge computing networks engineered specifically for real-world governance.",
    ],
    points: [
      "Manual traffic interdiction and violation processing",
      "Fragmented municipal databases and siloed reporting",
      "Revenue leakage in compliance fine collection",
      "Lack of real-time visibility across urban corridors",
      "Lengthy, unstructured procurement cycles",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "What we help automate",
    items: [
      {
        tag: "Efficiency",
        title: "Edge-Computing Analytics",
        description: "Utilizing advanced ANPR camera integrations to process traffic data in real-time at the edge.",
        bullets: ["Automated data pipelines", "Real-time dashboards"],
      },
      {
        tag: "Operations",
        title: "Automated Compliance",
        description:
          "Deploying persistent workflows that handle the entire lifecycle of a traffic violation, from capture to fine issuance.",
        bullets: ["Invoice and payment workflows", "Internal approvals and routing"],
      },
      {
        tag: "Future Readiness",
        title: "Revenue Optimization",
        description: "Empowering state transport authorities with high-integrity data to sustainably drive IGR.",
        bullets: ["Internal copilots for finance teams", "Document processing (contracts, invoices)"],
      },
    ],
  },
  useCases: {
    eyebrow: "Automation Examples",
    heading: "See what's possible",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        // No tag badges shown for this industry's use-case cards on the live
        // page (unlike Logistics') — see the `tags` field comment in types.ts.
        tags: [],
        title: "Traffic Interdiction",
        inputs: "Edge Camera Feeds",
        automationSteps: ["Capture", "Analyze", "Tag"],
        result: "Real-time offender tracking.",
      },
      {
        tags: [],
        title: "Fine Automation",
        inputs: "Violation Data",
        automationSteps: ["Extract", "Match Database", "Issue"],
        result: "Faster compliance enforcement.",
      },
      {
        tags: [],
        title: "IGR Analytics",
        inputs: "City-wide Data",
        automationSteps: ["Aggregate", "Synthesize", "Report"],
        result: "Clear revenue visibility.",
      },
    ],
  },
  impact: {
    eyebrow: "Typical Outcomes",
    heading: "The Impact of Automation",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~60%",
        label: "faster violation processing",
        description: "Through automated edge-camera capture.",
      },
      {
        number: "~80%",
        label: "less manual reporting",
        description: "Achieved in high-volume traffic corridors.",
      },
    ],
    quote: {
      text: "Transitioning municipal and local government systems from manual to automated Internally Generated Revenue (IGR) collection significantly cuts down financial leakages and improves public transparency.",
      source: "Ekiti State Government",
    },
    points: [
      {
        title: "Edge AI Processing",
        description: "Real-time analytics directly at the camera source.",
      },
      {
        title: "Automated Ticketing",
        description: "End-to-end reconciliation for municipal fines.",
      },
      {
        title: "Hardware Integration",
        description: "Seamless syncing with Different ANPR systems.",
      },
      {
        title: "Data Sovereignty",
        description: "Strict adherence to the Nigeria Data Protection Act.",
      },
      {
        title: "Predictive Maintenance",
        description: "AI-driven alerts for infrastructure health.",
      },
      {
        title: "Command Center Dashboards",
        description: "Unified views for municipal transport authorities.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

const ecommerce: Industry = {
  slug: "ecommerce",
  name: "eCommerce",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For eCommerce Enterprises",
    subhead:
      "Sync orders, inventory, support tickets, and returns so ops stays clean while customers get fast, consistent updates.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where the sale slips away",
    paragraphs: [
      "Most online retailers aren't short on tools, they're short on integration. A cart-recovery app here, a POS there, a WhatsApp line for orders, three payment dashboards that don't talk to each other. Each tool works fine on its own, but stitching them together and re-stitching them every time you add a channel, a payment provider, or a new market, is where things break.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom storefront or checkout flow built from scratch, a connective layer across your existing stack, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "Point tools that don't talk to each other",
      "Manual rework every time a new channel or gateway is added",
      "No ownership of your own automation logic or data",
      "Workflows that break when a vendor changes their API or pricing",
      "No single view across storefront, social, and support",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep customers checking out",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Storefront",
        description:
          "From checkout flows to custom storefronts, we design and build software tailored to how you actually sell — not a generic platform you have to bend around.",
        bullets: ["Custom storefront & checkout builds", "Built around your catalog, your customers, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — storefront, payments, inventory, support — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your commerce stack", "One source of truth for orders, stock & customers"],
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
    eyebrow: "In Practice",
    heading: "From browse to bought",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Storefront, Social & Payments",
        inputs: "Storefront, WhatsApp/Instagram orders, payment gateways",
        automationSteps: ["Connect", "Sync", "Reconcile"],
        result: "One system instead of five disconnected tools.",
      },
      {
        tags: ["Build", "Custom"],
        title: "Building a Custom Checkout From Scratch",
        inputs: "Catalog size, customer flows, payment rules",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A storefront built for how you actually sell.",
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
    eyebrow: "Proven Impact",
    heading: "What retention actually looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~30%",
        label: "fewer abandoned carts",
        description: "Typical improvement through automated recovery flows across email, SMS, and WhatsApp.",
      },
      {
        number: "~60%",
        label: "faster support response",
        description: "Achieved by routing order-status and support questions straight to an AI agent with live order data.",
      },
    ],
    quote: {
      text: "Social and conversational channels aren't a side note to online retail anymore — they're where a growing share of the shopping journey actually happens.",
      source: "Digital Commerce Outlook 2026",
    },
    points: [
      {
        title: "Automated Cart Recovery",
        description: "Multi-channel reminders across email, SMS, and WhatsApp that bring shoppers back to finish checkout.",
      },
      {
        title: "Real-Time Inventory Sync",
        description: "One source of truth for stock across your storefront, social shops, and marketplaces.",
      },
      {
        title: "AI-Powered Order Support",
        description: "Instant answers to \"where is my order\" and common questions, day or night.",
      },
      {
        title: "Payment & Fraud Reconciliation",
        description: "Automated matching across payment gateways that catches failed payments and disputes early.",
      },
      {
        title: "Personalized Retention Flows",
        description: "Automated win-back and loyalty campaigns based on real purchase behavior.",
      },
      {
        title: "Social & WhatsApp Commerce Ops",
        description: "Turning Instagram and WhatsApp orders into tracked, fulfillable transactions instead of manual DMs.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

const healthcare: Industry = {
  slug: "healthcare",
  name: "Healthcare",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Healthcare Enterprises",
    subhead:
      "Reduce admin load by automating scheduling, intake routing, and internal handoffs—without touching sensitive clinical workflows.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where care gets delayed",
    paragraphs: [
      "Most healthcare practices aren't short on software — they're short on integration. A scheduling tool here, an EHR there, a separate billing system, and a patient portal that doesn't talk to any of them. Each tool works fine on its own, but stitching them together — and re-stitching them every time a payer changes a rule or you add a new location — is where care teams lose hours they should be spending on patients.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom clinical workflow built from scratch, a connective layer across your existing systems, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "Point systems that don't share patient data",
      "Manual rework every time a payer or regulation changes",
      "No ownership of your own clinical workflows or data",
      "Workflows that break when a vendor changes their API or pricing",
      "No single view across scheduling, records, and billing",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep care connected",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Care Team",
        description:
          "From intake to scheduling, we design and build software tailored to how your practice actually runs — not a generic EHR bolt-on you have to bend around.",
        bullets: ["Custom intake & scheduling builds", "Built around your protocols, your patients, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — EHR, scheduling, billing, patient portal — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your clinical stack", "One source of truth for patients, records & claims"],
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
    eyebrow: "In Practice",
    heading: "From intake to outcome",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Intake, Records & Billing",
        inputs: "EHR, scheduling system, billing/claims",
        automationSteps: ["Connect", "Sync", "Reconcile"],
        result: "One system instead of five disconnected tools.",
      },
      {
        tags: ["Build", "Custom"],
        title: "Building a Patient Portal From Scratch",
        inputs: "Patient volume, care workflows, compliance rules",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A portal built for how your practice actually runs.",
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
    eyebrow: "Proven Impact",
    heading: "What connected care looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~40%",
        label: "fewer scheduling no-shows",
        description: "Typical improvement through automated reminders and confirmations across SMS, email, and patient portal.",
      },
      {
        number: "~50%",
        label: "faster claims processing",
        description: "Achieved by routing claims and prior-authorization requests through an integrated, automated workflow.",
      },
    ],
    quote: {
      text: "The clinics pulling ahead aren't the ones with the most software — they're the ones whose systems actually talk to each other.",
      source: "Digital Health Outlook 2026",
    },
    points: [
      {
        title: "Automated Appointment Reminders",
        description: "Multi-channel reminders across SMS, email, and patient portal that cut down no-shows.",
      },
      {
        title: "Real-Time Records Sync",
        description: "One source of truth for patient records across every system and location.",
      },
      {
        title: "AI-Powered Patient Support",
        description: "Instant answers to scheduling and billing questions, day or night.",
      },
      {
        title: "Claims & Billing Reconciliation",
        description: "Automated matching across payers and billing systems that catches denials and errors early.",
      },
      {
        title: "Streamlined Prior Authorization",
        description: "Automated routing and tracking that cuts turnaround time on payer approvals.",
      },
      {
        title: "Care Coordination Across Providers",
        description: "Shared records and referral tracking that keep every provider on the same page.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

const finance: Industry = {
  slug: "finance",
  name: "Finance",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Finance Enterprises",
    subhead: "Streamline approvals and reconciliations with controlled automations that log actions and keep humans in the loop.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where the numbers get stuck",
    paragraphs: [
      "Most finance teams aren't short on software — they're short on integration. A general ledger here, a payments platform there, a separate expense system, and a reporting tool that doesn't talk to any of them. Each tool works fine on its own, but stitching them together — and re-stitching them every time a regulator changes a rule or you add a new entity — is where finance teams lose hours they should be spending on the numbers that matter.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom reconciliation or reporting system built from scratch, a connective layer across your existing tools, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "Point systems that don't share financial data",
      "Manual rework every time a regulation or reporting standard changes",
      "No ownership of your own reconciliation logic or data",
      "Workflows that break when a vendor changes their API or pricing",
      "No single view across ledger, payments, and reporting",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep finance connected",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Finance Team",
        description:
          "From reconciliation flows to reporting dashboards, we design and build software tailored to how your finance team actually works — not a generic ERP module you have to bend around.",
        bullets: ["Custom reconciliation & reporting builds", "Built around your entities, your policies, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — ERP, payments, expense management, reporting — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your financial stack", "One source of truth for transactions, accounts & reports"],
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
    eyebrow: "In Practice",
    heading: "From transaction to close",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Ledger, Payments & Reporting",
        inputs: "ERP, payment processors, expense systems",
        automationSteps: ["Connect", "Sync", "Reconcile"],
        result: "One system instead of five disconnected tools.",
      },
      {
        tags: ["Build", "Custom"],
        title: "Building a Reporting Dashboard From Scratch",
        inputs: "Transaction volume, reporting cadence, compliance rules",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A dashboard built for how your finance team actually works.",
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
    eyebrow: "Proven Impact",
    heading: "What connected finance looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~50%",
        label: "faster month-end close",
        description: "Typical improvement through automated reconciliation and reporting workflows across your financial stack.",
      },
      {
        number: "~70%",
        label: "fewer reconciliation errors",
        description: "Achieved by routing transactions through an integrated, automated matching workflow.",
      },
    ],
    quote: {
      text: "The finance teams pulling ahead aren't the ones with the most software — they're the ones whose systems actually talk to each other.",
      source: "Financial Operations Outlook 2026",
    },
    points: [
      {
        title: "Automated Month-End Close",
        description: "Automated reconciliation and reporting workflows that cut close time from weeks to days.",
      },
      {
        title: "Real-Time Financial Visibility",
        description: "One source of truth for transactions and accounts across every system and entity.",
      },
      {
        title: "AI-Powered Finance Support",
        description: "Instant answers to reconciliation and reporting questions, day or night.",
      },
      {
        title: "Payment & Transaction Reconciliation",
        description: "Automated matching across payment processors and ledgers that catches errors and discrepancies early.",
      },
      {
        title: "Streamlined Regulatory Reporting",
        description: "Automated routing and tracking that cuts turnaround time on compliance filings.",
      },
      {
        title: "Cross-Entity Consolidation",
        description: "Shared data and consolidated reporting that keep every entity on the same page.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

const realEstate: Industry = {
  slug: "real-estate",
  name: "Real Estate",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Real Estate Enterprises",
    subhead:
      "Move faster from inquiry → qualification → viewing → follow-ups by connecting forms, CRM, calendars, and messaging.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where deals lose momentum",
    paragraphs: [
      "Most real estate firms aren't short on tools, they're short on integration. A CRM here, a listing platform there, a separate document signing tool, and a property management system that doesn't talk to any of them. Each tool works fine on its own, but stitching them together — and re-stitching them every time you add a market, a property type, or a compliance requirement — is where deals lose momentum and agents lose hours they should be spending with clients.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom listing or transaction platform built from scratch, a connective layer across your existing tools, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "Point systems that don't share listing or client data",
      "Manual rework every time you add a market or property type",
      "No ownership of your own valuation or matching logic",
      "Workflows that break when a vendor changes their API or pricing",
      "No single view across listings, transactions, and clients",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep real estate moving",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Portfolio",
        description:
          "From listing platforms to transaction workflows, we design and build software tailored to how your firm actually operates — not a generic CRM you have to bend around.",
        bullets: ["Custom listing & transaction platforms", "Built around your markets, your properties, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — CRM, listings, document signing, property management — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your real estate stack", "One source of truth for listings, transactions & clients"],
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
    eyebrow: "In Practice",
    heading: "From listing to close",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Listings, CRM & Transactions",
        inputs: "MLS feeds, CRM, document signing",
        // Verbatim from the live page — "CRM" as the final automation step
        // (rather than a verb like the other cards' steps) reads oddly, but
        // it's what the site shows, so it's kept as-is rather than "fixed".
        automationSteps: ["Connect", "Route", "CRM"],
        result: "Cleaner leads. Faster handoff.",
      },
      {
        tags: ["Build", "Custom"],
        title: "Building a Property Matching Engine From Scratch",
        inputs: "Property data, buyer preferences, market rules",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A matching engine built for how you actually sell.",
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
    eyebrow: "Proven Impact",
    heading: "What connected real estate looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~50%",
        label: "faster reporting",
        description: "Through automated listing sync and document generation.",
      },
      {
        number: "~70%",
        label: "less manual processing",
        description: "Achieved in high-volume listing intake and transaction workflows.",
      },
    ],
    quote: {
      text: "Technology in real estate is shifting from a 'nice-to-have' to the primary driver of deal velocity and client experience.",
      source: "Strategic Outlook 2026",
    },
    points: [
      {
        title: "Intelligent Listing Verification",
        description:
          "Autonomous property data verification and compliance screening to eliminate onboarding bottlenecks without compromising accuracy.",
      },
      {
        title: "Valuation Automation",
        description: "ML-driven scoring that synthesizes structured and unstructured data for faster, more accurate pricing decisions.",
      },
      {
        title: "Predictive Deal Risk Alerts",
        description:
          "Real-time anomaly detection using behavioral AI to flag suspicious listings and transactions across multiple channels simultaneously.",
      },
      {
        title: "Commission & Payout Orchestration",
        description:
          "End-to-end reconciliation between agents and brokerages, reducing manual matching errors by up to 95% with high precision.",
      },
      {
        title: "Inventory & Pipeline Forecasting",
        description: "Automated data aggregation for real-time inventory insights, replacing static spreadsheets with dynamic intelligence.",
      },
      {
        title: "AI-Powered Client Support",
        description: "Natural language agents that resolve routine buyer and seller inquiries and intelligently route complex issues to human agents.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

const education: Industry = {
  slug: "education",
  name: "Education",
  status: "full",
  hero: {
    eyebrow: "Industries",
    title: "Precision Software For Education Enterprises",
    subhead: "Connect admissions, onboarding, and student support so staff spend less time on manual coordination and more on delivery.",
  },
  challenge: {
    eyebrow: "The Challenge",
    heading: "Where administration slows learning",
    paragraphs: [
      "Most schools and education providers aren't short on tools, they're short on integration. A student information system here, an LMS there, a separate admissions portal, and a communications tool that doesn't talk to any of them. Each tool works fine on its own, but stitching them together — and re-stitching them every time you add a program, a cohort, or a compliance requirement — is where staff lose hours they should be spending on students.",
      "We don't just connect what you have — we build what you need, and we can extend your team to deliver it. Whether that's a custom admissions or student portal built from scratch, a connective layer across your existing tools, or an embedded engineering team working as an extension of yours, we meet you where you are.",
    ],
    points: [
      "Point systems that don't share student or enrollment data",
      "Manual rework every time you add a program or cohort",
      "No ownership of your own scheduling or matching logic",
      "Workflows that break when a vendor changes their API or pricing",
      "No single view across admissions, enrollment, and student success",
    ],
  },
  solutions: {
    eyebrow: "Our Deliverables",
    heading: "How we keep learning moving",
    items: [
      {
        tag: "Custom Build",
        title: "Built for Your Institution",
        description:
          "From admissions portals to student success dashboards, we design and build software tailored to how your institution actually operates — not a generic SIS you have to bend around.",
        bullets: ["Custom admissions & student portals", "Built around your programs, your cohorts, your rules"],
      },
      {
        tag: "Integration",
        title: "Systems, Connected",
        description:
          "We integrate the tools you already run — SIS, LMS, admissions, communications — into one system that shares data instead of trapping it.",
        bullets: ["API integration across your education stack", "One source of truth for students, enrollment & progress"],
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
    eyebrow: "In Practice",
    heading: "From enrollment to graduation",
    subheading: "Real scenarios we've automated for teams like yours",
    items: [
      {
        tags: ["Integration", "Orchestration"],
        title: "Unifying Admissions, SIS & Communications",
        inputs: "Application forms, SIS, messaging platform",
        automationSteps: ["Connect", "Sync", "Reconcile"],
        result: "One system instead of five disconnected tools.",
      },
      {
        tags: ["Build", "Custom"],
        title: "Building a Student Success Dashboard From Scratch",
        inputs: "Enrollment data, attendance, academic records",
        automationSteps: ["Design", "Build", "Ship"],
        result: "A dashboard built for how your team actually supports students.",
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
    eyebrow: "Proven Impact",
    heading: "What connected education looks like",
    subheading: "Clear milestones, constant communication, and zero hand-waving. Here's how we get from idea to impact.",
    stats: [
      {
        number: "~50%",
        label: "faster reporting",
        description: "Through automated admissions review and enrollment processing.",
      },
      {
        number: "~70%",
        label: "less manual processing",
        description: "Achieved in high-volume admissions and onboarding workflows.",
      },
    ],
    quote: {
      text: "Technology in education is shifting from a 'nice-to-have' to the primary driver of student outcomes and institutional efficiency.",
      source: "Strategic Outlook 2026",
    },
    points: [
      {
        title: "Intelligent Application Screening",
        description: "Autonomous document verification and eligibility screening to eliminate application bottlenecks without compromising accuracy.",
      },
      {
        title: "Enrollment Automation",
        description: "ML-driven scoring that synthesizes structured and unstructured data for faster, more accurate admissions decisions.",
      },
      {
        title: "Predictive Enrollment Risk Alerts",
        description:
          "Real-time anomaly detection using behavioral AI to flag suspicious applications and activity across multiple channels simultaneously.",
      },
      {
        // Verbatim from the live page. Kept as-is rather than "corrected" —
        // these last two points ("AP/AR", "Liquidity & Cash Forecasting")
        // are finance-industry copy that doesn't match an Education page,
        // reading like they were copy-pasted from another industry. Same
        // class of issue as the Logistics "Real-Time Shipment Tracking"
        // mismatch already flagged in design-system.md §8; worth a manual
        // re-check/re-save in wp-admin, not a silent fix.
        title: "AP/AR Workflow Orchestration",
        description: "End-to-end reconciliation between banks and ERPs, reducing manual matching errors by up to 95% with high precision.",
      },
      {
        title: "Liquidity & Cash Forecasting",
        description: "Automated data aggregation for real-time liquidity insights, replacing static spreadsheets with dynamic intelligence.",
      },
      {
        title: "AI-Powered Support Triage",
        description: "Natural language agents that resolve routine account inquiries and intelligently route complex issues to human experts.",
      },
    ],
  },
  cta: {
    eyebrow: "Connect with an Expert",
    heading: "Let's review your workflows",
    subhead: "Let's map your workflows and identify where AI agents can drive the most significant impact for your institution.",
  },
};

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

export const industries: Industry[] = [
  civicMunicipalInfrastructure,
  logistics,
  ecommerce,
  healthcare,
  finance,
  realEstate,
  education,
];

export function getIndustry(slug: string): Industry | undefined {
  return industries.find((industry) => industry.slug === slug);
}
