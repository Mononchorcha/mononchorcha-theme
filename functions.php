<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Load Theme Styles
 */
function mononchorcha_enqueue_styles() {
    wp_enqueue_style(
        'mononchorcha-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'mononchorcha_enqueue_styles' );

/**
 * Theme Setup
 */
function mononchorcha_theme_setup() {

    // Title Tag
    add_theme_support( 'title-tag' );

    // Featured Image
    add_theme_support( 'post-thumbnails' );

    // Custom Logo
    add_theme_support( 'custom-logo' );

    // HTML5 Support
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action( 'after_setup_theme', 'mononchorcha_theme_setup' );

/**
 * Register Navigation Menu
 */
function mononchorcha_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mononchorcha' ),
        )
    );
}
add_action( 'after_setup_theme', 'mononchorcha_register_menus' );

/**
 * Register Sidebar
 */
function mononchorcha_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'Main Sidebar', 'mononchorcha' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here.', 'mononchorcha' ),
            'before_widget' => '<section class="widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'mononchorcha_widgets_init' );
