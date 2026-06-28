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
