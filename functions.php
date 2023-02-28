<?php
/**
 * Social Gorillas Theme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Social Gorillas
 * @since 1.23.0
 */

/**
 * Define Constants
 */
define( 'SOCIAL_GORILLAS_THEME_VERSION', '1.23.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'social-gorillas-theme-css', get_stylesheet_directory_uri() . '/style.css', 
        [
            'hello-elementor-theme-style',
        ],
        '1.0.0'
    );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 20 );