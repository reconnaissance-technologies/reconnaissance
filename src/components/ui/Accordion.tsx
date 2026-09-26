import { ReactNode } from "react";

/**
 * FAQ Accordion — design-system.md §10.1 / §10.4.
 *
 * Reproduces Elementor's `e-n-accordion` widget using native
 * `<details>`/`<summary>` — same accessibility/semantics for free (no JS
 * needed for the open/close behavior). Reused verbatim on individual
 * service pages and the standalone `/faq/` page.
 *
 * Item title: 16px/400, `rgb(31,33,36)` (a hair off pure black),
 * `25.6px` padding, `1px solid rgba(0,0,0,.1)` border-bottom between
 * items. Chevron rotates 45deg (plus → x) on open via the `group-open`
 * variant, no JS required.
 */
export function AccordionItem({
  question,
  children,
  defaultOpen = false,
}: {
  question: ReactNode;
  children: ReactNode;
  defaultOpen?: boolean;
}) {
  return (
    <details
      open={defaultOpen}
      className="group border-b border-border-subtle [&_summary::-webkit-details-marker]:hidden"
    >
      <summary className="flex cursor-pointer list-none items-center justify-between gap-4 py-[25.6px] font-sans text-base font-normal text-[rgb(31,33,36)]">
        {question}
        <svg
          aria-hidden="true"
          viewBox="0 0 10 10"
          className="h-[10px] w-[10px] shrink-0 text-[rgb(31,33,36)] transition-transform duration-200 group-open:rotate-45"
        >
          <path d="M5 0v10M0 5h10" stroke="currentColor" strokeWidth="1.5" />
        </svg>
      </summary>
      <div className="pb-[25.6px] font-sans text-base text-ink/70">{children}</div>
    </details>
  );
}

export function Accordion({
  items,
}: {
  items: { id: string; question: ReactNode; answer: ReactNode }[];
}) {
  return (
    <div className="border-t border-border-subtle">
      {items.map((item) => (
        <AccordionItem key={item.id} question={item.question}>
          {item.answer}
        </AccordionItem>
      ))}
    </div>
  );
}
