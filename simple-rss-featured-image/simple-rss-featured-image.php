<?php
/*
Plugin Name: Simple RSS Featured Image
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple RSS Featured Image Plugin to show featured images on feedly
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function featuredtoRSS($content) {
	global $post;
	if ( has_post_thumbnail( $post->ID ) ){
		$content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
	}
	return $content;
}
 
add_filter('the_excerpt_rss', 'featuredtoRSS');
add_filter('the_content_feed', 'featuredtoRSS');

?>