<?php
/**
 * Block styles registration for Medical Academic Theme
 *
 * @package Medical Academic Theme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register custom block styles.
 */
function ma_theme_register_block_styles() {
	// Button styles.
	register_block_style(
		'core/button',
		array(
			'name'  => 'outline',
			'label' => __( 'Outline', 'ma-theme' ),
		)
	);

	register_block_style(
		'core/button',
		array(
			'name'  => 'ghost',
			'label' => __( 'Ghost', 'ma-theme' ),
		)
	);

	// Quote styles.
	register_block_style(
		'core/quote',
		array(
			'name'  => 'modern',
			'label' => __( 'Modern', 'ma-theme' ),
		)
	);

	// Group styles.
	register_block_style(
		'core/group',
		array(
			'name'  => 'shadow',
			'label' => __( 'Shadow', 'ma-theme' ),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'border',
			'label' => __( 'Border', 'ma-theme' ),
		)
	);

	// Image styles.
	register_block_style(
		'core/image',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'ma-theme' ),
		)
	);

	// Post title styles.
	register_block_style(
		'core/post-title',
		array(
			'name'  => 'gradient',
			'label' => __( 'Gradient', 'ma-theme' ),
		)
	);
}
add_action( 'init', 'ma_theme_register_block_styles' );