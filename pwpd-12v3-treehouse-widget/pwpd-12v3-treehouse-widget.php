<?php
/*
Plugin Name: PWPD 12v3 - Studying the Treehouse Widget
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on creating a custom widget on WordPress
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

class Wptreehouse_Badges_Widget extends WP_Widget {

    function wptreehouse_badges_widget() {
        // Instantiate the parent object
        parent::__construct( false, 'Official Treehouse Badges Plugin' );
    }

    function widget( $args, $instance ) {
        // Widget output

        extract( $args );
        $title = apply_filters( 'widget_title' , $instance['title'] );
        $num_badges = $instance['num_badges'];
        $display_tooltip = $instance['display_tooltip'];

        $options = get_option( 'wptreehouse_badges' );
        $wptreehouse_profile = $options['wptreehouse_profile'];

        require( 'inc/front-end.php' );

    }

    function update( $new_instance, $old_instance ) {
        // Save widget options
        
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['num_badges'] = strip_tags($new_instance['num_badges']);
        $instance['display_tooltip'] = strip_tags($new_instance['display_tooltip']);
        
        return $instance;
    }

    function form( $instance ) {
        // Output admin widget options form

        $title = esc_attr($instance['title']);
        $num_badges = esc_attr($instance['num_badges']);
        $display_tooltip = esc_attr($instance['display_tooltip']);

        $options = get_option( 'wptreehouse_badges' );
        $wptreehouse_profile = $options['wptreehouse_profile'];

        require( 'inc/widget-fields.php' );

    }
}

function wptreehouse_badges_register_widgets() {
    register_widget( 'Wptreehouse_Badges_Widget' );
}

add_action( 'widgets_init', 'wptreehouse_badges_register_widgets' );

?>