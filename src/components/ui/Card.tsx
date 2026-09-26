import { ReactNode } from "react";

type CardVariant = "glass" | "stat";

const variants: Record<CardVariant, string> = {
  // Use Case card — design-system.md §3 "Card (glassmorphism)"
  glass: "rounded-[20px] p-[30px]",
  // Stat / Glassmorphism Card variant — design-system.md §10.1.
  // Same blur recipe as `glass`, but the asymmetric "torn corner" radius
  // (see §9) and roomier padding for a big stat number + label.
  stat: "rounded-card-torn p-[60px]",
};

/**
 * Glassmorphism Card — design-system.md §3 and §10.1.
 *
 * Both variants share the same frosted-glass background recipe
 * (`rgba(255,255,255,.8)` + `backdrop-filter: saturate(1.8) blur(40px)`)
 * and hairline border; only the border-radius and padding differ:
 *
 * - `glass` (default): Use Case card — 20px radius, 30px padding.
 * - `stat`: Stat card — asymmetric 20/20/20/60 "torn corner" radius
 *   (design-system.md §9), 60px padding. Use for a large stat number +
 *   label + source line.
 *
 * `backdrop-filter` needs something behind the card to actually blur —
 * it's inert over a flat white page background.
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
  return (
    <div
      className={`border border-border-subtle bg-white/80 [backdrop-filter:saturate(1.8)_blur(40px)] ${variants[variant]} ${className}`}
    >
      {children}
    </div>
  );
}
