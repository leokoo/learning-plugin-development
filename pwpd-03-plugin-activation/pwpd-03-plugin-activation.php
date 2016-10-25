<?php
/*
Plugin Name: PWPD 03 - Plugin Activation
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple function to test the plugin activation
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

register_activation_hook( __FILE__, 'boj_myplugin_install' );

function boj_myplugin_install() {
    if ( version_compare( get_bloginfo( 'version' ), '3.1', '<' ) ) {
        deactivate_plugins( basename( __FILE__ ) ); // Deactivate our plugin
    }
}

?>