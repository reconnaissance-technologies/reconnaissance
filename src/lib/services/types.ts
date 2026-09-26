/**
 * Service page data shape — matches the live site's Service template.
 *
 * Unlike the Industry template (each of the 7 pages has genuinely distinct
 * Challenge/Solutions/Use Cases/Impact content), the live Service template
 * turned out to be almost entirely shared boilerplate: across all 6 service
 * pages, only the hero (title + one-line subhead) actually changes.
 * Everything else — the stat callout, the "problem with messy internal
 * tools" copy, the deliverables phases, the 4-step process, the 3 example
 * cards, the tech-stack strip, the testimonials, and the FAQ — is
 * word-for-word identical from page to page (confirmed 2026-09-26 by
 * diffing get_page_text output across all 6 live pages). See the doc
 * comment in seed-services.ts for what that means for this file's shape.
 */

export type ServiceHero = {
  /** Always "Services" on the live site — the small "✦ Services"
   * breadcrumb above the H1, linking back to /services/. Kept as a field
   * (rather than hardcoded in the template) for parity with the Industry
   * template's hero shape, not because it varies. */
  eyebrow: string;
  title: string;
  subhead: string;
};

export type Service = {
  slug: string;
  /** Display name — note this doesn't always match the live site's own H1
   * for the same service; see the "AI Tools & Agents" naming-inconsistency
   * flag in seed-services.ts. */
  name: string;
  hero: ServiceHero;
};

// ---- Shared/templated content (identical across all 6 service pages) ----

export type ServiceStandardPoint = {
  label: string;
};

export type ServiceDeliverablePhase = {
  number: string;
  title: string;
  description: string;
  items: string[];
};

export type ServiceProcessStep = {
  step: number;
  title: string;
  description: string;
};

export type ServiceExample = {
  tags: string[];
  title: string;
  inputs: string;
  automationSteps: string[];
  result: string;
};

export type ServiceTestimonial = {
  quote: string;
  name: string;
  title: string;
};

export type ServiceFaqItem = {
  question: string;
  answer: string;
};
