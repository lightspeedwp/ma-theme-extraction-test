<?php
/**
 * Block patterns registration for Medical Academic Theme
 *
 * @package Medical Academic Theme
 * @since 1.0.0
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register hero section pattern.
 */
function ma_theme_register_hero_pattern() {
	register_block_pattern(
		'ma-theme/hero-section',
		array(
			'title'       => __( 'Hero Section', 'ma-theme' ),
			'description' => __( 'A large hero section with heading, text, and button.', 'ma-theme' ),
			'categories'  => array( 'ma-theme-hero' ),
			'keywords'    => array( 'hero', 'banner', 'header' ),
			'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size">Welcome to Medical Academic Theme</h1>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">A modern block theme for medical publishing.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button">Learn More</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'ma_theme_register_hero_pattern' );

/**
 * Register call to action pattern.
 */
function ma_theme_register_cta_pattern() {
	register_block_pattern(
		'ma-theme/call-to-action',
		array(
			'title'       => __( 'Call to Action', 'ma-theme' ),
			'description' => __( 'A call to action section with heading and button.', 'ma-theme' ),
			'categories'  => array( 'ma-theme-cta' ),
			'keywords'    => array( 'cta', 'call to action', 'button' ),
			'content'     => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"width":"1px","style":"solid"}},"borderColor":"neutral","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color has-neutral-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Ready to get started?</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Join our community of medical professionals today.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Sign Up</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'ma_theme_register_cta_pattern' );

/**
 * Register team section pattern.
 */
function ma_theme_register_team_pattern() {
	register_block_pattern(
		'ma-theme/team-section',
		array(
			'title'       => __( 'Team Section', 'ma-theme' ),
			'description' => __( 'A team section with multiple team member cards.', 'ma-theme' ),
			'categories'  => array( 'ma-theme-team' ),
			'keywords'    => array( 'team', 'members', 'staff' ),
			'content'     => '<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">Our Team</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Meet the experts behind Medical Academic Theme.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="" style="border-radius:50%;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center">Dr. Jane Doe</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center","textColor":"neutral"} -->
			<p class="has-text-align-center has-neutral-color has-text-color">Chief Editor</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="" style="border-radius:50%;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center">Dr. John Smith</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center","textColor":"neutral"} -->
			<p class="has-text-align-center has-neutral-color has-text-color">Senior Researcher</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img alt="" style="border-radius:50%;aspect-ratio:1;object-fit:cover"/></figure>
			<!-- /wp:image -->
			
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center">Sarah Jones</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph {"align":"center","textColor":"neutral"} -->
			<p class="has-text-align-center has-neutral-color has-text-color">Managing Editor</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->',
		)
	);
}
add_action( 'init', 'ma_theme_register_team_pattern' );