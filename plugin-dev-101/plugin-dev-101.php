<?php
/*
Plugin Name: Plugin Development 101
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Following Pippin's Lessons on his site
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function pd101_sample_function( $content ){
	$content = str_replace( 'Louis Freeh', 'John Doe', $content );

	return $content;
}
add_filter( 'the_content', 'pd101_sample_function');

?>