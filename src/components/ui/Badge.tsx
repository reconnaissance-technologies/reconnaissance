import { ReactNode } from "react";

/**
 * Badge / Tag Pill — design-system.md §3.
 *
 * White bg, 20px radius, 6px/15px padding, 12px/400 IBM Plex Sans,
 * uppercase via CSS transform (source text stays natural case — see
 * design-system.md §1 note on eyebrow labels).
 *
 * Text color uses brand-navy, replacing the live site's purple accent
 * (design-system.md §2 "Brand Colors (Final)").
 */
export function Badge({ children }: { children: ReactNode }) {
  return (
    <span className="inline-flex items-center rounded-[20px] bg-white px-[15px] py-[6px] shadow-[0_2px_2px_rgba(0,0,0,0.01)]">
      <span className="font-label text-xs font-normal uppercase tracking-[1px] text-brand-navy">
        {children}
      </span>
    </span>
  );
}
