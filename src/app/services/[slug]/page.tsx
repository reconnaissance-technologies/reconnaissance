import Link from "next/link";
import { notFound } from "next/navigation";
import { Badge } from "@/components/ui/Badge";
import { Button } from "@/components/ui/Button";
import { Card } from "@/components/ui/Card";
import { ChecklistItem } from "@/components/ui/ChecklistItem";
import { Accordion } from "@/components/ui/Accordion";
import { ProcessSteps, StepCard } from "@/components/ui/StepCard";
import {
  SERVICE_CTA,
  SERVICE_DELIVERABLES,
  SERVICE_EXAMPLES,
  SERVICE_EXPERTISE,
  SERVICE_FAQ,
  SERVICE_PROCESS,
  SERVICE_STACK_HEADING,
  SERVICE_STACK_TOOLS,
  SERVICE_STAT,
  SERVICE_TESTIMONIALS,
  SERVICE_TESTIMONIALS_HEADING,
  getService,
  services,
} from "@/lib/services/seed-services";

/**
 * Service detail template — Hero → Stat → Expertise → Deliverables →
 * Process → Examples → Stack → Testimonials → FAQ → CTA, matching the live
 * site's structure (design-system.md's Service template notes).
 *
 * Only the hero is per-service data (`service.hero`, from
 * seed-services.ts); every other section below reads from the shared
 * `SERVICE_*` constants because that's how the live site actually built
 * these 6 pages — see seed-services.ts's module doc comment for the full
 * explanation and the flagged content-quality issues (shifted FAQ
 * answers, the AI-Tools-&-Agents naming inconsistency).
 */
export function generateStaticParams() {
  return services.map((service) => ({ slug: service.slug }));
}

