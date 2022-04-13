<?php
/**
 * A must-use plugin for configuring WordPress automatic updates. Should be placed in the /wp-content/mu-plugins/ folder.
 *
 * @wordpress-plugin
 * Plugin Name:     Barn2 Automatic Updates
 * Description:     Enable or disable automatic updates for core, plugins, and themes.
 * Version:         1.2
 * Author:          Barn2 Media
 * Author URI:      https://barn2.co.uk
 *
 * Copyright:       Barn2 Media Ltd
 * License:         GNU General Public License v3.0
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.html
 */

// Enable automatic updates for core (dev, minor, major updates).
//define( 'WP_AUTO_UPDATE_CORE', true ); // true (all), false (none), minor (minor only)

// Or set one or more of these for fine-grained control...
//add_filter( 'allow_major_auto_core_updates', '__return_true' ); // allow major core updates
//add_filter( 'allow_minor_auto_core_updates', '__return_true' ); // allow minor core updates
//add_filter( 'allow_dev_auto_core_updates', '__return_true' ); // allow dev core updates (e.g. beta testers)

// This will override any of the above filters/constants...
add_filter( 'auto_update_core', '__return_true' ); // force all core updates

// Enable automatic updates for plugins.
//add_filter( 'auto_update_plugin', '__return_true' );

// Enable automatic updates for themes.
add_filter( 'auto_update_theme', '__return_true' );

// Disable auto-update email notifications
add_filter( 'auto_core_update_send_email', '__return_false' );
add_filter( 'automatic_updates_send_debug_email', '__return_false' );

// Disable auto-update emails WP 5.5+
add_filter( 'auto_theme_update_send_email', '__return_false' );
add_filter( 'auto_plugin_update_send_email', '__return_false' );
