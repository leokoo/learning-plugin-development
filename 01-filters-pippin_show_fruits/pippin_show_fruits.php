<?php
/*
 * Plugin Name: 01-Pippin Show Fruits
 * Plugin URI: https://github.com/leokoo/learning-plugin-development
 * Description: Learning plugin development Pippin's plugin development 101
 * Version: 1.0
 * Author: Leo Koo
 * Author URI: http://www.wpstarters.com
 * License: GPL2
 *
 */

function pippin_show_fruits() {
	$fruits = array(
		'apples',
		'oranges',
		'kumkwats',
		'dragon fruit',
		'peaches',
		'durians'
	);
	$list = '<ul>';
 
	if(has_filter('pippin_add_fruits')) {
		$fruits = apply_filters('pippin_add_fruits', $fruits);
	}
 
	foreach($fruits as $fruit) :
		$list .= '<li>' . $fruit . '</li>';
	endforeach;
 
	$list .= '</ul>';
 
	return $list;
}

function pippin_add_extra_fruits($fruits) {
	// the $fruits parameter is an array of all fruits from the pippin_show_fruits() function
 
	$extra_fruits = array(
		'plums',
		'kiwis',
		'tangerines',
		'pepino melons'
	);
 
	// combine the two arrays
	$fruits = array_merge($extra_fruits, $fruits);
 
	return $fruits;
}
add_filter('pippin_add_fruits', 'pippin_add_extra_fruits');

?>