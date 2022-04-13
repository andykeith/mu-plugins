<?php
/**
 * A must-use plugin to disable the confirm admin email prompt on WordPress login. Should be placed in the /wp-content/mu-plugins/ folder.
 *
 * @wordpress-plugin
 * Plugin Name:     Barn2 Disable Confirm Admin Email Prompt
 * Description:     Disable the 'confirm admin email' prompt on login.
 * Version:         1.0
 * Author:          Barn2 Plugins
 * Author URI:      https://barn2.com
 *
 * Copyright:       Barn2 Media Ltd
 * License:         GNU General Public License v3.0
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.html
 */

add_filter(
	'admin_email_check_interval',
	function() {
		return 0;
	}
);


