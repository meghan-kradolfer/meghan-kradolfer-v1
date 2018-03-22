<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_theme_support( 'menus' );
function register_theme_menus() {
    register_nav_menus(
        array(
            'header_menu' => __( 'Header Menu' ),
            'footer_menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );



