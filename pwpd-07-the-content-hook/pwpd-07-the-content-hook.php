<?php
/*
Plugin Name: PWPD 07 - Content Hook
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin to using the_content hook to create a list of 5 related posts in the same category
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

add_filter( 'the_content', 'boj_add_related_posts_to_content' );

function boj_add_related_posts_to_content( $content ) {

    /* If not viewing a singular post, just return the content. */
    if ( !is_singular( 'post' ) )
        return $content;

    /* Get the categories of current post. */
    $terms = get_the_terms( get_the_ID(), 'category' );

    /* Loop through the categories and put their IDs in an array. */
    $categories = array();
    foreach ( $terms as $term )
        $categories[] = $term->term_id;

    /* Query posts with the same categories from the database. */
    $loop = new WP_Query(
        array( 
            'cat__in' => $categories, 
            'posts_per_page' => 5, 
            'post__not_in' => array( get_the_ID() ),
            'orderby' => 'rand'
        ) 
    );

    /* Check if any related posts exist. */
    if ( $loop->have_posts() ) {

        /* Open the unordered list. */
        $content .= '<ul class="related-posts">';

        while ( $loop->have_posts() ) {
            $loop->the_post();

            /* Add the post title with a link to the post. */
            $content .= the_title(
                '<li><a href="' . get_permalink() . '">', 
                '</a></li>', 
                false 
            );
        }

        /* Close the unordered list. */
        $content .= '</ul>';

        /* Reset the query. */
        wp_reset_query();
    }

    /* Return the content. */
    return $content;
}

?>