<?php
/**
 * Plugin Name:  Example Plugin
 * Plugin URI:   https://github.com/wpsitecare/example-plugin/
 * Description:  An example plugin for WP Site Care projects.
 * Version:      0.1.0
 * Author:       WP Site Care
 * Author URI:   http://www.wpsitecare.com
 * License:      MIT
 * License URI:  http://wpsitecare.mit-license.org/
 * Text Domain:  example-plugin
 * Domain Path:  /languages
 */

// Prevent direct access.
defined( 'ABSPATH' ) || exit;

// Load the main plugin class.
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';

add_action( 'plugins_loaded', array( example_plugin(), 'run' ) );
/**
 * Access a single instance of the main plugin class. Plugins and themes should
 * use this function to access plugin properties and methods. It's also a good
 * way to check whether or not the plugin is activated.
 *
 * @since  0.1.0
 * @access public
 * @uses   Example_Plugin
 * @return object Example_Plugin A single instance of the main plugin class.
 */
function example_plugin() {
	return Example_Plugin::instance( array( 'file' => __FILE__ ) );
}

/**
 * Grab an instance of one of the plugin class objects.
 *
 * If you need to reference a method in one of the plugin classes, you should
 * typically do it using this function.
 *
 * Example:
 *
 * <?php example_plugin_get( 'public-scripts' )->maybe_disable(); ?>
 *
 * @since   0.1.0
 * @return  object
 */
function example_plugin_get( $object, $name = 'canonical', $args = array() ) {
	return Example_Plugin_Factory::get( $object, $name, $args );
}

register_activation_hook( __FILE__, 'example_plugin_activate' );
/**
 * Set up roles, options and required data on plugin activation.
 *
 * @since  0.1.0
 * @access public
 * @return void
 */
function example_plugin_activate() {
	example_plugin()->run();
	example_plugin_get( 'plugin-hooks' )->activate();
}

register_deactivation_hook( __FILE__, 'example_plugin_deactivate' );
/**
 * Remove unnecessary data on plugin deactivation.
 *
 * @since  0.1.0
 * @access public
 * @return void
 */
function example_plugin_deactivate() {
	example_plugin()->run();
	example_plugin_get( 'plugin-hooks' )->deactivate();
}

register_uninstall_hook( __FILE__, 'example_plugin_uninstall' );
/**
 * Clean up all leftover roles, options, and data on plugin removal.
 *
 * @since  0.1.0
 * @access public
 * @return void
 */
function example_plugin_uninstall() {
	example_plugin()->run();
	example_plugin_get( 'plugin-hooks' )->uninstall();
}
