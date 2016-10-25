<?php
/*
Plugin Name: PWPD 04 - Randomizing Home Page Posts
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin to try out the Pre Get Posts hook
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

add_action( 'pre_get_posts', 'boj_randomly_order_blog_posts' );

function boj_randomly_order_blog_posts( $query ) {

    if ( $query->is_home && empty( $query->query_vars['suppress_filters'] ) )
        $query->set( 'orderby', 'rand' );
}

?>