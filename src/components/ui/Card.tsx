import { ReactNode } from "react";

type CardVariant = "glass" | "stat" | "stat-plain";

const variants: Record<CardVariant, string> = {
  // Use Case card — design-system.md §3 "Card (glassmorphism)"
  glass: "border border-border-subtle bg-white/80 [backdrop-filter:saturate(1.8)_blur(40px)] rounded-[20px] p-[30px]",
  // Stat / Glassmorphism Card variant — design-system.md §10.1.
  // Same blur recipe as `glass`, but the asymmetric "torn corner" radius
  // (see §9) and roomier padding for a big stat number + label.
  stat: "border border-border-subtle bg-white/80 [backdrop-filter:saturate(1.8)_blur(40px)] rounded-card-torn p-[60px]",
  // Plain stat card — seen on Industry pages' "Proven Impact" section: a
  // solid, non-blurred light-grey card (not the frosted-glass treatment
  // above). Reuses the same warm-white surface color already established
  // for dark-on-light contrast elsewhere rather than introducing a new
  // token.
  "stat-plain": "border border-border-subtle bg-warm-white rounded-[20px] p-[30px]",
};

/**
 * Card — design-system.md §3 and §10.1.
 *
 * - `glass` (default): Use Case card — frosted glass, 20px radius, 30px
 *   padding. `backdrop-filter` needs something behind the card to actually
 *   blur — it's inert over a flat white page background.
 * - `stat`: Glassmorphism stat card — same frosted-glass recipe, asymmetric
 *   20/20/20/60 "torn corner" radius (design-system.md §9), 60px padding.
 * - `stat-plain`: Solid, non-blurred stat card (Industry pages' "Proven
 *   Impact" stat cards are plain light-grey, not glassmorphism) — 20px
 *   radius, 30px padding.
 */
export function Card({
  variant = "glass",
  className = "",
  children,
}: {
  variant?: CardVariant;
  className?: string;
  children: ReactNode;
}) {
  return <div className={`${variants[variant]} ${className}`}>{children}</div>;
}
