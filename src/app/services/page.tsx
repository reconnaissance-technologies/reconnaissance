import Link from "next/link";
import { ChecklistItem } from "@/components/ui/ChecklistItem";
import { ProcessSteps, StepCard } from "@/components/ui/StepCard";
import { ServiceCard } from "@/components/ui/ServiceCard";
import { SERVICE_PROCESS, services } from "@/lib/services/seed-services";

const serviceIcon = (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-full w-full">
    <path d="M12 2l2.4 4.9L20 8l-4 3.9.9 5.5-4.9-2.6-4.9 2.6.9-5.5L4 8l5.6-1.1L12 2Z" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

/**
 * Services hub — /services/. Content pulled verbatim from the live
 * reconnaissance.test page on 2026-09-26. See seed-services.ts's module
 * doc comment for the "one shared template, hero is the only thing that
 * changes per service" finding and the flagged content-quality issues
 * (duplicate "Cross-system reporting" line item below, and the
 * AI-Tools-&-Agents/AI-Agents-&-Internal-Tools naming inconsistency
 * reflected in that card's title vs. its target page's own H1).
 */
export default function ServicesPage() {
  return (
    <main className="flex flex-col">
      {/* "What we help automate" — 3-column deliverables overview */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 pb-16 pt-20">
        <div className="flex flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            Our Deliverables
          </span>
          <h1 className="font-sans text-[42px] font-medium leading-[46px] tracking-[-1px] text-ink md:text-[56px] md:leading-[60px]">
            What we help automate
          </h1>
        </div>

        <div className="grid grid-cols-1 gap-8 sm:grid-cols-3">
          <div className="flex flex-col gap-4">
            <h4 className="font-sans text-xl font-medium text-ink">Data & Reporting</h4>
            <ul className="flex flex-col gap-2">
              <ChecklistItem>Internal workflows</ChecklistItem>
              <ChecklistItem>Approval processes</ChecklistItem>
              <ChecklistItem>Support routing</ChecklistItem>
              <ChecklistItem>Manual data processing</ChecklistItem>
            </ul>
          </div>
          <div className="flex flex-col gap-4">
            <h4 className="font-sans text-xl font-medium text-ink">Operations</h4>
            <ul className="flex flex-col gap-2">
              <ChecklistItem>Data pipelines</ChecklistItem>
              <ChecklistItem>Automated reporting</ChecklistItem>
              <ChecklistItem>Real-time dashboards</ChecklistItem>
              {/* Verbatim — the live page lists "Cross-system reporting"
                  under both this column and AI Enablement below. Almost
                  certainly meant to be two different line items; kept
                  as-is rather than inventing a replacement. */}
              <ChecklistItem>Cross-system reporting</ChecklistItem>
            </ul>
          </div>
          <div className="flex flex-col gap-4">
            <h4 className="font-sans text-xl font-medium text-ink">AI Enablement</h4>
            <ul className="flex flex-col gap-2">
              <ChecklistItem>Cross-system reporting</ChecklistItem>
              <ChecklistItem>Document processing</ChecklistItem>
              <ChecklistItem>CRM / ERP integrations</ChecklistItem>
              <ChecklistItem>API-based automation</ChecklistItem>
            </ul>
          </div>
        </div>
      </section>

      {/* "Our core automation services" — the 6 service cards */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">What We Do</span>
          <h2 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            Our core automation services
          </h2>
          <p className="font-sans text-base text-ink/70">
            From workflow automation to system integration, we deliver outcomes that move your business forward.
          </p>
        </div>

        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {services.map((service) => (
            <ServiceCard
              key={service.slug}
              icon={serviceIcon}
              title={service.name}
              description={service.hero.subhead}
              href={`/services/${service.slug}/`}
            />
          ))}
        </div>
      </section>

      {/* "Built for real business industries" — cross-link to /industries/ */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col items-start gap-4 rounded-[20px] bg-gradient-to-b from-brand-navy/10 to-white px-6 py-16 sm:px-16">
        <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
          Built for real business industries
        </h3>
        <p className="max-w-[560px] font-sans text-base text-ink/70">
          Built around real industry workflows. Explore each industry.
        </p>
        <Link
          href="/industries/"
          className="mt-2 inline-flex items-center gap-2 rounded-[60px] border border-border-subtle bg-white px-[25px] py-[17px] font-sans text-sm font-medium uppercase tracking-[1px] text-ink transition-colors hover:border-brand-navy hover:text-brand-navy"
        >
          View industries
        </Link>
      </section>

      {/* "Typical projects" */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            Typical projects
          </h3>
          <p className="font-sans text-base text-ink/70">
            From workflow automation to system integration, we deliver outcomes that move your business forward.
          </p>
        </div>
        <ul className="grid grid-cols-1 gap-x-8 gap-y-3 sm:grid-cols-2">
          <ChecklistItem>Automating internal workflows</ChecklistItem>
          <ChecklistItem>Integrating CRM and accounting systems</ChecklistItem>
          <ChecklistItem>AI assistants for internal business teams</ChecklistItem>
          <ChecklistItem>Automated reporting and dashboards</ChecklistItem>
          <ChecklistItem>Document processing and data extraction</ChecklistItem>
          <ChecklistItem>Cross-system workflow automation</ChecklistItem>
        </ul>
      </section>

      {/* "How We Work" — identical process section reused on every
          individual service page too; see SERVICE_PROCESS's doc comment. */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {SERVICE_PROCESS.eyebrow}
          </span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {SERVICE_PROCESS.heading}
          </h3>
          <p className="font-sans text-base text-ink/70">{SERVICE_PROCESS.subheading}</p>
        </div>
        <ProcessSteps>
          {SERVICE_PROCESS.steps.map((step) => (
            <StepCard key={step.step} step={step.step} title={step.title}>
              {step.description}
            </StepCard>
          ))}
        </ProcessSteps>
      </section>
    </main>
  );
}
