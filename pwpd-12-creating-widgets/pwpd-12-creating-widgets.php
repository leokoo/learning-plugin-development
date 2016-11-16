<?php
/*
Plugin Name: PWPD 12 - Creating a custom widget
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: A simple plugin on creating a custom widget on WordPress
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
License: GPLv2
*/

 //register our widget
function boj_widgetexample_register_widgets() {
    register_widget( 'boj_widgetexample_widget_my_info' );
}
// use widgets_init action hook to execute custom function
add_action( 'widgets_init', 'boj_widgetexample_register_widgets' );

//boj_widget_my_info class
class boj_widgetexample_widget_my_info extends WP_Widget {

    //process the new widget
    function boj_widgetexample_widget_my_info() {
        $widget_ops = array( 
			'classname' => 'boj_widgetexample_widget_class', 
			'description' => 'Display a user\'s favorite movie and song.' 
			); 
        $this->WP_Widget( 'boj_widgetexample_widget_my_info', 'My Info Widget', $widget_ops );
    }

	    //display the widget
    function widget($args, $instance) {
        extract($args);
 
        echo $before_widget;
        $title = apply_filters( 'widget_title', $instance['title'] );
        $movie = empty( $instance['movie'] ) ? '&nbsp;' : $instance['movie'];
        $song = empty( $instance['song'] ) ? '&nbsp;' : $instance['song']; 
 
        if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
        echo '<p>Fav Movie: ' . $movie . '</p>';
        echo '<p>Fav Song: ' . $song . '</p>';
        echo $after_widget;
    }
 
     //build the widget settings form
    function form($instance) {
        $defaults = array( 'title' => 'My Info', 'movie' => '', 'song' => '' ); 
        $instance = wp_parse_args( (array) $instance, $defaults );
        $title = $instance['title'];
        $movie = $instance['movie'];
        $song = $instance['song'];
        ?>
            <p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'title' ); ?>"  type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
            <p>Favorite Movie: <input class="widefat" name="<?php echo $this->get_field_name( 'movie' ); ?>"  type="text" value="<?php echo esc_attr( $movie ); ?>" /></p>
            <p>Favorite Song: <textarea class="widefat" name="<?php echo $this->get_field_name( 'song' ); ?>" / ><?php echo esc_attr( $song ); ?></textarea></p>
        <?php
    }
 
    //save the widget settings
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['movie'] = strip_tags( $new_instance['movie'] );
        $instance['song'] = strip_tags( $new_instance['song'] );
 
        return $instance;
    }
}

?>