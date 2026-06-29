<?php
/**
 * HLM AI SEO
 *
 * @package       HLM\AiSeo
 * @author        HLM Team
 * @license       GPL-2.0+
 * @link          https://hlm.dev
 *
 * Plugin Name:       HLM AI SEO
 * Plugin URI:        https://hlm.dev/plugins/hlm-ai-seo
 * Description:       Generate AI-readable website exports (llms.txt & llms-full.txt) for LLMs and AI tools
 * Version:           1.0.0
 * Author:            HLM Team
 * Author URI:        https://hlm.dev
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       hlm-ai-seo
 * Domain Path:       /languages
 * Requires at least: 6.8
 * Requires PHP:      8.1
 * Network:           false
 *
 * @wordpress-plugin
 */

namespace HLM\AiSeo;

use HLM\AiSeo\Core\Plugin;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin constants.
 */
define( 'HLM_AI_SEO_VERSION', '1.0.0' );
define( 'HLM_AI_SEO_FILE', __FILE__ );
define( 'HLM_AI_SEO_DIR', plugin_dir_path( __FILE__ ) );
define( 'HLM_AI_SEO_URL', plugin_dir_url( __FILE__ ) );
define( 'HLM_AI_SEO_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Require Composer autoloader.
 *
 * @since 1.0.0
 */
if ( file_exists( HLM_AI_SEO_DIR . 'vendor/autoload.php' ) ) {
	require_once HLM_AI_SEO_DIR . 'vendor/autoload.php';
}

/**
 * Load the plugin on 'plugins_loaded' hook.
 *
 * This ensures all dependencies are loaded and WordPress is ready.
 *
 * @since 1.0.0
 *
 * @return void
 */
add_action(
	'plugins_loaded',
	function () {
		// Initialize the main plugin class.
		$plugin = Plugin::get_instance();
		$plugin->boot();
	},
	0
);

/**
 * Activation hook.
 *
 * @since 1.0.0
 *
 * @return void
 */
register_activation_hook(
	__FILE__,
	function () {
		// Perform activation tasks.
		Plugin::get_instance()->activate();
	}
);

/**
 * Deactivation hook.
 *
 * @since 1.0.0
 *
 * @return void
 */
register_deactivation_hook(
	__FILE__,
	function () {
		// Perform deactivation tasks.
		Plugin::get_instance()->deactivate();
	}
);
