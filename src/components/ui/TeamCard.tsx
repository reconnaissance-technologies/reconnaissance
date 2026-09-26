import Image from "next/image";

/**
 * Team / Member Card — design-system.md §10.2 (4-up grid on desktop, e.g.
 * "Marcus Okafor — Founder & CEO").
 *
 * - Photo uses the asymmetric "torn corner" mask (§9), not a plain radius.
 * - Name: H4/H5, 20px/500/28px. Role: standard eyebrow style
 *   (12px/400/uppercase/1px letter-spacing).
 * - Hairline divider between name and role.
 * - LinkedIn + X icons, black, ~16px, inline row below the role label.
 */
export function TeamCard({
  photoSrc,
  photoAlt,
  name,
  role,
  linkedInHref,
  xHref,
}: {
  photoSrc: string;
  photoAlt: string;
  name: string;
  role: string;
  linkedInHref?: string;
  xHref?: string;
}) {
  return (
    <div className="flex flex-col gap-4">
      <div className="relative aspect-[4/5] w-full overflow-hidden rounded-card-torn bg-warm-white">
        <Image src={photoSrc} alt={photoAlt} fill className="object-cover" />
      </div>

      <div className="flex flex-col gap-2">
        <h5 className="font-sans text-xl font-medium leading-[28px] text-ink">{name}</h5>
        <div className="border-t border-border-subtle pt-2">
          <span className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/60">
            {role}
          </span>
        </div>

        {(linkedInHref || xHref) && (
          <div className="flex items-center gap-3 pt-1">
            {linkedInHref && (
              <a
                href={linkedInHref}
                aria-label={`${name} on LinkedIn`}
                className="text-ink transition-opacity hover:opacity-60"
              >
                <svg viewBox="0 0 16 16" className="h-4 w-4" fill="currentColor" aria-hidden="true">
                  <path d="M3.6 5.4H.9V15h2.7V5.4ZM2.25 4.2A1.57 1.57 0 1 0 2.27 1a1.57 1.57 0 0 0-.02 3.2ZM15.1 15h.01v-5.3c0-2.6-1.4-3.8-3.2-3.8a2.8 2.8 0 0 0-2.5 1.4h-.04V6.2H6.8c.04.8 0 8.8 0 8.8h2.7v-4.9c0-.27.02-.53.1-.72a1.56 1.56 0 0 1 1.42-1.04c1 0 1.4.76 1.4 1.87V15h2.68Z" />
                </svg>
              </a>
            )}
            {xHref && (
              <a
                href={xHref}
                aria-label={`${name} on X`}
                className="text-ink transition-opacity hover:opacity-60"
              >
                <svg viewBox="0 0 16 16" className="h-4 w-4" fill="currentColor" aria-hidden="true">
                  <path d="M9.5 6.8 15 1h-1.7L8.7 5.7 4.9 1H.5l5.8 8.2L.5 15h1.7l4.9-5 4 5h4.4L9.5 6.8Zm-1.7 2-.6-.8L2.8 2.1h2l3.6 5 .6.8 4.6 6.5h-2L7.8 8.8Z" />
                </svg>
              </a>
            )}
          </div>
        )}
      </div>
    </div>
  );
}
