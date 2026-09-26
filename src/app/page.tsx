import { Button } from "@/components/ui/Button";
import { Badge } from "@/components/ui/Badge";
import { ChecklistItem } from "@/components/ui/ChecklistItem";
import { Card } from "@/components/ui/Card";
import { QuoteBlock } from "@/components/ui/QuoteBlock";
import { FormInput, FormTextarea } from "@/components/ui/FormInput";
import { Accordion } from "@/components/ui/Accordion";
import { ProcessSteps, StepCard } from "@/components/ui/StepCard";
import { ServiceCard } from "@/components/ui/ServiceCard";
import { TeamCard } from "@/components/ui/TeamCard";

const automationIcon = (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-full w-full">
    <path d="M12 2v4M12 18v4M4.9 4.9l2.8 2.8M16.3 16.3l2.8 2.8M2 12h4M18 12h4M4.9 19.1l2.8-2.8M16.3 7.7l2.8-2.8" strokeLinecap="round" />
    <circle cx="12" cy="12" r="4" />
  </svg>
);

/**
 * Temporary style-guide page — proves the Tailwind theme tokens
 * (design-system.md, brand palette from the logo) are wired up correctly
 * before real page templates are built. Safe to delete once real page
 * templates (Phase 1 step 3+) land.
 */
export default function Home() {
  return (
    <main className="mx-auto flex max-w-[1280px] flex-col gap-16 px-6 py-16">
      <header className="flex flex-col gap-2">
        <h1 className="font-sans text-[46px] font-medium leading-[46px] text-ink">
          Component Library — Phase 1 Proof
        </h1>
        <p className="max-w-[560px] font-sans text-base text-ink/70">
          Brand palette: navy <code>#1C4B96</code> + cyan <code>#01ADF5</code>{" "}
          (sampled from the logo — see design-system.md §2).
        </p>
      </header>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">Buttons</h2>
        <div className="flex flex-wrap items-center gap-4">
          <Button variant="primary">Book a discovery call</Button>
          <Button variant="secondary">See example workflow</Button>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">Badges</h2>
        <div className="flex flex-wrap items-center gap-3">
          <Badge>Custom Build</Badge>
          <Badge>Integration</Badge>
          <Badge>Extended Team</Badge>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">Checklist</h2>
        <ul className="flex flex-col gap-3">
          <ChecklistItem>Custom production &amp; quality platforms</ChecklistItem>
          <ChecklistItem>API integration across your stack</ChecklistItem>
          <ChecklistItem>Dedicated engineers who know your systems</ChecklistItem>
        </ul>
      </section>

      <section className="flex flex-col gap-4 rounded-[20px] bg-dark-slate p-[50px_30px]">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-brand-cyan">
          Brand cyan on dark
        </h2>
        <p className="font-sans text-2xl font-medium leading-[33.6px] text-warm-white">
          Cyan reads clearly against dark surfaces — this is where it belongs
          in the UI, never as small text on white.
        </p>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Glassmorphism Cards
        </h2>
        <div className="grid grid-cols-1 gap-6 rounded-[20px] bg-gradient-to-b from-brand-navy/10 to-white p-10 sm:grid-cols-2">
          <Card variant="glass">
            <Badge>Use Case</Badge>
            <p className="mt-4 font-sans text-base text-ink">
              Default 20px-radius glass card, 30px padding — the standard
              Use Case card treatment.
            </p>
          </Card>
          <Card variant="stat">
            <span className="font-sans text-[46px] font-medium leading-none text-ink">38%</span>
            <p className="mt-3 font-sans text-base text-ink">
              Average reduction in manual processing time
            </p>
            <p className="mt-2 font-sans text-sm text-ink/50">
              Mid-market SaaS · 6–8 week deployment
            </p>
          </Card>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Quote Block
        </h2>
        <QuoteBlock
          quote="They didn't just ship the integration — they understood our workflow better than we did."
          attribution="VP of Operations, mid-market logistics client"
        />
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Form Inputs
        </h2>
        <div className="grid max-w-[560px] gap-4">
          <FormInput id="name" label="Name" placeholder="Jane Doe" />
          <FormInput id="email" label="Email" type="email" placeholder="jane@company.com" />
          <FormTextarea id="message" label="Message" placeholder="Tell us about your project..." />
          <Button variant="primary" className="self-start">
            Send message
          </Button>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          FAQ Accordion
        </h2>
        <Accordion
          items={[
            {
              id: "q1",
              question: "How long does a typical engagement take?",
              answer: "Most engagements run 6–8 weeks from kickoff to first production deployment.",
            },
            {
              id: "q2",
              question: "Do you work with our existing tech stack?",
              answer: "Yes — we integrate with what you already run rather than asking you to replace it.",
            },
            {
              id: "q3",
              question: "What does the discovery call cover?",
              answer: "We'll map your current workflow, identify the highest-leverage automation targets, and scope a first milestone.",
            },
          ]}
        />
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Process Steps
        </h2>
        <ProcessSteps>
          <StepCard step={1} title="Discovery & Success Criteria">
            Map the current workflow and define what a win looks like.
          </StepCard>
          <StepCard step={2} title="Solution Design">
            Architect the integration against your existing stack.
          </StepCard>
          <StepCard step={3} title="Build & Iterate">
            Ship in weekly increments with your team in the loop.
          </StepCard>
          <StepCard step={4} title="Launch & Support">
            Go live with a support plan tuned to your workflow.
          </StepCard>
        </ProcessSteps>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Service Card
        </h2>
        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <ServiceCard
            icon={automationIcon}
            title="AI Workflow Automation"
            description="Automate repetitive operational work with agents that plug into the tools your team already uses."
            href="#"
          />
          <ServiceCard
            icon={automationIcon}
            title="Support Triage & Ticketing"
            description="Route, prioritize, and draft responses automatically, with a human in the loop where it matters."
            href="#"
          />
          <ServiceCard
            icon={automationIcon}
            title="Custom Integration Builds"
            description="Connect systems that were never meant to talk to each other, without duct tape."
            href="#"
          />
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Team Card
        </h2>
        <div className="grid grid-cols-2 gap-6 lg:grid-cols-4">
          <TeamCard
            photoSrc="/placeholder-avatar.svg"
            photoAlt="Placeholder portrait"
            name="Marcus Okafor"
            role="Founder & CEO"
            linkedInHref="#"
            xHref="#"
          />
          <TeamCard
            photoSrc="/placeholder-avatar.svg"
            photoAlt="Placeholder portrait"
            name="Amara Chen"
            role="Head of Engineering"
            linkedInHref="#"
          />
        </div>
      </section>
    </main>
  );
}
