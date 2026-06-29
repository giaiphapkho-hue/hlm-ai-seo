<?php
/**
 * Uninstall HLM AI SEO Plugin
 *
 * Handles cleanup when plugin is deleted from WordPress.
 *
 * @package HLM\AiSeo
 * @since   1.0.0
 */

namespace HLM\AiSeo;

// Exit if accessed directly or not via WordPress uninstall.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * Delete all plugin options from database.
 *
 * @since 1.0.0
 */
$options_to_delete = [
	'hlm_ai_seo_settings',
	'hlm_ai_seo_last_generation',
	'hlm_ai_seo_cache_size',
	'hlm_ai_seo_indexed_pages_count',
];

foreach ( $options_to_delete as $option ) {
	delete_option( $option );
	delete_site_option( $option ); // For multisite.
}

/**
 * Delete all plugin transients.
 *
 * @since 1.0.0
 */
global $wpdb;

// Delete transients from options table.
$wpdb->query(
	"DELETE FROM {$wpdb->options}
	WHERE option_name LIKE '%hlm_ai_seo%'
	OR option_name LIKE '%_transient_hlm_%'"
);

// Delete transients from sitemeta for multisite.
if ( is_multisite() ) {
	$wpdb->query(
		"DELETE FROM {$wpdb->sitemeta}
		WHERE meta_key LIKE '%hlm_ai_seo%'
		OR meta_key LIKE '%_transient_hlm_%'"
	);
}

/**
 * Clear any cached data in external caches.
 *
 * @since 1.0.0
 */
if ( function_exists( 'wp_cache_flush' ) ) {
	wp_cache_flush();
}

// Remove scheduled cron events.
wp_clear_scheduled_hook( 'hlm_ai_seo_regenerate_cache' );
wp_clear_scheduled_hook( 'hlm_ai_seo_purge_old_logs' );
