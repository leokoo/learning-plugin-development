<?php
/*
Plugin Name: Plugin Development 101
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Following Pippin's Lessons on his site
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function pd101_sample_function( $post_id ){
	echo 'We saved postID' . $post_id;
	exit;

}
add_action( 'save_post', 'pd101_sample_function' );

?>