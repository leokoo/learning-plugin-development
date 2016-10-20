<?php
/*
Plugin Name: 8-Separating Multiple Files
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Learning to separate the plugins to multiple files and also learning to define an absolute plugin path
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

//We define the absolute plugin path to avoid rare cases of conflict with other plugins that have files of the same name. At the same time, once we've defined the plugin path, we can just reuse it again and again
define( 'PD101_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	include( PD101_PLUGIN_PATH . 'includes/admin-scripts.php');
	include( PD101_PLUGIN_PATH . 'includes/scripts.php');
	include( PD101_PLUGIN_PATH . 'includes/post-type.php');

?>