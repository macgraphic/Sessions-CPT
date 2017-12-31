<?php
/*
Plugin Name: Sessions CPT
Plugin URI: https://github.com/macgraphic/Sessions-CPT
Description: Create the Sessions CPT, and add it to the Rest API.
Version: 1.1.6
Author: Mark Smallman
Author URI: https://macgraphic.co.uk
License: GPLv2
*/

// Register Sessions Custom Post Type
function sessions() {
	$labels = array(
	'name'                  => _x( 'Session', 'Post Type General Name', 'text_domain' ),
	'singular_name'         => _x( 'Session', 'Post Type Singular Name', 'text_domain' ),
	'menu_name'             => __( 'Sessions', 'text_domain' ),
	'name_admin_bar'        => __( 'Session', 'text_domain' ),
	'archives'              => __( 'Sessions', 'text_domain' ),
	'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	'all_items'             => __( 'All Sessions', 'text_domain' ),
	'add_new_item'          => __( 'Add New Session', 'text_domain' ),
	'add_new'               => __( 'Add New', 'text_domain' ),
	'new_item'              => __( 'New Session', 'text_domain' ),
	'edit_item'             => __( 'Edit Session', 'text_domain' ),
	'update_item'           => __( 'Update Session', 'text_domain' ),
	'view_item'             => __( 'View Session', 'text_domain' ),
	'search_items'          => __( 'Search Sessions', 'text_domain' ),
	'not_found'             => __( 'Not found', 'text_domain' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	'featured_image'        => __( 'Featured Image', 'text_domain' ),
	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	'items_list'            => __( 'Items list', 'text_domain' ),
	'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
	'label'                 => __( 'Session', 'text_domain' ),
	'description'           => __( 'Recent Sessions', 'text_domain' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'editor', 'revisions' ),
	'hierarchical'          => true,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_icon'             => 'dashicons-microphone',
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => 'sessions',
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'post',
	'show_in_rest'			=> true,
	);
	register_post_type( 'sessions', $args );

}
			add_action( 'init', 'sessions', 0 );


function bdng_change_sessions_title( $title ) {
	$screen = get_current_screen();
	if ( 'sessions' == $screen->post_type ) {
		  $title = 'Session Title';
	}
	return $title;
}
			add_filter( 'enter_title_here', 'bdng_change_sessions_title' );
// END Sessions CPT
