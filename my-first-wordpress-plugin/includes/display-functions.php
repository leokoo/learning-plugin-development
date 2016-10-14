<?php

/*our display functions for outputting information*/

function mfwp_add_content($content) {

	global $mfwp_options;

	if(is_singular() && $mfwp_options['enable'] == true) {
		$extra_content = '<p class="twitter-message ' . $mfwp_options['theme'] . '">Follow me on <a href="' . $mfwp_options['twitter_url'] . '">Twitter</a></p>';
		$content .= $extra_content;
	}
	return $content;
}
add_filter('the_content', 'mfwp_add_content');