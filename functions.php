<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function mononchorcha_enqueue_styles() {
    wp_enqueue_style(
        'mononchorcha-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}

add_action( 'wp_enqueue_scripts', 'mononchorcha_enqueue_styles' );
function mononchorcha_theme_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo' );

}
add_action( 'after_setup_theme', 'mononchorcha_theme_setup' );
functions.php
// Register Navigation Menu
function mononchorcha_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'mononchorcha'),
        )
    );
}
add_action('after_setup_theme', 'mononchorcha_register_menus');
// Register Navigation Menu
function mononchorcha_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mononchorcha' ),
        )
    );
}
add_action( 'after_setup_theme', 'mononchorcha_register_menus' );
function mononchorcha_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'mononchorcha' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'mononchorcha' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'mononchorcha_widgets_init' );
