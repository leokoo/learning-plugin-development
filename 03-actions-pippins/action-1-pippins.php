<?php
/*
 * Plugin Name: 03-Action 1 Pippins
 * Plugin URI: https://github.com/leokoo/learning-plugin-development
 * Description: Learning plugin development Pippin's plugin development 101
 * Version: 1.0
 * Author: Leo Koo
 * Author URI: http://www.wpstarters.com
 * License: GPL2
 *
 */

/* Here's an example of a function with two hooks. The before output hook and the after output hook*/
function pippin_sample_output_function() {
	do_action('pippin_before_output');
	echo '<div id="content">This is just sample content</div>';
	do_action('pippin_after_output');
}

/* the hooked functions then adds action to the respective hooks, pippin_before_output and pippin_after_output */
function pippin_sample_hooked_function() {
	echo '<div id="before-content">This is outputted by the hook, before the original content.</div>';
}
add_action('pippin_before_output', 'pippin_sample_hooked_function');

function pippin_another_sample_hooked_function() {
	echo '<div id="after-content">This is outputted by the hook, after the original content.</div>';
}
add_action('pippin_after_output', 'pippin_another_sample_hooked_function');