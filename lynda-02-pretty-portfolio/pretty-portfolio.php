<?php

/*
 * Plugin Name: Pretty Portfolio
 * Plugin URI: 
 * Description: This plugin displays a portfolio.
 * Version: 1.0.0
 * Author: Carrie Dils
 * Author URI: http://www.carriedils.com
 * License: GPL v2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: pretty-portfolio
 * Domain Path: 
 */

// Exit if accessed directly.
if( !defined( 'ABSPATH' ) ) exit;

/**
 * Register Portfolio post type.
 *  
 * 
 */
function pp_register_post_type() {

    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post type general name', 'pretty-portfolio' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post type singular name', 'pretty-portfolio' ),
        'menu_name'             => _x( 'Portfolio Items', 'Admin Menu text', 'pretty-portfolio' ),
        'name_admin_bar'        => _x( 'Portfolio Items', 'Add New on Toolbar', 'pretty-portfolio' ),
	);

    $args = array(
	    'labels'             => $labels,
	    'public'             => true,
	    'publicly_queryable' => true,
	    'show_ui'            => true,
	    'show_in_menu'       => true,
	    'query_var'          => true,
	    'rewrite'            => array( 'slug' => 'portfolio' ),
	    'capability_type'    => 'post',
	    'has_archive'        => true,
	    'hierarchical'       => false,
	    'menu_position'      => null,
	    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
	    'menu_icon'			 => 'dashicons-screenoptions',
    );

	register_post_type( 'pp_portfolio', $args );

}
add_action( 'init', 'pp_register_post_type' );

/**
 * Register Item Type taxonomy.
 * 
 */
function pp_create_taxonomy() {

    $labels = array(
        'name'              => _x( 'Item Types', 'taxonomy general name', 'pretty-portfolio' ),
        'singular_name'     => _x( 'Item Type', 'taxonomy singular name', 'pretty-portfolio' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'item-type' ),
    );

	register_taxonomy( 'pp_item_type', 'pp_portfolio', $args );

}
add_action( 'init', 'pp_create_taxonomy' );
