<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles.
 */
function firstbyte_scripts() {

    wp_enqueue_style( 'firstbyte-style', get_template_directory_uri() . '/assets/styles/main.css', array(), _S_VERSION );
    wp_style_add_data( 'firstbyte-style', 'rtl', 'replace' );

    wp_enqueue_script( 'firstbyte-navigation', get_template_directory_uri() . '/assets/scripts/main.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'firstbyte_scripts' );
