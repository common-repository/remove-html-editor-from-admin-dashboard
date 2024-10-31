<?php
/*
Plugin Name: Remove HTML editor from dashboard
Plugin URI: http://krislagraff.com/plugin
Description: This plugin removes the HTML editor in admin dashboard.
Version: 1.0.2
Author: Kristopher Lagraff
Author URI: http://krislagraff.com
License: GPL2
*/

add_action( 'admin_init', 'remove_html_editor_menu');
function remove_html_editor_menu() {
	remove_submenu_page('themes.php', 'theme-editor.php' );
}
?>