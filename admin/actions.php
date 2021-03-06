<?php
/**
 * All default actions for the plugin.
 *
 * @package   ExamplePlugin\Admin\Actions
 * @copyright Copyright (c) 2018, Cipher Development, LLC
 * @license   MIT
 * @since     1.0.0
 */

defined( 'WPINC' ) || die;

/**
 * Callback defined in includes/language.php
 *
 * @see example_plugin_load_textdomain
 */
add_action( 'admin_head-plugins.php', 'example_plugin_load_textdomain' );
