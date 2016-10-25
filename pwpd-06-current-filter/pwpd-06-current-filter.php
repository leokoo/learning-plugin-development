<?php
/*
Plugin Name: PWPD 06 - Current Filter
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin to filter both the_content and the_title of certain words using the current_filter function
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

add_filter( 'the_content', 'boj_replace_unwanted_words' );
add_filter( 'the_title', 'boj_replace_unwanted_words' );

function boj_replace_unwanted_words( $text ) {

    /* If the_content is the filter hook, set its unwanted words. */
    if ( 'the_content' == current_filter() )
        $words = array( 'profanity', 'crap', 'devil' );

    /* If the_title is the filter hook, set its unwanted words. */
    elseif ( 'the_title' == current_filter() )
        $words = array( 'profanity', 'curse' );

    /* Replace unwanted words with "Whoops!" */
    $text = str_replace( $words, 'Whoops!', $text );

    /* Return the formatted text. */
    return $text;
}

?>