<?php
/*
Plugin Name: Shortcode 1
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Lessons in shortcode development
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

/*
https://codex.wordpress.org/Shortcode_API
// [bartag foo="foo-value"]
function bartag_func( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return "foo = {$a['foo']}";
}
add_shortcode( 'bartag', 'bartag_func' );
*/
function pd101_message_shortcode( $atts ) {
	$a = shortcode_atts (
		array(
			'color' => 'red',
			'text' => 'Text Message'
			),
		$atts
		);

		return '<div class="message ' . esc_attr( $a['color'] ) . '">' . esc_html( $a['text'] ) . '</div>';
}
add_shortcode( 'message', 'pd101_message_shortcode' ) ;
?>