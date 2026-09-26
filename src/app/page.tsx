import { Button } from "@/components/ui/Button";
import { Badge } from "@/components/ui/Badge";
import { ChecklistItem } from "@/components/ui/ChecklistItem";

/**
 * Temporary style-guide page — proves the Tailwind theme tokens
 * (design-system.md, brand palette from the logo) are wired up correctly
 * before real page templates are built. Safe to delete once the Industry
 * template (Phase 1 step 3) lands.
 */
export default function Home() {
  return (
    <main className="mx-auto flex max-w-[1280px] flex-col gap-12 px-6 py-16">
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
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Buttons
        </h2>
        <div className="flex flex-wrap items-center gap-4">
          <Button variant="primary">Book a discovery call</Button>
          <Button variant="secondary">See example workflow</Button>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Badges
        </h2>
        <div className="flex flex-wrap items-center gap-3">
          <Badge>Custom Build</Badge>
          <Badge>Integration</Badge>
          <Badge>Extended Team</Badge>
        </div>
      </section>

      <section className="flex flex-col gap-4">
        <h2 className="font-label text-xs font-normal uppercase tracking-[1px] text-ink">
          Checklist
        </h2>
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
    </main>
  );
}
