<?php
function custom_theme_assets() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

function add_menu_support() {
    register_nav_menus([
		'header_menu' => 'Header menu',
        'footer_menu' => 'Footer menu',
        'social_menu' => 'Social menu'
	]);
}

function after_setup() {
    add_menu_support();
}

function property_custom_post_type() {
	$labels = array(
		'name'                => __('Properties', 'estete-theme'),
		'singular_name'       => __('Property', 'estete-theme'),
		'menu_name'           => __( 'Properties', 'estete-theme'),
		'parent_item_colon'   => __( 'Parent Property', 'estete-theme'),
		'all_items'           => __( 'All Properties', 'estete-theme'),
		'view_item'           => __( 'View Property', 'estete-theme'),
		'add_new_item'        => __( 'Add New Property', 'estete-theme'),
		'add_new'             => __( 'Add New', 'estete-theme'),
		'edit_item'           => __( 'Edit Property', 'estete-theme'),
		'update_item'         => __( 'Update Property', 'estete-theme'),
		'search_items'        => __( 'Search Property', 'estete-theme'),
		'not_found'           => __( 'Not Found', 'estete-theme'),
		'not_found_in_trash'  => __( 'Not found in Trash', 'estete-theme')
	);
	$args = array(
		'label'               => __( 'properties', 'estete-theme'),
		'description'         => __( 'Property records', 'estete-theme'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'revisions', 'custom-fields'),
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
		'taxonomies' 	      => array('city'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post'
);
	register_post_type( 'property', $args );
}

function add_custom_post_types()
{
    property_custom_post_type();
}

add_action('init', 'add_custom_post_types');
add_action('wp_enqueue_scripts', 'custom_theme_assets');
add_action('after_setup_theme', 'after_setup');