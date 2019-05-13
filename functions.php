<?php
/**
 * Sinatra Child Theme functions.
 *
 * @since 1.0.0
 */

/**
 * Define Constants.
 */
define( 'SINATRA_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue and register scripts and styles.
 *
 * @since 1.0.0
 */
function sinatra_child_enqueue_styles() {

	wp_enqueue_style( 
		'sinatra-child-styles',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'sinatra-styles' ),
		SINATRA_CHILD_THEME_VERSION,
		'all'
	);
}

add_action( 'wp_enqueue_scripts', 'sinatra_child_enqueue_styles', 15 );
