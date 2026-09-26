import { ComponentPropsWithoutRef, ElementType } from "react";

type ButtonVariant = "primary" | "secondary";

type ButtonProps<T extends ElementType> = {
  as?: T;
  variant?: ButtonVariant;
  className?: string;
} & Omit<ComponentPropsWithoutRef<T>, "as" | "className">;

/**
 * Button — design-system.md §3.
 *
 * Buttons are neutral black/white on the live site (never purple/navy) —
 * this is a deliberate high-contrast choice independent of the brand-color
 * swap, so it carries over unchanged from the extracted spec.
 *
 * Primary:   black bg, white text, 1px solid black border, soft shadow.
 * Secondary: white bg, black text, 1px solid rgba(0,0,0,.1) border.
 * Both: 60px pill radius, 17px/25px padding, 16px/500 Instrument Sans.
 */
export function Button<T extends ElementType = "button">({
  as,
  variant = "primary",
  className = "",
  ...props
}: ButtonProps<T>) {
  const Component = as || "button";

  const base =
    "inline-flex items-center gap-2 rounded-[60px] px-[25px] py-[17px] text-base font-medium font-sans leading-[1.1] transition-colors";

  const variants: Record<ButtonVariant, string> = {
    primary:
      "bg-ink text-white border border-ink shadow-[0_1px_4px_rgba(0,0,0,0.2)] hover:bg-brand-navy-dark hover:border-brand-navy-dark",
    secondary:
      "bg-white text-ink border border-border-subtle shadow-[0_2px_4px_rgba(0,0,0,0.1)] hover:bg-warm-white",
  };

  return (
    <Component className={`${base} ${variants[variant]} ${className}`} {...props} />
  );
}
