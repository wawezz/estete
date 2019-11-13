<?php
function custom_theme_assets() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

function add_menu_support() {
    register_nav_menus([
		'header_menu' => __('Header menu', 'estete-theme')
	]);
}

function property_custom_post_type() {
	$labels = array(
		'name'                => __('Properties', 'estete-theme'),
		'singular_name'       => __('Property', 'estete-theme'),
		'menu_name'           => __('Properties', 'estete-theme'),
		'parent_item_colon'   => __('Parent Property', 'estete-theme'),
		'all_items'           => __('All Properties', 'estete-theme'),
		'view_item'           => __('View Property', 'estete-theme'),
		'add_new_item'        => __('Add New Property', 'estete-theme'),
		'add_new'             => __('Add New', 'estete-theme'),
		'edit_item'           => __('Edit Property', 'estete-theme'),
		'update_item'         => __('Update Property', 'estete-theme'),
		'search_items'        => __('Search Property', 'estete-theme'),
		'not_found'           => __('Not Found', 'estete-theme'),
		'not_found_in_trash'  => __('Not found in Trash', 'estete-theme')
	);
	$args = array(
		'label'               => __('properties', 'estete-theme'),
		'description'         => __('Property records', 'estete-theme'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'author', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,
		'taxonomies' 	      => array('cities'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post'
);
	register_post_type( 'properties', $args );
}

function cities_properties_custom_taxonomy() {
 
    $labels = array(
      'name' => __('Cities', 'estete-theme'),
      'singular_name' => __('City', 'estete-theme'),
      'search_items' =>  __('Search Cities', 'estete-theme'),
      'all_items' => __('All Cities', 'estete-theme'),
      'parent_item' => __( 'Parent City' ),
      'parent_item_colon' => __( 'Parent City:' ),
      'edit_item' => __( 'Edit City' ), 
      'update_item' => __( 'Update City' ),
      'add_new_item' => __( 'Add New City' ),
      'new_item_name' => __( 'New City Name' ),
      'menu_name' => __( 'Cities' ),
    ); 	
   
    register_taxonomy('cities',array('properties'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'type' ),
    ));
}

function after_setup() {
    add_menu_support();
}
function add_custom_post_types_and_taxonomies() {
    property_custom_post_type();
    cities_properties_custom_taxonomy();
}

function custom_excerpt_length( $length = 20 ) {
    return $length;
}

add_action('init', 'add_custom_post_types_and_taxonomies');
add_action('wp_enqueue_scripts', 'custom_theme_assets');
add_action('after_setup_theme', 'after_setup');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );