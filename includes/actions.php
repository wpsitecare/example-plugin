<?php
/**
 * All default actions for the plugin.
 *
 * @package   ExamplePlugin\Actions
 * @copyright Copyright (c) 2018, Cipher Development, LLC
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * Callback defined in includes/scripts.php
 *
 * @see example_plugin_load_css
 */
add_action( 'wp_enqueue_scripts', 'example_plugin_load_css', 20 );

/**
 * Callback defined in includes/scripts.php
 *
 * @see example_plugin_load_js
 */
add_action( 'wp_enqueue_scripts', 'example_plugin_load_js',  20 );
