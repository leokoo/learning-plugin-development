<?php
/*
Plugin Name: 7-Adding Admin Menu
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Lessons in adding admin menus
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

/*
https://developer.wordpress.org/reference/functions/add_menu_page/
add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )

https://developer.wordpress.org/reference/functions/add_submenu_page/
add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '' )
*/

function pd101_add_menu_page() {
	add_menu_page('Plugin Dev 101', 'PD101', 'edit_pages', 'pd101', 'pd101_render_admin', false, 63);
	add_submenu_page('pd101', 'PD101 Settings', 'Settings', 'edit_pages', 'pd101-settings', 'pd101_render_settings');
}
add_action('admin_menu', 'pd101_add_menu_page');


function pd101_render_admin() {
	echo 'You are now seeing our admin screen';
}

function pd101_render_settings() {
	echo 'You are now seeing our submenu settings screen';
}

?>