"use client";

import { useEffect, useRef, useState } from "react";
import Link from "next/link";
import type { NavItem, RightSlot } from "@/lib/navigation/types";

/**
 * Mega menu — architecture plan §1 (modeled on hiddenbrains.com) and §4
 * (data shape). Click-to-open per trigger (matches the live site's own
 * `aria-haspopup`/`aria-expanded` dropdown-button pattern, just applied to
 * a richer panel), one panel open at a time, Escape and backdrop-click to
 * close.
 *
 * A trigger with a single tab skips the left rail entirely — the rail
 * only earns its place once there's something to switch between (e.g.
 * Services' two tabs). Everything here reads from `NavItem[]`, the same
 * shape the "Site Navigation" ACF options page will hand back over
 * WPGraphQL (architecture plan §4), so swapping the seed data for a real
 * query shouldn't require touching this component.
 */
export function MegaMenu({ items }: { items: NavItem[] }) {
  const [openId, setOpenId] = useState<string | null>(null);
  const [activeTabByItem, setActiveTabByItem] = useState<Record<string, string>>({});
  const rootRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    function onKeyDown(e: KeyboardEvent) {
      if (e.key === "Escape") setOpenId(null);
    }
    document.addEventListener("keydown", onKeyDown);
    return () => document.removeEventListener("keydown", onKeyDown);
  }, []);

  useEffect(() => {
    function onClickOutside(e: MouseEvent) {
      if (rootRef.current && !rootRef.current.contains(e.target as Node)) {
        setOpenId(null);
      }
    }
    if (openId) document.addEventListener("mousedown", onClickOutside);
    return () => document.removeEventListener("mousedown", onClickOutside);
  }, [openId]);

  const openItem = items.find((item) => item.id === openId);

  return (
    // No `relative` here on purpose: the panel below is `absolute
    // inset-x-0`, and it needs its nearest positioned ancestor to be the
    // full-width <Header>, not this nav-sized wrapper — otherwise the
    // panel (and its backdrop) only ever span the width of the nav links
    // instead of the full header width the design calls for.
    <div ref={rootRef}>
      <nav aria-label="Primary" className="flex items-center gap-1">
        {items.map((item) => {
          const hasPanel = !!item.tabs?.length;
          const isOpen = openId === item.id;

          if (!hasPanel) {
            return (
              <Link
                key={item.id}
                href={item.url ?? "#"}
                className="rounded-full px-4 py-2 font-sans text-base font-medium text-ink transition-colors hover:text-brand-navy"
              >
                {item.label}
              </Link>
            );
          }

          return (
            <button
              key={item.id}
              type="button"
              aria-haspopup="true"
              aria-expanded={isOpen}
              onClick={() => setOpenId(isOpen ? null : item.id)}
              className={`flex items-center gap-1 rounded-full px-4 py-2 font-sans text-base font-medium transition-colors ${
                isOpen ? "text-brand-navy" : "text-ink hover:text-brand-navy"
              }`}
            >
              {item.label}
              <svg
                aria-hidden="true"
                viewBox="0 0 10 6"
                className={`h-[6px] w-[10px] transition-transform ${isOpen ? "rotate-180" : ""}`}
              >
                <path d="M1 1l4 4 4-4" stroke="currentColor" strokeWidth="1.5" fill="none" strokeLinecap="round" strokeLinejoin="round" />
              </svg>
            </button>
          );
        })}
      </nav>

      {openItem && (
        <>
          {/* Full-width backdrop — architecture plan §1: "dark page behind
              it showing through/dimmed". `absolute` (not `fixed`) so it's
              positioned against the same containing block as the panel
              (the header) rather than the viewport — `top-full` under
              `fixed` would resolve against 100% of the viewport height,
              not the header's bottom edge. `h-screen` gives it enough
              reach to cover whatever's visible below the header without
              needing to know the page's real scroll height. */}
          <div
            className="absolute inset-x-0 top-full z-40 h-screen bg-black/20"
            onClick={() => setOpenId(null)}
            aria-hidden="true"
          />
          <MegaMenuPanel
            item={openItem}
            activeTabId={activeTabByItem[openItem.id]}
            onTabChange={(tabId) =>
              setActiveTabByItem((prev) => ({ ...prev, [openItem.id]: tabId }))
            }
            onNavigate={() => setOpenId(null)}
          />
        </>
      )}
    </div>
  );
}

