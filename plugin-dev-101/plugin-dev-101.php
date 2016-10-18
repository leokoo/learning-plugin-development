<?php
/*
Plugin Name: Plugin Development 101
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Following Pippin's Lessons on his site
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function pd101_sample_function(){
	echo 'This is our site header';

}
add_action( 'wp_head', 'pd101_sample_function' );

?>