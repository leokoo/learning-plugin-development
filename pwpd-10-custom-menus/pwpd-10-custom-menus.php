<?php
/*
Plugin Name: PWPD 10 - Creating a custom menu
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on creating a custom menu on WordPress
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/



function boj_menuexample_create_menu() {

    //create custom top-level menu
    add_menu_page( 'My Plugin Settings Page', 'Menu Example Settings', 'manage_options', 'custom-menu', 'boj_menuexample_settings_page', false);
    
    //create submenu items
    add_submenu_page( 'custom-menu', 'About My Plugin', 'About', 'manage_options', 'custom-menu-about', 'boj_menuexample_about_page' );
    add_submenu_page( 'custom-menu', 'Help with My Plugin', 'Help', 'manage_options', 'custom-menu-help', 'boj_menuexample_help_page' );
    add_submenu_page( 'custom-menu', 'Uinstall My Plugin', 'Uninstall', 'manage_options', 'custom-menu-uninstall', 'boj_menuexample_uninstall_page' ); 
}
add_action( 'admin_menu', 'boj_menuexample_create_menu' );

?>