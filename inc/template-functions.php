<?php
/**
 * Template functions for Medical Academic Theme
 *
 * @package Medical Academic Theme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get the theme version.
 *
 * @return string
 */
function ma_theme_get_version() {
	return MA_THEME_VERSION;
}

/**
 * Add body classes.
 *
 * @param array $classes Existing classes.
 * @return array
 */
function ma_theme_body_classes( $classes ) {

	// Add theme version class.
	$classes[] = 'ma-theme-version-' . str_replace( '.', '-', ma_theme_get_version() );

	// Add no-js class (removed by JavaScript).
	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', 'ma_theme_body_classes' );

/**
 * Add viewport meta tag for mobile.
 */
function ma_theme_viewport_meta() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}
add_action( 'wp_head', 'ma_theme_viewport_meta', 1 );

/**
 * Add theme support for custom logo.
 */
function ma_theme_custom_logo_setup() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ma_theme_custom_logo_setup' );

/**
 * Add editor color palette support.
 */
function ma_theme_editor_color_palette() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'ma-theme' ),
				'slug'  => 'primary',
				'color' => '#0073aa',
			),
			array(
				'name'  => __( 'Secondary', 'ma-theme' ),
				'slug'  => 'secondary',
				'color' => '#005177',
			),
			array(
				'name'  => __( 'Background', 'ma-theme' ),
				'slug'  => 'background',
				'color' => '#ffffff',
			),
			array(
				'name'  => __( 'Foreground', 'ma-theme' ),
				'slug'  => 'foreground',
				'color' => '#1a1a1a',
			),
		)
	);
}
add_action( 'after_setup_theme', 'ma_theme_editor_color_palette' );

/**
 * Custom excerpt length for different post types.
 *
 * @param int $length Current excerpt length.
 * @return int
 */
function ma_theme_custom_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	if ( is_home() || is_archive() ) {
		return 30;
	}

	return $length;
}
add_filter( 'excerpt_length', 'ma_theme_custom_excerpt_length' );

/**
 * Remove unnecessary generator meta tags.
 */
function ma_theme_remove_version() {
	return '';
}
add_filter( 'the_generator', 'ma_theme_remove_version' );

/**
 * Add security headers.
 */
function ma_theme_security_headers() {
	if ( ! is_admin() ) {
		header( 'X-Content-Type-Options: nosniff' );
		header( 'X-Frame-Options: SAMEORIGIN' );
		header( 'X-XSS-Protection: 1; mode=block' );
	}
}
add_action( 'send_headers', 'ma_theme_security_headers' );