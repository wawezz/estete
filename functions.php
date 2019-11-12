<?php

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

add_action('after_setup_theme', 'after_setup');

?>