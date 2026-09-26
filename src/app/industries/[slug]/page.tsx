import Link from "next/link";
import { notFound } from "next/navigation";
import { Badge } from "@/components/ui/Badge";
import { Button } from "@/components/ui/Button";
import { Card } from "@/components/ui/Card";
import { ChecklistItem } from "@/components/ui/ChecklistItem";
import { QuoteBlock } from "@/components/ui/QuoteBlock";
import { getIndustry, industries } from "@/lib/industries/seed-industries";
import type { Industry } from "@/lib/industries/types";

/**
 * Industry page template — design-system.md notes the live site's
 * structure is "confirmed structurally identical across all 7 industry
 * pages": Hero → Challenge → Solutions → Use Cases → Impact → CTA.
 *
 * Content is data-driven from src/lib/industries/seed-industries.ts so
 * this template renders identically for the one industry with real,
 * fully-extracted content (`status: "full"`, currently just Logistics)
 * and falls back to a short honest placeholder for the rest
 * (`status: "stub"`) rather than inventing copy for pages that haven't
 * been extracted yet.
 */
export function generateStaticParams() {
  return industries.map((industry) => ({ slug: industry.slug }));
}

export default async function IndustryPage({ params }: { params: Promise<{ slug: string }> }) {
  const { slug } = await params;
  const industry = getIndustry(slug);
  if (!industry) notFound();

  return industry.status === "full" ? <FullIndustryPage industry={industry} /> : <StubIndustryPage industry={industry} />;
}

function Eyebrow({ children, className = "" }: { children: React.ReactNode; className?: string }) {
  return (
    <span className={`font-label text-xs font-normal uppercase tracking-[1px] text-ink/60 ${className}`}>
      {children}
    </span>
  );
}

