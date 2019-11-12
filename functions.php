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

function add_custom_post_types()
{
    register_post_type('property',
        array(
            'labels'      => array(
                'name'          => __('Properties', 'estete-theme'),
                'singular_name' => __('Property', 'estete-theme'),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array( 'slug' => 'properties' ),
            'taxonomies'  => array('city'),
        )
    );
}

add_action('init', 'add_custom_post_types');
add_action('wp_enqueue_scripts', 'custom_theme_assets');
add_action('after_setup_theme', 'after_setup');