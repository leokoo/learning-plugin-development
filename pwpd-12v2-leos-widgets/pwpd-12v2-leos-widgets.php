<?php
/*
Plugin Name: PWPD 12v2 - Creating Leo's custom widget by rewriting the plugin
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on creating a custom widget on WordPress
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

/**
 * Adds Leos_Widget widget.
 */
class Leos_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        // actual widget processes
        public function __construct() {
        parent::__construct(
            'leos_widget', // Base ID
            'Leos_Widget', // Name
            array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
        );
    }

    }
    add_action( 'widgets_init', function() { register_widget( 'Leos_Widget' ); } );
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        // outputs the content of the widget

    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        // outputs the options form in the admin

    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        // processes widget options to be saved

    }
} // class Leos_Widget

?>