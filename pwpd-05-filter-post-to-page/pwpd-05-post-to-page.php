<?php
/*
Plugin Name: PWPD 05 - Posts to Pages
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin to change the home page from displaying posts to displaying pages
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

add_filter( 'posts_results', 'boj_custom_home_page_posts' );

function boj_custom_home_page_posts( $results ) {
    global $wpdb, $wp_query;

    /* Check if viewing the home page. */
    if ( is_home() ) {

        /* Posts per page. */
        $per_page = get_option( 'posts_per_page' );

        /* Get the current page. */
        $paged = get_query_var( 'paged' );

        /* Set the $page variable. */
        $page = ( ( 0 == $paged || 1 == $paged ) ? 1 : absint( $paged ) );

        /* Set the number of posts to offset. */
        $offset = ( $page - 1 ) * $per_page . ', ';

        /* Set the limit by the $offset and number of posts to show. */
        $limits = 'LIMIT '. $offset . $per_page;

        /* Get results from the database. */
        $results = $wpdb->get_results( "
            SELECT SQL_CALC_FOUND_ROWS $wpdb->posts.* 
            FROM $wpdb->posts 
            WHERE 1=1 
            AND post_type = 'page' 
            AND post_status = 'publish' 
            ORDER BY post_title ASC 
            $limits
        " );
    }

    return $results;
}

?>