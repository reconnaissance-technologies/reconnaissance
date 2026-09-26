import { ServiceCard } from "@/components/ui/ServiceCard";
import { industries } from "@/lib/industries/seed-industries";

const industryIcon = (
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-full w-full">
    <path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M9 11h.01M9 15h.01M15 11h.01M15 15h.01" strokeLinecap="round" strokeLinejoin="round" />
  </svg>
);

/**
 * Industries hub — links out to each `/industries/[slug]/` page. Real
 * names/slugs from the live site's Industries mega-menu column (see
 * seed-navigation.ts); one generic building icon for all seven since
 * per-industry icons haven't been extracted from the live site yet.
 */
export default function IndustriesPage() {
  return (
    <main className="mx-auto flex max-w-[1280px] flex-col gap-10 px-6 py-16">
      <header className="flex flex-col gap-3">
        <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">Industries</span>
        <h1 className="font-sans text-[46px] font-medium leading-[46px] text-ink">
          Built for how your industry actually runs
        </h1>
        <p className="max-w-[640px] font-sans text-base text-ink/70">
          Custom software, systems integration, and embedded engineering capacity — tailored to the workflows,
          compliance requirements, and edge cases each industry deals with.
        </p>
      </header>

      <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        {industries.map((industry) => (
          <ServiceCard
            key={industry.slug}
            icon={industryIcon}
            title={industry.name}
            description={industry.hero.subhead}
            href={`/industries/${industry.slug}/`}
          />
        ))}
      </div>
    </main>
  );
}
