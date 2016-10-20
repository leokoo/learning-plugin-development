<?php
/*
Plugin Name: 7-Adding Admin Menu
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Lessons in adding admin menus
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function pd101_add_menu_page() {
	add_menu_page('Plugin Dev 101', 'PD101', 'edit_pages', 'pd101', 'pd101_render_admin', false, 63);
}
add_action('admin_menu', 'pd101_add_menu_page');


function pd101_render_admin() {
	echo 'You are now seeing our admin screen';
}


?>