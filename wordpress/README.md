# WordPress-side deliverables

Files here support the headless rebuild's Phase 2 (mega menu) — see the
architecture plan in the project's Claude docs for full context. Nothing
in this folder runs on its own; it's meant to be copied into the actual
WordPress install (`reconnaissance.test` locally, then wherever it's
hosted after the domain cutover).

## Files

- **`site-navigation-options-page.php`** — registers the "Site Navigation"
  ACF Options Page. Add its contents to the active theme's
  `functions.php`, or to a small site-specific plugin (preferred, so it
  survives a theme change).
- **`acf-json/group_site_navigation.json`** — the ACF field group for that
  options page: a `nav_items` repeater matching the mega menu's data shape
  exactly (rail tabs → 2-column link grid with descriptions → a flexible
  right-column widget). Import via **Custom Fields → Tools → Import Field
  Groups** in wp-admin, or drop the file into the active theme's
  `acf-json/` folder if ACF's local JSON sync is already set up (it'll be
  picked up automatically).

## Setup order

1. Install & activate **WPGraphQL** and **WPGraphQL for ACF** (checklist
   item in the architecture plan §3) if not already active.
2. Add `site-navigation-options-page.php`'s contents to the theme (or a
   plugin) — this registers the options page.
3. Import `acf-json/group_site_navigation.json` — this adds the
   `nav_items` field group to that page.
4. In wp-admin, open the new **Site Navigation** menu item and populate it
   with the real menu content. `src/lib/navigation/seed-navigation.ts` on
   the Next.js side documents exactly what's real (pulled live from the
   current site's header) versus placeholder (invented tab groupings,
   descriptions, and right-column copy) — use that as the starting draft.
5. Confirm the field group is queryable over WPGraphQL (check "Show in
   GraphQL" in the ACF admin UI — the JSON sets this at the group level,
   but some WPGraphQL for ACF versions also need it per-field).
6. Swap `src/lib/navigation/seed-navigation.ts`'s static export for a
   WPGraphQL query against this options page. `src/lib/navigation/types.ts`
   is written to match this schema 1:1, so `MegaMenu.tsx` and `Header.tsx`
   shouldn't need any changes — only the data source does.

## A resolved ambiguity, worth knowing about

The architecture plan's original ACF schema sketch listed
`quick_tech_icons` nested inside the `tabs` repeater, but its own comment
said it should be "shown once per top-level item, not per tab" — those two
statements conflict. Both the field group JSON here and
`src/lib/navigation/types.ts` resolve it the second way: `quick_tech_icons`
is a sibling of `tabs` on each navigation item, not nested inside it, so
it persists across tab switches instead of needing to be duplicated on
every tab.
