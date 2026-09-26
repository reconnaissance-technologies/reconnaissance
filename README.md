# Reconnaissance Technologies — Website (Next.js frontend)

This is the headless frontend for reconnaissancetechnologies.com: a Next.js
app that reads content from WordPress (via WPGraphQL + ACF) and renders the
public site. It replaces the site's previous Elementor/WordPress-only theme.

> **Repo history note:** this repo originally held the company's first
> website (Laravel). That codebase is preserved and still reachable — see
> the `legacy-laravel` branch or the `legacy-laravel-v1` tag — and this
> `dev` branch now holds the new Next.js frontend instead.

## Stack

- Next.js 16 (App Router) + TypeScript
- Tailwind CSS v4 (`@theme` tokens in `src/app/globals.css`)
- Self-hosted fonts via `@fontsource` (Instrument Sans, IBM Plex Sans)
- WordPress as a headless CMS (WPGraphQL + ACF) — see the architecture plan
  in the project's Claude docs for the full data-flow and ACF schema

## Getting started

```bash
npm install
npm run dev
```

Open [http://localhost:3000](http://localhost:3000) to see the result.

## Design system

Brand tokens (navy `#1C4B96` + cyan `#01ADF5`, type scale, spacing, the
"torn corner" motif, and full per-page component specs) are documented in
`design-system.md` in the project — sampled directly from the logo/favicon
and pixel-audited against the live Elementor site.
