<?php
/**
 * Portfolio Custom Post Type
 *
 * @package kllr
 */

function kllr_custom_post_types() {
 	$labels = array(
 		'name'               => esc_html__( 'Portfolio' ),
 		'singular_name'      => esc_html__( 'Portfolio' ),
 		'menu_name'          => esc_html__( 'Portfolio' ),
 		'name_admin_bar'     => esc_html__( 'Portfolio' ),
 		'add_new'            => esc_html__( 'Add New' ),
 		'add_new_item'       => esc_html__( 'Add New Portfolio' ),
 		'new_item'           => esc_html__( 'New Portfolio' ),
 		'edit_item'          => esc_html__( 'Edit Portfolio' ),
 		'view_item'          => esc_html__( 'View Portfolio' ),
 		'all_items'          => esc_html__( 'All Portfolio Items' ),
 		'search_items'       => esc_html__( 'Search Portfolio' ),
 		'not_found'          => esc_html__( 'No portfolio items found.' ),
 		'not_found_in_trash' => esc_html__( 'No portfolio items found in Trash.' )
 	);

 	$args = array(
 		'public'      		=> true,
 		'labels'			=> $labels,
		'has_archive' 	    => false,
		'hierarchical'		=> false,
		'show_in_admin_bar' => true,
		'menu_icon'   	    => esc_html__( 'dashicons-format-gallery' ),
		'supports' 		    => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'        => array( 'category' )
 	);
  register_post_type( 'portfolio', $args );
 }
 add_action( 'init', 'kllr_custom_post_types' );