function MegaMenuPanel({
  item,
  activeTabId,
  onTabChange,
  onNavigate,
}: {
  item: NavItem;
  activeTabId: string | undefined;
  onTabChange: (tabId: string) => void;
  onNavigate: () => void;
}) {
  const tabs = item.tabs ?? [];
  const activeTab = tabs.find((t) => t.id === activeTabId) ?? tabs[0];
  const hasRail = tabs.length > 1;

  return (
    <div
      className="absolute inset-x-0 top-full z-50 border-t border-border-subtle bg-white shadow-[0_20px_40px_rgba(0,0,0,0.12)]"
      role="region"
      aria-label={`${item.label} menu`}
    >
      <div className="mx-auto flex max-w-[1280px]">
        {hasRail && (
          <div className="flex w-[250px] shrink-0 flex-col gap-1 border-r border-border-subtle bg-warm-white p-6">
            {tabs.map((tab) => (
              <button
                key={tab.id}
                type="button"
                onClick={() => onTabChange(tab.id)}
                className={`rounded-full px-4 py-2 text-left font-sans text-sm font-medium transition-colors ${
                  tab.id === activeTab.id
                    ? "bg-brand-navy text-white"
                    : "text-ink hover:bg-white"
                }`}
              >
                {tab.label}
              </button>
            ))}

            {item.quickTechIcons && item.quickTechIcons.length > 0 && (
              <div className="mt-6 border-t border-border-subtle pt-6">
                <p className="font-label text-xs font-normal uppercase tracking-[1px] text-ink/50">
                  Quick Technologies
                </p>
                <div className="mt-3 grid grid-cols-4 gap-3">
                  {item.quickTechIcons.map((tech) => (
                    <Link
                      key={tech.label}
                      href={tech.url}
                      title={tech.label}
                      onClick={onNavigate}
                      className="flex h-8 w-8 items-center justify-center rounded-[6px] text-ink/60 hover:text-brand-navy"
                    >
                      {tech.icon}
                    </Link>
                  ))}
                </div>
              </div>
            )}
          </div>
        )}

        <div className="grid flex-1 grid-cols-1 gap-8 p-8 lg:grid-cols-[1fr_320px]">
          <div className="flex flex-col gap-6">
            <div className="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
              {activeTab.columns.flatMap((column) =>
                column.links.map((link) => (
                  <Link
                    key={link.url}
                    href={link.url}
                    onClick={onNavigate}
                    className="group flex flex-col gap-1"
                  >
                    <span className="font-sans text-base font-medium text-ink group-hover:text-brand-navy">
                      {link.title}
                    </span>
                    {link.description && (
                      <span className="font-sans text-sm text-ink/60">{link.description}</span>
                    )}
                  </Link>
                ))
              )}
            </div>

            {activeTab.viewAllLink && (
              <Link
                href={activeTab.viewAllLink.url}
                onClick={onNavigate}
                className="inline-flex w-fit items-center gap-2 whitespace-nowrap rounded-[60px] border border-border-subtle px-[25px] py-[17px] font-sans text-sm font-medium uppercase tracking-[1px] text-ink transition-colors hover:border-brand-navy hover:text-brand-navy"
              >
                {activeTab.viewAllLink.label}
                <svg aria-hidden="true" viewBox="0 0 16 16" className="h-4 w-4">
                  <path
                    fill="currentColor"
                    d="M9.3 3.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4L11.6 9H3a1 1 0 1 1 0-2h8.6L9.3 4.7a1 1 0 0 1 0-1.4Z"
                  />
                </svg>
              </Link>
            )}
          </div>

          {activeTab.rightSlot && (
            <div className="border-t border-border-subtle pt-6 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0">
              <RightSlotView slot={activeTab.rightSlot} onNavigate={onNavigate} />
            </div>
          )}
        </div>
      </div>
    </div>
  );
}

function RightSlotView({ slot, onNavigate }: { slot: RightSlot; onNavigate: () => void }) {
  switch (slot.type) {
    case "widget_list":
      return (
        <div className="flex flex-col gap-4">
          <h6 className="font-sans text-base font-medium leading-[20.8px] text-ink">{slot.heading}</h6>
          <ul className="flex flex-col gap-3">
            {slot.items.map((item) => (
              <li key={item.title}>
                <p className="font-sans text-sm font-medium text-ink">{item.title}</p>
                {item.description && (
                  <p className="font-sans text-sm text-ink/60">{item.description}</p>
                )}
              </li>
            ))}
          </ul>
        </div>
      );
    case "tag_cloud":
      return (
        <div className="flex flex-col gap-3">
          <h6 className="font-sans text-base font-medium leading-[20.8px] text-ink">{slot.heading}</h6>
          {slot.subheading && <p className="font-sans text-sm text-ink/60">{slot.subheading}</p>}
          <div className="flex flex-wrap gap-2">
            {slot.tags.map((tag) => (
              <span
                key={tag}
                className="rounded-[20px] bg-warm-white px-[15px] py-[6px] font-label text-xs uppercase tracking-[1px] text-ink/70"
              >
                {tag}
              </span>
            ))}
          </div>
        </div>
      );
    case "promo_box":
      return (
        <div className="flex flex-col gap-3 rounded-[20px] bg-warm-white p-6">
          {slot.showPhoneIcon && (
            <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" className="h-6 w-6 text-brand-navy">
              <path d="M6.6 10.8c1.4 2.8 3.8 5.2 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.5.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.5.1.4 0 .8-.2 1L6.6 10.8Z" strokeLinecap="round" strokeLinejoin="round" />
            </svg>
          )}
          <h6 className="font-sans text-base font-medium leading-[20.8px] text-ink">{slot.heading}</h6>
          <p className="font-sans text-sm text-ink/60">{slot.body}</p>
          <Link
            href={slot.cta.url}
            onClick={onNavigate}
            className="inline-flex w-fit items-center gap-2 rounded-[60px] bg-ink px-[25px] py-[17px] font-sans text-sm font-medium text-white transition-colors hover:bg-brand-navy-dark"
          >
            {slot.cta.label}
          </Link>
        </div>
      );
    case "banner_image":
      return (
        <Link href={slot.url ?? "#"} onClick={onNavigate} className="block overflow-hidden rounded-[20px]">
          {/* eslint-disable-next-line @next/next/no-img-element -- decorative promo banner, dimensions vary per campaign */}
          <img src={slot.imageSrc} alt={slot.imageAlt} className="h-auto w-full object-cover" />
        </Link>
      );
  }
}
