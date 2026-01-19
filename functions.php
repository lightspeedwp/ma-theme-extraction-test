<?php
/**
 * Functions and definitions for Medical Academic Theme
 *
 * @package Medical Academic Theme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version.
 */
define( 'MA_THEME_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function ma_theme_setup() {
	// Make theme available for translation.
	load_theme_textdomain( 'ma-theme', get_template_directory() . '/languages' );

	// Add theme support for various features.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo' );

	// Add editor styles.
	add_editor_style( 'build/css/editor-style.css' );

	// Set content width.
	$GLOBALS['content_width'] = apply_filters( 'ma_theme_content_width', 720 );
}
add_action( 'after_setup_theme', 'ma_theme_setup' );

/**
 * Enqueue theme assets.
 */
function ma_theme_enqueue_assets() {
	// Main stylesheet.
	$asset_file = get_theme_file_path( 'build/css/style.asset.php' );
	if ( file_exists( $asset_file ) ) {
		$asset = include $asset_file;
		wp_enqueue_style(
			'ma-theme-style',
			get_theme_file_uri( 'build/css/style.css' ),
			$asset['dependencies'] ?? array(),
			$asset['version'] ?? MA_THEME_VERSION
		);
	}

	// Main JavaScript.
	$js_asset_file = get_theme_file_path( 'build/js/theme.asset.php' );
	if ( file_exists( $js_asset_file ) ) {
		$js_asset = include $js_asset_file;
		wp_enqueue_script(
			'ma-theme-script',
			get_theme_file_uri( 'build/js/theme.js' ),
			$js_asset['dependencies'] ?? array(),
			$js_asset['version'] ?? MA_THEME_VERSION,
			true
		);

		// Set script translations.
		wp_set_script_translations(
			'ma-theme-script',
			'ma-theme',
			get_theme_file_path( 'languages' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'ma_theme_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function ma_theme_enqueue_editor_assets() {
	$editor_asset_file = get_theme_file_path( 'build/css/editor-style.asset.php' );
	if ( file_exists( $editor_asset_file ) ) {
		$editor_asset = include $editor_asset_file;
		wp_enqueue_style(
			'ma-theme-editor-style',
			get_theme_file_uri( 'build/css/editor-style.css' ),
			$editor_asset['dependencies'] ?? array(),
			$editor_asset['version'] ?? MA_THEME_VERSION
		);
	}

	// Enqueue editor JavaScript.
	$editor_js_asset_file = get_theme_file_path( 'build/js/editor.asset.php' );
	if ( file_exists( $editor_js_asset_file ) ) {
		$editor_js_asset = include $editor_js_asset_file;
		wp_enqueue_script(
			'ma-theme-editor-script',
			get_theme_file_uri( 'build/js/editor.js' ),
			$editor_js_asset['dependencies'] ?? array(),
			$editor_js_asset['version'] ?? MA_THEME_VERSION,
			true
		);

		// Set script translations for editor.
		wp_set_script_translations(
			'ma-theme-editor-script',
			'ma-theme',
			get_theme_file_path( 'languages' )
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'ma_theme_enqueue_editor_assets' );

/**
 * Register block pattern categories.
 */
function ma_theme_register_pattern_categories() {
	$categories = array(
		'ma-theme-hero'    => array( 'label' => __( 'Medical Academic Theme Hero', 'ma-theme' ) ),
		'ma-theme-about'   => array( 'label' => __( 'Medical Academic Theme About', 'ma-theme' ) ),
		'ma-theme-contact' => array( 'label' => __( 'Medical Academic Theme Contact', 'ma-theme' ) ),
		'ma-theme-cta'     => array( 'label' => __( 'Medical Academic Theme Call to Action', 'ma-theme' ) ),
		'ma-theme-gallery' => array( 'label' => __( 'Medical Academic Theme Gallery', 'ma-theme' ) ),
		'ma-theme-team'    => array( 'label' => __( 'Medical Academic Theme Team', 'ma-theme' ) ),
	);

	foreach ( $categories as $slug => $args ) {
		register_block_pattern_category( $slug, $args );
	}
}
add_action( 'init', 'ma_theme_register_pattern_categories' );

/**
 * Load theme includes.
 */
$theme_includes = array(
	'inc/block-patterns.php',
	'inc/block-styles.php',
	'inc/template-functions.php',
);

foreach ( $theme_includes as $file ) {
	$filepath = get_theme_file_path( $file );
	if ( file_exists( $filepath ) ) {
		require_once $filepath;
	}
}

/**
 * Add custom image sizes.
 */
function ma_theme_add_image_sizes() {
	add_image_size( 'ma-theme-featured', 1200, 630, true );
	add_image_size( 'ma-theme-thumbnail', 300, 300, true );
	add_image_size( 'ma-theme-gallery', 600, 600, true );
}
add_action( 'after_setup_theme', 'ma_theme_add_image_sizes' );

/**
 * Modify excerpt length.
 */
function ma_theme_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'ma_theme_excerpt_length' );

/**
 * Modify excerpt more.
 */
function ma_theme_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'ma_theme_excerpt_more' );