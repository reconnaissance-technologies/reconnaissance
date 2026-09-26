import { ReactNode } from "react";

/**
 * Process Steps — design-system.md §10.1 / §10.2 ("STEP 01 / Discovery &
 * Success Criteria", "How we work"). Used as a 4-up row.
 *
 * Eyebrow "STEP 0X" follows the standard eyebrow style (12px/400/uppercase/
 * 1px letter-spacing). Step title is H5 (20px/500/28px). `ProcessSteps` is
 * the bordered row container the individual `StepCard`s sit in, divided by
 * the same `rgba(0,0,0,.1)` hairline used elsewhere.
 */
export function StepCard({
  step,
  title,
  children,
}: {
  step: number | string;
  title: ReactNode;
  children?: ReactNode;
}) {
  const stepLabel = typeof step === "number" ? `Step ${String(step).padStart(2, "0")}` : step;

  return (
    <div className="flex flex-col gap-3 p-[30px]">
      <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
        {stepLabel}
      </span>
      <h5 className="font-sans text-xl font-medium leading-[28px] text-ink">{title}</h5>
      {children && <p className="font-sans text-sm text-ink/60">{children}</p>}
    </div>
  );
}

export function ProcessSteps({ children }: { children: ReactNode }) {
  return (
    <div className="grid grid-cols-1 divide-y divide-border-subtle rounded-[20px] border border-border-subtle sm:grid-cols-2 sm:divide-x sm:divide-y-0 lg:grid-cols-4">
      {children}
    </div>
  );
}
