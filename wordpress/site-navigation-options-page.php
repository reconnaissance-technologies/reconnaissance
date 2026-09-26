<?php
/**
 * Registers the "Site Navigation" ACF Options Page that drives the
 * headless mega menu (architecture plan §4). Add this to the active
 * theme's functions.php, or — better — to a small site-specific plugin so
 * it survives a theme change.
 *
 * After adding this:
 *   1. Import wordpress/acf-json/group_site_navigation.json via
 *      Custom Fields → Tools → Import Field Groups (or drop it into the
 *      theme's acf-json/ folder if ACF's local JSON sync is set up —
 *      ACF will pick it up automatically on the next admin page load).
 *   2. A new "Site Navigation" menu item appears in wp-admin; populate it
 *      with the real content currently hardcoded in
 *      src/lib/navigation/seed-navigation.ts on the Next.js side.
 *   3. Confirm "Show in GraphQL" is enabled for the field group (and, if
 *      your version of WPGraphQL for ACF requires it, for each field) —
 *      the JSON sets this at the group level, but per-field toggles vary
 *      by plugin version, so it's worth a quick check in the ACF admin UI.
 *   4. Once queryable, replace the `siteNavigation` seed import in
 *      src/lib/navigation/seed-navigation.ts with a WPGraphQL query
 *      against this options page — src/lib/navigation/types.ts is
 *      designed to match this schema 1:1, so the rest of the mega menu
 *      component shouldn't need to change.
 */

add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page( [
		'page_title' => 'Site Navigation',
		'menu_title' => 'Site Navigation',
		'menu_slug'  => 'acf-options-site-navigation',
		'capability' => 'edit_theme_options',
		'icon_url'   => 'dashicons-menu-alt3',
		'position'   => 21, // just under Appearance
	] );
} );
