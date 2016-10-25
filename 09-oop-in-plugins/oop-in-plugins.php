<?php
/*
Plugin Name: 9-OOP in WordPress Plugins
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: We're learning how to implement simple PHP based OOP in the WordPress plugin without things like inheritance
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

Class PD_101 {

	function __construct() {
	//	$this->load();
	}

	function load() {
		add_action( 'admin_notices', array( $this, 'notice' ) );
	}

	function notice() {
		echo '<div><p class="updated">This is my admin notice! My plugin works!</p></div>';
	}
}

$pd_101 = new PD_101;
$pd_101->load();

?>