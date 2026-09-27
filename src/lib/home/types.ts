/**
 * Home page ("/") data shape. Content pulled verbatim from the live
 * reconnaissance.test homepage on 2026-09-27 — see seed-home.ts's module
 * doc comment for two content-quality issues found on this page, one of
 * them (the "Our Core Expertise" teaser cards) significant enough to be
 * the most visible content bug found on the site so far.
 */

export type HomeExpertiseCard = {
  title: string;
  description: string;
  /** The /services/[slug]/ page this card links to on the live site.
   * See seed-home.ts — for every card here, the title/description text is
   * generic Vamtam-demo copy that doesn't match the real service it
   * actually links to. */
  href: string;
};

export type HomeStackCard = {
  tags: string[];
  title: string;
  tech: string[];
  result: string;
};

export type HomeProcessStep = {
  step: number;
  title: string;
  description: string;
};

export type HomeIndustryCard = {
  name: string;
  description: string;
  href: string;
};

export type HomeCaseStudy = {
  number: string;
  title: string;
  tag: string;
  stat: string;
  statLabel: string;
  summary: string;
  problem: string;
  approach: string;
  outcome: string;
  href: string;
};

export type HomeTestimonial = {
  quote: string;
  name: string;
  title: string;
};

export type HomeArticle = {
  category: string;
  title: string;
  description: string;
  href: string;
};
