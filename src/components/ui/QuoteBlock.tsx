import { ReactNode } from "react";

/**
 * Quote Block — design-system.md §3 ("Impact section").
 *
 * Dark-slate card, 20px radius, 50px/30px padding. Quote text is
 * 24px/500 near-white; the attribution line below is 16px/500 warm-white.
 */
export function QuoteBlock({
  quote,
  attribution,
  className = "",
}: {
  quote: ReactNode;
  attribution?: ReactNode;
  className?: string;
}) {
  return (
    <figure
      className={`rounded-[20px] border border-border-subtle bg-dark-slate p-[50px_30px] ${className}`}
    >
      <blockquote className="font-sans text-2xl font-medium leading-[33.6px] text-white/95">
        {quote}
      </blockquote>
      {attribution && (
        <figcaption className="mt-4 font-sans text-base font-medium text-warm-white">
          {attribution}
        </figcaption>
      )}
    </figure>
  );
}
