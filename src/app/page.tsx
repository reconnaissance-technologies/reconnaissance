import Link from "next/link";
import { Badge } from "@/components/ui/Badge";
import { Button } from "@/components/ui/Button";
import { Card } from "@/components/ui/Card";
import { ProcessSteps, StepCard } from "@/components/ui/StepCard";
import { ServiceCard } from "@/components/ui/ServiceCard";
import {
  HOME_ARTICLE_ITEMS,
  HOME_ARTICLES,
  HOME_CASE_STUDIES,
  HOME_CASE_STUDY_ITEMS,
  HOME_CTA,
  HOME_EXPERTISE,
  HOME_EXPERTISE_CARDS,
  HOME_HERO,
  HOME_INDUSTRIES,
  HOME_INDUSTRY_CARDS,
  HOME_PROCESS,
  HOME_STACK,
  HOME_STACK_CARDS,
  HOME_TESTIMONIALS,
  HOME_TESTIMONIALS_HEADING,
  HOME_TRUSTED_BY,
} from "@/lib/home/seed-home";

const expertiseIcon = (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-full w-full">
    <path d="M12 2 3 7l9 5 9-5-9-5Z M3 12l9 5 9-5 M3 17l9 5 9-5" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

const industryIcon = (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-full w-full">
    <path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M9 11h.01M9 15h.01M15 11h.01M15 15h.01" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

/**
 * Home ("/") — replaces the temporary "Component Library — Phase 1 Proof"
 * style-guide page. Content pulled verbatim from the live reconnaissance.test
 * homepage on 2026-09-27 — see seed-home.ts's module doc comment for the
 * full extraction notes and two flagged content-quality issues, the more
 * significant of which (the "Our Core Expertise" cards below linking to
 * services their own title/description don't describe) is rendered here
 * exactly as found rather than silently corrected.
 *
 * Section order matches the live page: Hero → Trusted-by → Expertise →
 * Stack → Process → Industries → Case studies → Testimonials → CTA →
 * Articles. Card/section visual treatment reuses the same components and
 * gradient/border patterns already established on the Industries and
 * Services templates for consistency, since the live site's home page and
 * those templates share the same theme rather than a bespoke home design.
 */
export default function Home() {
  return (
    <main className="flex flex-col">
      {/* Hero */}
      <section className="bg-gradient-to-b from-brand-navy/10 to-white">
        <div className="mx-auto flex max-w-[1280px] flex-col gap-4 px-6 pb-16 pt-20">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {HOME_HERO.eyebrow}
          </span>
          <h1 className="max-w-[900px] font-sans text-[42px] font-medium leading-[46px] tracking-[-1px] text-ink md:text-[74px] md:leading-[81.4px] md:tracking-[-3px]">
            {HOME_HERO.title}
          </h1>
          <p className="max-w-[640px] font-sans text-lg text-ink/70">{HOME_HERO.subhead}</p>
          <div className="mt-2 flex flex-wrap gap-4">
            <Button as="a" href={HOME_HERO.primaryCta.href} variant="primary">
              {HOME_HERO.primaryCta.label}
            </Button>
            <Button as="a" href={HOME_HERO.secondaryCta.href} variant="secondary">
              {HOME_HERO.secondaryCta.label}
            </Button>
          </div>
        </div>
      </section>

      {/* Trusted-by strip */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col items-center gap-6 px-6 py-12">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
          {HOME_TRUSTED_BY.heading}
        </h2>
        <div className="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
          {HOME_TRUSTED_BY.names.map((name) => (
            <span key={name} className="font-sans text-lg font-medium text-ink/40">
              {name}
            </span>
          ))}
        </div>
      </section>

      {/* Our Core Expertise */}
      <section id="examples" className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {HOME_EXPERTISE.eyebrow}
          </span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {HOME_EXPERTISE.heading}
          </h2>
          <p className="font-sans text-base text-ink/70">{HOME_EXPERTISE.subhead}</p>
        </div>
        {/* Verbatim from the live page — each card's title/description does
            not describe the service its href actually points to. See
            HOME_EXPERTISE_CARDS in seed-home.ts for the full flag; kept
            as-is rather than relabeling to match the link targets. */}
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {HOME_EXPERTISE_CARDS.map((card) => (
            <ServiceCard
              key={card.title}
              icon={expertiseIcon}
              title={card.title}
              description={card.description}
              href={card.href}
            />
          ))}
        </div>
      </section>

      {/* See How We Build */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {HOME_STACK.eyebrow}
          </span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {HOME_STACK.heading}
          </h2>
          <p className="font-sans text-base text-ink/70">{HOME_STACK.subhead}</p>
        </div>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {HOME_STACK_CARDS.map((card) => (
            <Card key={card.title} variant="glass" className="flex flex-col gap-4">
              <div className="flex flex-wrap gap-2">
                {card.tags.map((tag) => (
                  <Badge key={tag}>{tag}</Badge>
                ))}
              </div>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{card.title}</h4>
              <p className="font-sans text-sm leading-[19.6px] text-ink/60">{card.tech.join(", ")}</p>
              <p className="mt-auto border-t border-border-subtle pt-3 font-sans text-sm font-medium text-ink">
                {card.result}
              </p>
            </Card>
          ))}
        </div>
      </section>

      {/* How we work */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {HOME_PROCESS.eyebrow}
          </span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {HOME_PROCESS.heading}
          </h2>
          <p className="font-sans text-base text-ink/70">{HOME_PROCESS.subheading}</p>
        </div>
        <ProcessSteps>
          {HOME_PROCESS.steps.map((step) => (
            <StepCard key={step.step} step={step.step} title={step.title}>
              {step.description}
            </StepCard>
          ))}
        </ProcessSteps>
        <p className="font-sans text-sm text-ink/60">
          {HOME_PROCESS.phoneCta}{" "}
          <a href={`tel:${HOME_PROCESS.phone.replace(/\s+/g, "")}`} className="font-medium text-ink hover:text-brand-navy">
            {HOME_PROCESS.phone}
          </a>
        </p>
      </section>

      {/* Engineered For Your Industry */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 rounded-[20px] bg-gradient-to-b from-brand-navy/10 to-white px-6 py-16 sm:px-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {HOME_INDUSTRIES.eyebrow}
          </span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {HOME_INDUSTRIES.heading}
          </h2>
          <p className="font-sans text-base text-ink/70">{HOME_INDUSTRIES.subhead}</p>
        </div>
        {/* Verbatim — only 5 of the site's 7 real industries appear in this
            homepage section; see seed-home.ts's module doc comment (looks
            like a deliberate curated subset, not a bug). */}
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {HOME_INDUSTRY_CARDS.map((card) => (
            <ServiceCard
              key={card.name}
              icon={industryIcon}
              title={card.name}
              description={card.description}
              href={card.href}
            />
          ))}
        </div>
        <Link
          href="/industries/"
          className="self-start inline-flex items-center gap-2 rounded-[60px] border border-border-subtle bg-white px-[25px] py-[17px] font-sans text-sm font-medium uppercase tracking-[1px] text-ink transition-colors hover:border-brand-navy hover:text-brand-navy"
        >
          View all industries
        </Link>
      </section>

      {/* Proven results */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex flex-wrap items-end justify-between gap-4">
          <div className="flex max-w-[640px] flex-col gap-3">
            <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
              {HOME_CASE_STUDIES.eyebrow}
            </span>
            <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
              {HOME_CASE_STUDIES.heading}
            </h2>
            <p className="font-sans text-base text-ink/70">{HOME_CASE_STUDIES.subhead}</p>
          </div>
          <Link
            href={HOME_CASE_STUDIES.viewAllHref}
            className="font-sans text-sm font-medium text-ink underline underline-offset-4 hover:text-brand-navy"
          >
            View all
          </Link>
        </div>
        <div className="grid grid-cols-1 gap-6 lg:grid-cols-3">
          {HOME_CASE_STUDY_ITEMS.map((item) => (
            <Link
              key={item.number}
              href={item.href}
              className="group flex flex-col gap-4 rounded-[20px] border border-border-subtle p-[30px] transition-colors hover:border-brand-navy/30"
            >
              <div className="flex items-center justify-between">
                <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
                  {item.number}
                </span>
                <Badge>{item.tag}</Badge>
              </div>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{item.title}</h4>
              <div className="flex items-baseline gap-2">
                <span className="font-sans text-[32px] font-medium leading-none text-ink">{item.stat}</span>
                <span className="font-sans text-sm text-ink/60">{item.statLabel}</span>
              </div>
              <p className="font-sans text-sm text-ink/70">{item.summary}</p>
              <div className="mt-auto flex flex-col gap-2 border-t border-border-subtle pt-3 text-sm">
                <p className="font-sans text-ink/60">
                  <span className="font-medium text-ink">Problem: </span>
                  {item.problem}
                </p>
                <p className="font-sans text-ink/60">
                  <span className="font-medium text-ink">Approach: </span>
                  {item.approach}
                </p>
                <p className="font-sans text-ink/60">
                  <span className="font-medium text-ink">Outcome: </span>
                  {item.outcome}
                </p>
              </div>
            </Link>
          ))}
        </div>
      </section>

      {/* What clients say */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
          {HOME_TESTIMONIALS_HEADING}
        </h2>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {HOME_TESTIMONIALS.map((testimonial) => (
            <div key={testimonial.name} className="flex flex-col gap-4 rounded-[20px] border border-border-subtle p-[30px]">
              <p className="font-sans text-base text-ink/80">&ldquo;{testimonial.quote}&rdquo;</p>
              <div>
                <p className="font-sans text-sm font-medium text-ink">{testimonial.name}</p>
                <p className="font-sans text-sm text-ink/60">{testimonial.title}</p>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* CTA */}
      <section className="bg-dark-slate">
        <div className="mx-auto flex max-w-[1280px] flex-col items-start gap-4 px-6 py-16">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-brand-cyan">
            {HOME_CTA.eyebrow}
          </span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-white md:text-[46px] md:leading-[46px]">
            {HOME_CTA.heading}
          </h2>
          <p className="max-w-[560px] font-sans text-base text-warm-white/80">{HOME_CTA.subhead}</p>
          <Button as="a" href="/book-a-discovery-call/" variant="primary" className="mt-2">
            Book a discovery call
          </Button>
        </div>
      </section>

      {/* Articles & insights */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex flex-wrap items-end justify-between gap-4">
          <div className="flex max-w-[640px] flex-col gap-3">
            <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
              {HOME_ARTICLES.eyebrow}
            </span>
            <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
              {HOME_ARTICLES.heading}
            </h2>
          </div>
          {/* Verbatim label — the live link text really does read "All
              articels" (typo). See seed-home.ts. */}
          <Link
            href={HOME_ARTICLES.viewAllHref}
            className="font-sans text-sm font-medium text-ink underline underline-offset-4 hover:text-brand-navy"
          >
            {HOME_ARTICLES.viewAllLabel}
          </Link>
        </div>
        {/* The live carousel loops these 3 real posts to fill a longer
            strip; only the distinct set is rendered here. */}
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-3">
          {HOME_ARTICLE_ITEMS.map((article) => (
            <Card key={article.title} variant="glass" className="flex flex-col gap-3">
              <Badge>{article.category}</Badge>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{article.title}</h4>
              <p className="font-sans text-sm leading-[19.6px] text-ink/60">{article.description}</p>
              <Link
                href={article.href}
                className="mt-auto flex items-center gap-2 pt-2 font-sans text-sm font-medium text-ink hover:text-brand-navy"
              >
                Read more
                <svg aria-hidden="true" viewBox="0 0 16 16" className="h-4 w-4">
                  <path
                    fill="currentColor"
                    d="M9.3 3.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4L11.6 9H3a1 1 0 1 1 0-2h8.6L9.3 4.7a1 1 0 0 1 0-1.4Z"
                  />
                </svg>
              </Link>
            </Card>
          ))}
        </div>
      </section>
    </main>
  );
}
