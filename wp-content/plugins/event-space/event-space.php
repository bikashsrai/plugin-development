<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://eventspace.com/bikash
 * @since             1.0.0
 * @package           Event_Space
 *
 * @wordpress-plugin
 * Plugin Name:       Event Space
 * Plugin URI:        https://eventspace.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bikash Rai
 * Author URI:        https://eventspace.com/bikash
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       event-space
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EVENT_SPACE_VERSION', '1.0.0' );
define( 'EVENT_SPACE_NAME', 'event-space' );

//plugin Directly patth


define('EVENT_SPACE_BASE_DIR',plugin_dir_path( __FILE__ ));
// Plugin Directry uri
define('EVENT_SPACE_PLUGIN_URL',plugin_dir_URL( __FILE__ ));

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-event-space-activator.php
 */
function activate_event_space() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-event-space-activator.php';
	Event_Space_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-event-space-deactivator.php
 */
function deactivate_event_space() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-event-space-deactivator.php';
	Event_Space_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_event_space' );
register_deactivation_hook( __FILE__, 'deactivate_event_space' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-event-space.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_event_space() {

	$plugin = new Event_Space();
	$plugin->run();

}
run_event_space();