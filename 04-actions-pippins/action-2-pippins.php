<?php
/*
Plugin Name: 4-Actions Pippins 2
Plugin URI: https://github.com/leokoo/learning-plugin-development
Description: Following Pippin's Lessons on his site
Author: Leo Koo
Version: 1.0
Author URI: https://www.wpstarters.com
*/

function pd101_register_book_post_type() {
 
	$labels = array(
		'name'               => 'Books',
		'singular_name'      => 'Book',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Book',
		'edit_item'          => 'Edit Book',
		'new_item'           => 'New Book',
		'all_items'          => 'All Books',
		'view_item'          => 'View Book',
		'search_items'       => 'Search Books',
		'not_found'          =>  'No books found',
		'not_found_in_trash' => 'No books found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Books'
	);
 
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
 
	register_post_type( 'book', $args );
 
}
add_action( 'init', 'pd101_register_book_post_type' );

?>