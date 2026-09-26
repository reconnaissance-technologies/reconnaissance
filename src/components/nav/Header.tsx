import Image from "next/image";
import Link from "next/link";
import { Button } from "@/components/ui/Button";
import { MegaMenu } from "@/components/nav/MegaMenu";
import { getSiteNavigation } from "@/lib/navigation/get-site-navigation";

/**
 * Site header — logo, mega menu (architecture plan §1/§4), and the CTA
 * button that sits outside the nav itself (matching the live site's own
 * "Trigger row: standard top nav ... + a separate CTA button").
 *
 * `relative` + `z-30` here (above ordinary page content, below the
 * MegaMenu panel's own z-40/z-50) so the panel's backdrop and panel can
 * stack correctly against whatever the page renders below the header.
 *
 * Async because the nav content is now fetched from WordPress
 * (`getSiteNavigation`, architecture plan §5 phase 2) rather than read
 * from the static seed data — this is a Server Component, so the `await`
 * happens at render time on the server, not in the browser.
 */
export async function Header() {
  const siteNavigation = await getSiteNavigation();

  return (
    <header className="relative z-30 w-full border-b border-border-subtle bg-white">
      <div className="mx-auto flex max-w-[1280px] items-center justify-between gap-6 px-6 py-4">
        <Link href="/" className="shrink-0">
          <Image src="/logo.png" alt="Reconnaissance Technologies" width={156} height={35} priority />
        </Link>

        <div className="hidden lg:block">
          <MegaMenu items={siteNavigation.items} />
        </div>

        <Button as="a" href="/book-a-discovery-call/" variant="primary" className="hidden sm:inline-flex">
          Book a discovery call
        </Button>
      </div>
    </header>
  );
}
