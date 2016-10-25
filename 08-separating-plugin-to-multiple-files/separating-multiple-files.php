<?php
/*
Plugin Name: 8-Separating Multiple Files
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Learning to separate the plugins to multiple files and also learning to define an absolute plugin path
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

//We define the absolute server path to avoid rare cases of conflict with other plugins that have files of the same name. At the same time, once we've defined the plugin path, we can just reuse it again and again
define( 'PD101_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

/*
	https://codex.wordpress.org/Function_Reference/is_admin
	This Conditional Tag checks if the Dashboard or the administration panel is attempting to be displayed. It is a boolean function that will return true if the URL being accessed is in the admin section, or false for a front-end page.
*/

	if( is_admin() ){
			include( PD101_PLUGIN_PATH . 'includes/admin-scripts.php');
	}
		else {
			include( PD101_PLUGIN_PATH . 'includes/scripts.php');
		}
	include( PD101_PLUGIN_PATH . 'includes/post-type.php');

?>