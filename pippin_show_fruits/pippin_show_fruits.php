<?php
/*
 * Plugin Name: Pippin Show Fruits
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
 
	foreach($fruits as $fruit) :
		$list .= '<li>' . $fruit . '</li>';
	endforeach;
 
	$list .= '</ul>';
 
	return $list;
}
 
echo pippin_show_fruits();

?>