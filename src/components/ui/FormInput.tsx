import { ComponentPropsWithoutRef } from "react";

type FormInputProps = {
  label?: string;
  id: string;
  className?: string;
} & Omit<ComponentPropsWithoutRef<"input">, "id" | "className">;

type FormTextareaProps = {
  label?: string;
  id: string;
  className?: string;
} & Omit<ComponentPropsWithoutRef<"textarea">, "id" | "className">;

const fieldStyles =
  "w-full rounded-[6px] border border-border-subtle bg-white px-[16px] py-[6px] font-sans text-base text-ink placeholder:text-ink/40 outline-none transition-colors focus:border-brand-navy focus:ring-1 focus:ring-brand-navy";

const labelStyles = "block font-sans text-sm font-medium text-ink";

/**
 * Form Input — design-system.md §3 ("Contact form").
 *
 * White bg, 6px radius (distinctly less rounded than buttons/cards),
 * `6px 16px` padding, `rgba(0,0,0,.1)` border, 16px Instrument Sans text.
 * Focus state uses brand-navy (replaces the live site's purple focus ring).
 */
export function FormInput({ label, id, className = "", ...props }: FormInputProps) {
  return (
    <div className="flex flex-col gap-2">
      {label && (
        <label htmlFor={id} className={labelStyles}>
          {label}
        </label>
      )}
      <input id={id} className={`${fieldStyles} ${className}`} {...props} />
    </div>
  );
}

/**
 * Textarea variant of FormInput — same visual spec, multi-line field
 * (e.g. the contact form's "Message" field).
 */
export function FormTextarea({ label, id, className = "", rows = 5, ...props }: FormTextareaProps) {
  return (
    <div className="flex flex-col gap-2">
      {label && (
        <label htmlFor={id} className={labelStyles}>
          {label}
        </label>
      )}
      <textarea id={id} rows={rows} className={`${fieldStyles} resize-y ${className}`} {...props} />
    </div>
  );
}