function FullIndustryPage({ industry }: { industry: Extract<Industry, { status: "full" }> }) {
  const { hero, challenge, solutions, useCases, impact, cta } = industry;

  return (
    <main className="flex flex-col">
      {/* Hero — navy-tinted wash replacing the live site's light-purple
          gradient, consistent with the rest of the rebrand (see
          ServiceCard.tsx's identical substitution). */}
      <section className="bg-gradient-to-b from-brand-navy/10 to-white">
        <div className="mx-auto flex max-w-[1280px] flex-col gap-4 px-6 pb-16 pt-20">
          <Eyebrow>{hero.eyebrow}</Eyebrow>
          <h1 className="max-w-[900px] font-sans text-[42px] font-medium leading-[46px] tracking-[-1px] text-ink md:text-[74px] md:leading-[81.4px] md:tracking-[-3px]">
            {hero.title}
          </h1>
          <p className="max-w-[640px] font-sans text-lg text-ink/70">{hero.subhead}</p>
        </div>
      </section>

      {/* Challenge */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16 lg:flex-row lg:gap-16">
        <div className="flex flex-col gap-4 lg:w-1/2">
          <Eyebrow>{challenge.eyebrow}</Eyebrow>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {challenge.heading}
          </h3>
          {challenge.paragraphs.map((paragraph) => (
            <p key={paragraph.slice(0, 24)} className="font-sans text-base text-ink/70">
              {paragraph}
            </p>
          ))}
        </div>
        <ul className="flex flex-col gap-3 lg:w-1/2 lg:justify-center">
          {challenge.points.map((point) => (
            <ChecklistItem key={point}>{point}</ChecklistItem>
          ))}
        </ul>
      </section>

      {/* Solutions / "Our Deliverables" */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex flex-col gap-3">
          <Eyebrow>{solutions.eyebrow}</Eyebrow>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {solutions.heading}
          </h3>
        </div>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-3">
          {solutions.items.map((item) => (
            <div key={item.title} className="flex flex-col gap-4 rounded-[20px] border border-border-subtle p-[30px]">
              <Badge>{item.tag}</Badge>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{item.title}</h4>
              <p className="font-sans text-sm leading-[19.6px] text-ink/60">{item.description}</p>
              <ul className="mt-auto flex flex-col gap-2 pt-2">
                {item.bullets.map((bullet) => (
                  <ChecklistItem key={bullet}>{bullet}</ChecklistItem>
                ))}
              </ul>
            </div>
          ))}
        </div>
      </section>

      {/* Use Cases / "In Practice" */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 rounded-[20px] bg-gradient-to-b from-brand-navy/10 to-white px-6 py-16">
        <div className="flex flex-col gap-3">
          <Eyebrow>{useCases.eyebrow}</Eyebrow>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {useCases.heading}
          </h3>
          <p className="font-sans text-base text-ink/70">{useCases.subheading}</p>
        </div>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-3">
          {useCases.items.map((item) => (
            <Card key={item.title} variant="glass" className="flex flex-col gap-4">
              <div className="flex flex-wrap gap-2">
                {item.tags.map((tag) => (
                  <Badge key={tag}>{tag}</Badge>
                ))}
              </div>
              <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{item.title}</h4>

              <div className="flex flex-col gap-3 text-sm">
                <div>
                  <Eyebrow>Inputs</Eyebrow>
                  <p className="mt-1 font-sans text-ink/70">{item.inputs}</p>
                </div>
                <div>
                  <Eyebrow>Auto</Eyebrow>
                  <p className="mt-1 font-sans text-ink/70">{item.automationSteps.join(" → ")}</p>
                </div>
                <div>
                  <Eyebrow>Result</Eyebrow>
                  <p className="mt-1 font-sans font-medium text-ink">{item.result}</p>
                </div>
              </div>
            </Card>
          ))}
        </div>
      </section>

      {/* Impact / "Proven Impact" */}
      <section className="mx-auto flex w-full max-w-[1280px] flex-col gap-8 px-6 py-16">
        <div className="flex flex-col gap-3">
          <Eyebrow>{impact.eyebrow}</Eyebrow>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-ink md:text-[46px] md:leading-[46px]">
            {impact.heading}
          </h3>
          <p className="font-sans text-base text-ink/70">{impact.subheading}</p>
        </div>

        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2">
          {impact.stats.map((stat) => (
            <Card key={stat.label} variant="stat-plain" className="flex flex-col gap-2">
              <span className="font-sans text-[46px] font-medium leading-none text-ink">{stat.number}</span>
              <p className="font-sans text-base font-medium text-ink">{stat.label}</p>
              <p className="font-sans text-sm text-ink/60">{stat.description}</p>
            </Card>
          ))}
          <QuoteBlock quote={`“${impact.quote.text}”`} attribution={impact.quote.source} className="sm:col-span-2" />
        </div>

        <ul className="grid grid-cols-1 gap-x-8 gap-y-3 sm:grid-cols-2">
          {impact.points.map((point) => (
            <ChecklistItem key={point.title}>
              <strong className="font-medium text-ink">{point.title}</strong>{" "}
              <span className="text-ink/70">{point.description}</span>
            </ChecklistItem>
          ))}
        </ul>
      </section>

      {/* CTA */}
      <section className="bg-dark-slate">
        <div className="mx-auto flex max-w-[1280px] flex-col items-start gap-4 px-6 py-16">
          <Eyebrow className="text-brand-cyan">{cta.eyebrow}</Eyebrow>
          <h3 className="font-sans text-[32px] font-medium leading-[38px] text-white md:text-[46px] md:leading-[46px]">
            {cta.heading}
          </h3>
          <p className="max-w-[560px] font-sans text-base text-warm-white/80">{cta.subhead}</p>
          <Button as="a" href="/book-a-discovery-call/" variant="primary" className="mt-2">
            Book a discovery call
          </Button>
        </div>
      </section>
    </main>
  );
}

function StubIndustryPage({ industry }: { industry: Extract<Industry, { status: "stub" }> }) {
  return (
    <main className="mx-auto flex max-w-[1280px] flex-col gap-6 px-6 py-24">
      <Eyebrow>{industry.hero.eyebrow}</Eyebrow>
      <h1 className="max-w-[800px] font-sans text-[42px] font-medium leading-[46px] tracking-[-1px] text-ink md:text-[56px] md:leading-[60px]">
        {industry.hero.title}
      </h1>
      <p className="max-w-[560px] font-sans text-lg text-ink/70">{industry.hero.subhead}</p>

      <div className="mt-4 flex flex-col gap-4 rounded-[20px] border border-border-subtle bg-warm-white p-[30px] sm:max-w-[560px]">
        <p className="font-sans text-sm text-ink/60">
          Full page content for {industry.name} — challenges, deliverables, use cases, and results — is being
          finalized. See{" "}
          <Link href="/industries/logistics/" className="font-medium text-brand-navy underline underline-offset-2">
            Logistics
          </Link>{" "}
          for the complete template.
        </p>
      </div>

      <div className="mt-4 flex flex-wrap gap-4">
        <Button as="a" href="/book-a-discovery-call/" variant="primary">
          Book a discovery call
        </Button>
        <Button as="a" href="/industries/" variant="secondary">
          All industries
        </Button>
      </div>
    </main>
  );
}
