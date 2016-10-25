<?php
/*
Plugin Name: 06-Enqueue Styles and Scripts
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Learning how to enqueue styles and scripts
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
//https://developer.wordpress.org/reference/functions/wp_enqueue_style/
//https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
//https://codex.wordpress.org/Function_Reference/plugins_url
/*
	Retrieves the absolute URL to the plugins or mu-plugins directory (without the trailing slash) or, when using the $path argument, to a specific file under that directory. You can either specify the $path argument as a hardcoded path relative to the plugins or mu-plugins directory, or conveniently pass __FILE__ as the second argument to make the $path relative to the parent directory of the current PHP script file.
*/

function pd101_load_styles() {
	wp_enqueue_style( 'pd101-styles', plugins_url( 'includes/css/pd101-styles.css', __FILE__ ) );
	wp_enqueue_script( 'pd101-scripts', plugins_url( 'includes/js/pd101-scripts.js', __FILE__ ), array( 'jquery' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'pd101_load_styles' );

?>