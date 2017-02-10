<?php
/**
 * Kick off all actions, filters, and other functionality initialization.
 *
 * @package   ExamplePlugin\Init
 * @copyright Copyright (c) 2017, WP Site Care
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * Provide reliable access to the plugin's functions and methods before
 * the plugin's global actions, filters, and functionality are initialized.
 *
 * @since  1.0.0
 * @access public
 */
do_action( 'example_plugin_before_init' );

require_once EXAMPLE_PLUGIN_DIR . 'includes/actions.php';

/**
 * Provide reliable access to the plugin's functions and methods after
 * the plugin's global actions, filters, and functionality are initialized.
 *
 * @since  1.0.0
 * @access public
 */
do_action( 'example_plugin_after_init' );
