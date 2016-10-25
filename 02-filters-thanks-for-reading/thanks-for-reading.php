<?php
/*
 * Plugin Name: 2-Thanks for Reading
 * Plugin URI: https://github.com/leokoo/learning-plugin-development
 * Description: Learning plugin development from hardcoreWP as part of the Pippin's plugin development 101
 * Version: 1.0
 * Author: Leo Koo
 * Author URI: http://www.wpstarters.com
 * License: GPL2
 *
 */



 function tfr_the_content( $content ) {
   return $content . '<p>Thanks for Reading my writing</p>';
 }
 add_filter( 'the_content', 'tfr_the_content' );

?>