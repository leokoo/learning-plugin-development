<?php
/*
Plugin Name: PWPD 09 - Calling an action and a filter hook on a method in a class
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on calling actions and filters in a class. And the difference compared to normal actions and filters
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

class BOJ_My_Plugin_Loader {

    /* Constructor method for the class. */
    function BOJ_My_Plugin_Loader() {

        /* Add the 'singular_check' method to the 'template_redirect' hook. */
        add_action( 'template_redirect', array( &$this, 'singular_check' ) );
    }

    /* Method used as an action. */
    function singular_check() {

        /* If viewing a singular post, filter the content. */
        if ( is_singular() )
            add_filter( 'the_content', array( &$this, 'content' ) );
    }

    /* Method used as a filter. */
    function content( $content ) {

        /* Get the date the post was last modified. */
        $date = get_the_modified_time( get_option( 'date_format' ) );

        /* Append the post modified date to the content. */
        $content .= '<p>Post last modified: ' . $date . '</p>';

        /* Return the content. */
        return $content;
    }
}

$boj_myplugin_loader = new BOJ_My_Plugin_Loader();

?>