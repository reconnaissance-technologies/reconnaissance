/**
 * Industry page data shape — matches the live site's Industry template
 * (design-system.md calls out the structure as "confirmed structurally
 * identical across all 7 industry pages") and the ACF field group sketched
 * in acf-industry-fields.json (hero_subhead, challenge_para1/2,
 * challenge_point_1-5, sol1-3_*, uc1-3_*, stat1-2_*, impact_quote*,
 * impact_point_1-6_*, cta_subhead).
 *
 * `status` distinguishes the one industry (`logistics`) whose content below
 * was pulled verbatim from the live reconnaissance.test page from the
 * other six, which are seeded with only what's real (name, slug, and the
 * one-line description already used in the mega menu) — see
 * seed-industries.ts for why the rest isn't invented.
 */

export type IndustrySolution = {
  tag: string;
  title: string;
  description: string;
  bullets: [string, string];
};

export type IndustryUseCase = {
  tags: [string, string];
  title: string;
  inputs: string;
  automationSteps: string[];
  result: string;
};

export type IndustryStat = {
  number: string;
  label: string;
  description: string;
};

export type IndustryImpactPoint = {
  title: string;
  description: string;
};

export type IndustryFullContent = {
  status: "full";
  hero: {
    eyebrow: string;
    title: string;
    subhead: string;
  };
  challenge: {
    eyebrow: string;
    heading: string;
    paragraphs: [string, string];
    points: string[];
  };
  solutions: {
    eyebrow: string;
    heading: string;
    items: IndustrySolution[];
  };
  useCases: {
    eyebrow: string;
    heading: string;
    subheading: string;
    items: IndustryUseCase[];
  };
  impact: {
    eyebrow: string;
    heading: string;
    subheading: string;
    stats: IndustryStat[];
    quote: { text: string; source: string };
    points: IndustryImpactPoint[];
  };
  cta: {
    eyebrow: string;
    heading: string;
    subhead: string;
  };
};

export type IndustryStubContent = {
  status: "stub";
  hero: {
    eyebrow: string;
    title: string;
    subhead: string;
  };
};

export type Industry = {
  slug: string;
  name: string;
} & (IndustryFullContent | IndustryStubContent);
