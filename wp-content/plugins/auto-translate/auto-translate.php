<?php

/**
 *
 * @link              https://pampa.dev
 * @since             1.0.0
 * @package           Auto_Translate
 *
 * @wordpress-plugin
 * Plugin Name:       Automatic Translator
 * Description:       Automatically translate you WordPress site. Easily. This is the easiest plugin to auto translate your website for Free, go multilingual with Automatic Translator with Google. English, Spanish, Chinese and 100+
 * Version:           1.4.3
 * Author:            Pampa Dev
 * Author URI:        https://pampa.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-translate
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'AUTO_TRANSLATE_VERSION', '1.4.3' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-auto-translate-activator.php
 */
function activate_auto_translate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-translate-activator.php';
	Auto_Translate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-auto-translate-deactivator.php
 */
function deactivate_auto_translate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-translate-deactivator.php';
	Auto_Translate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_auto_translate' );
register_deactivation_hook( __FILE__, 'deactivate_auto_translate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-auto-translate.php';


require plugin_dir_path( __FILE__ ) . 'includes/config.php';

require plugin_dir_path( __FILE__ ) . 'includes/class-auto-translate-languages.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_auto_translate() {

	$plugin = new Auto_Translate();
	$plugin->run();

}
run_auto_translate();
