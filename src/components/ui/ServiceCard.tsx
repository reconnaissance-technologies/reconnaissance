import { ReactNode } from "react";

/**
 * Service Card — design-system.md §10.1 (3-up grid, e.g. "AI Workflow
 * Automation", "Support Triage & Ticketing").
 *
 * - Container: 20px radius, `rgba(0,0,0,.1)` border, overflow hidden.
 * - Image area: top of card, a soft gradient wash behind a centered
 *   line-icon. The live site uses a light-purple wash here
 *   (`hero-gradient-a`); we use a navy-tinted one instead
 *   (`from-brand-navy/8 to-white`) to stay consistent with the navy/cyan
 *   rebrand rather than reintroducing the retired purple family — this is
 *   a judgment call extending that decision, easy to swap if you'd rather
 *   match the original wash exactly.
 * - Title: H4, 20px/500/28px. Description: 14px/400, black at 60% opacity.
 * - Footer: arrow-right link, black on white.
 *
 * Desktop grid cards land at roughly 413×459px — that comes from the 3-col
 * grid layout the consumer places these in, not a fixed size here.
 */
export function ServiceCard({
  icon,
  title,
  description,
  href,
}: {
  icon: ReactNode;
  title: ReactNode;
  description: ReactNode;
  href: string;
}) {
  return (
    <a
      href={href}
      className="group flex flex-col overflow-hidden rounded-[20px] border border-border-subtle bg-white transition-colors hover:border-brand-navy/30"
    >
      <div className="relative flex h-[200px] items-center justify-center bg-gradient-to-b from-brand-navy/8 to-white">
        <div aria-hidden="true" className="h-12 w-12 text-ink">
          {icon}
        </div>
      </div>

      <div className="flex flex-1 flex-col gap-2 p-[30px]">
        <h4 className="font-sans text-xl font-medium leading-[28px] text-ink">{title}</h4>
        <p className="font-sans text-sm leading-[19.6px] text-ink/60">{description}</p>

        <span className="mt-auto flex items-center gap-2 pt-4 font-sans text-sm font-medium text-ink">
          Learn more
          <svg
            aria-hidden="true"
            viewBox="0 0 16 16"
            className="h-4 w-4 transition-transform group-hover:translate-x-1"
          >
            <path
              fill="currentColor"
              d="M9.3 3.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4L11.6 9H3a1 1 0 1 1 0-2h8.6L9.3 4.7a1 1 0 0 1 0-1.4Z"
            />
          </svg>
        </span>
      </div>
    </a>
  );
}
