<?php
/**
 * Kick off all actions, filters, and other functionality initialization.
 *
 * @package    ExamplePlugin\Functions\Init
 * @author     Robert Neu
 * @copyright  Copyright (c) 2016, WP Site Care
 * @license    MIT
 * @since      0.1.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Provide reliable access to the plugin's functions and methods before
 * the plugin's admin actions, filters, and functionality are initialized.
 *
 * @since  0.1.0
 * @access public
 */
do_action( 'example_plugin_before_admin_init' );

require_once EXAMPLE_PLUGIN_DIR . 'admin/actions.php';

/**
 * Provide reliable access to the plugin's functions and methods after
 * the plugin's admin actions, filters, and functionality are initialized.
 *
 * @since  0.1.0
 * @access public
 */
do_action( 'example_plugin_after_admin_init' );