export default async function ServicePage({ params }: { params: Promise<{ slug: string }> }) {
  const { slug } = await params;
  const service = getService(slug);
  if (!service) notFound();

  const { hero } = service;

  return (
    <main className="flex flex-col">
      {/* Hero */}
      <section className="bg-gradient-to-b from-brand-navy/10 to-white">
        <div className="mx-auto flex max-w-[1280px] flex-col gap-4 px-6 pb-16 pt-20">
          <Link href="/services/" className="flex items-center gap-2 font-sans text-sm font-medium text-ink/60 hover:text-ink">
            <span aria-hidden="true">✦</span> {hero.eyebrow}
          </Link>
          <h1 className="max-w-[900px] font-sans text-[42px] font-medium leading-[46px] tracking-[-1px] text-ink md:text-[74px] md:leading-[81.4px] md:tracking-[-3px]">
            {hero.title}
          </h1>
          <p className="max-w-[640px] font-sans text-lg text-ink/70">{hero.subhead}</p>
          <div className="mt-2 flex flex-wrap gap-4">
            <Button as="a" href="/book-a-discovery-call/" variant="primary">
              Book a discovery call
            </Button>
            <Button as="a" href={`/services/${service.slug}/#examples`} variant="secondary">
              See example workflow
            </Button>
          </div>
        </div>
      </section>

      {/* Stat callout */}
      <section className="mx-auto w-full max-w-[1280px] px-6">
        <Card variant="stat-plain" className="flex max-w-[420px] flex-col gap-2 -translate-y-10">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {SERVICE_STAT.eyebrow}
          </span>
          <div className="flex items-baseline gap-3">
            <span className="font-sans text-[46px] font-medium leading-none text-ink">{SERVICE_STAT.number}</span>
            <p className="font-sans text-base font-medium text-ink">
              {SERVICE_STAT.label.split("\n").map((line) => (
                <span key={line} className="block">
                  {line}
                </span>
              ))}
            </p>
          </div>
          <p className="font-sans text-sm text-ink/60">{SERVICE_STAT.footnote}</p>
        </Card>
      </section>

      {/* Expertise / "The problem with messy internal tools" */}
      <section id="expertise" className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16 lg:flex-row lg:gap-16">
        <div className="flex flex-col gap-4 lg:w-1/2">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {SERVICE_EXPERTISE.eyebrow}
          </span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {SERVICE_EXPERTISE.heading.split("\n").map((line) => (
              <span key={line} className="block">
                {line}
              </span>
            ))}
          </h3>
          {SERVICE_EXPERTISE.paragraphs.map((paragraph) => (
            <p key={paragraph.slice(0, 24)} className="font-sans text-base text-ink/70">
              {paragraph}
            </p>
          ))}
        </div>
        <div className="lg:w-1/2">
          <Card variant="glass" className="flex flex-col gap-5">
            <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
              {SERVICE_EXPERTISE.standardHeading}
            </span>
            <ul className="flex flex-col gap-4 border-t border-border-subtle pt-4">
              {SERVICE_EXPERTISE.standard.map((point) => (
                <ChecklistItem key={point.label}>{point.label}</ChecklistItem>
              ))}
            </ul>
          </Card>
        </div>
      </section>

      {/* Deliverables / "What's included" */}
      <section id="deliverables" className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {SERVICE_DELIVERABLES.eyebrow}
          </span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {SERVICE_DELIVERABLES.heading}
          </h3>
        </div>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          {SERVICE_DELIVERABLES.phases.map((phase) => (
            <div key={phase.number} className="flex flex-col gap-3 rounded-[20px] border border-border-subtle p-[30px]">
              <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">{phase.number}</span>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{phase.title}</h4>
              <p className="font-sans text-sm leading-[19.6px] text-ink/60">{phase.description}</p>
              <ul className="mt-auto flex flex-col gap-2 pt-2">
                {phase.items.map((item) => (
                  <ChecklistItem key={item}>{item}</ChecklistItem>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </section>

      {/* Process / "How We Work" */}
      <section id="process" className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
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

        <div className="flex flex-col gap-4 pt-6">
          <h4 className="font-sans text-sm font-medium uppercase tracking-[1px] text-ink/60">{SERVICE_STACK_HEADING}</h4>
          <div className="flex flex-wrap gap-2">
            {SERVICE_STACK_TOOLS.map((tool) => (
              <Badge key={tool}>{tool}</Badge>
            ))}
          </div>
        </div>
      </section>

      {/* Examples / "See what's possible" */}
      <section id="examples" className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 rounded-[20px] bg-gradient-to-b from-brand-navy/10 to-white px-6 py-16">
        <div className="flex flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {SERVICE_EXAMPLES.eyebrow}
          </span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {SERVICE_EXAMPLES.heading}
          </h3>
          <p className="font-sans text-base text-ink/70">{SERVICE_EXAMPLES.subheading}</p>
        </div>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-3">
          {SERVICE_EXAMPLES.items.map((item) => (
            <Card key={item.title} variant="glass" className="flex flex-col gap-4">
              <div className="flex flex-wrap gap-2">
                {item.tags.map((tag) => (
                  <Badge key={tag}>{tag}</Badge>
                ))}
              </div>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{item.title}</h4>
              <div className="flex flex-col gap-3 border-t border-border-subtle pt-3 text-sm">
                <div>
                  <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">Inputs</span>
                  <p className="mt-1 font-sans text-ink/70">{item.inputs}</p>
                </div>
                <div>
                  <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">Auto</span>
                  <p className="mt-1 font-sans text-ink/70">{item.automationSteps.join(" → ")}</p>
                </div>
                <div>
                  <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">Result</span>
                  <p className="mt-1 font-sans font-medium text-ink">{item.result}</p>
                </div>
              </div>
            </Card>
          ))}
        </div>
      </section>

      {/* Testimonials */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
          {SERVICE_TESTIMONIALS_HEADING}
        </h3>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2">
          {SERVICE_TESTIMONIALS.map((testimonial) => (
            <div key={testimonial.name} className="flex flex-col gap-4 rounded-[20px] border border-border-subtle p-[30px]">
              <p className="font-sans text-base text-ink/80">“{testimonial.quote}”</p>
              <div>
                <p className="font-sans text-sm font-medium text-ink">{testimonial.name}</p>
                <p className="font-sans text-sm text-ink/60">{testimonial.title}</p>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* FAQ */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex max-w-[640px] flex-col gap-3">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">{SERVICE_FAQ.eyebrow}</span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {SERVICE_FAQ.heading}
          </h3>
          <p className="font-sans text-base text-ink/70">{SERVICE_FAQ.subheading}</p>
        </div>
        <Accordion
          items={SERVICE_FAQ.items.map((item, i) => ({
            id: `${service.slug}-faq-${i}`,
            question: item.question,
            answer: item.answer,
          }))}
        />
      </section>

      {/* CTA */}
      <section className="bg-dark-slate">
        <div className="mx-auto flex max-w-[1280px] flex-col items-start gap-4 px-6 py-16">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-brand-cyan">
            {SERVICE_CTA.eyebrow}
          </span>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-white md:text-[46px] md:leading-[46px]">
            {SERVICE_CTA.heading}
          </h3>
          <p className="max-w-[560px] font-sans text-base text-warm-white/80">{SERVICE_CTA.subhead}</p>
          <Button as="a" href="/book-a-discovery-call/" variant="primary" className="mt-2">
            Book a discovery call
          </Button>
        </div>
      </section>
    </main>
  );
}
