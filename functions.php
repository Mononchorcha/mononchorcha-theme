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
