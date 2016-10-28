<?php
/*
Plugin Name: PWPD 11 - Creating a sub-menu under the settings menu
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on creating a custom sub-menu on WordPress
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/



function boj_menuexample_create_menu() {
	
	//create a submenu under Settings
	add_options_page( 'Leo Plugin Settings Page', 'Menu Example Settings', 'manage_options', 'settings-submenu', 'boj_menuexample_settings_page' );
	
}
add_action( 'admin_menu', 'boj_menuexample_create_menu' );

?>