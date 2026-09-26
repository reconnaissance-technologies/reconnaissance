import { ReactNode } from "react";

/**
 * Checklist Item — design-system.md §3.
 * Icon color uses brand-navy (replaces the live site's purple checkmark).
 */
export function ChecklistItem({ children }: { children: ReactNode }) {
  return (
    <li className="flex items-start gap-2">
      <svg
        aria-hidden="true"
        viewBox="0 0 20 20"
        className="mt-[3px] h-[17.5px] w-[17.5px] shrink-0 text-brand-navy"
      >
        <path
          fill="currentColor"
          d="M16.7 5.3a1 1 0 0 1 0 1.4l-8 8a1 1 0 0 1-1.4 0l-4-4a1 1 0 1 1 1.4-1.4L8 12.6l7.3-7.3a1 1 0 0 1 1.4 0Z"
        />
      </svg>
      <span className="font-sans text-base font-medium text-ink">{children}</span>
    </li>
  );
}
