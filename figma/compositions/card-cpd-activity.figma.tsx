/**
 * Figma Code Connect for CPD Activity Card
 * 
 * This file connects the Figma design to the WordPress block pattern implementation.
 * Design: https://www.figma.com/design/4x7b2gxbPg1xC1fQkOIzvP/Medical-Academic-Design-System?node-id=60-302
 * 
 * @fileoverview WordPress Block Pattern implementation using Gutenberg blocks
 * @see patterns/card-cpd-activity.php
 */

import figma from '@figma/code-connect';

/**
 * CPD Activity Card Component
 * 
 * A comprehensive card component for displaying CPD (Continuing Professional Development) activities.
 * 
 * Features:
 * - Hero image with badges overlay
 * - Category link
 * - Activity title
 * - Duration metadata
 * - CTA button
 * 
 * Design tokens used:
 * - Colors: cta-core, brand-core, neutral-700, neutral-200, contrast, base
 * - Typography: font-size-100, 200, 300
 * - Spacing: spacing-5, 10
 * - Border radius: radius-small, medium
 * - Shadow: elevation-1
 */
figma.connect(
  'https://www.figma.com/design/4x7b2gxbPg1xC1fQkOIzvP/Medical-Academic-Design-System?node-id=60-302',
  {
    example: (props) => (
      `<!-- wp:group {"metadata":{"name":"Card - CPD Activity"},"className":"is-style-cpd-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-cpd-card">
	<!-- wp:cover {"url":"${props.imageUrl || "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bec715fa5f1c8401fd1e0ab078ef3f0c658d2434.png"}","dimRatio":0,"minHeight":200,"minHeightUnit":"px","contentPosition":"bottom right","isUserOverlayColor":true,"style":{"border":{"radius":{"topLeft":"var:preset|radius|medium","topRight":"var:preset|radius|medium"}},"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-cover is-position-bottom-right" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10);min-height:200px;border-top-left-radius:var(--wp--preset--radius--medium);border-top-right-radius:var(--wp--preset--radius--medium)">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<img class="wp-block-cover__image-background" alt="" src="${props.imageUrl || "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bec715fa5f1c8401fd1e0ab078ef3f0c658d2434.png"}" data-object-fit="cover"/>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"metadata":{"name":"Badges"},"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"metadata":{"name":"Badge Solid"},"style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"12px","right":"12px"}},"border":{"radius":"var:preset|radius|small"}},"backgroundColor":"cta-core","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-cta-core-background-color has-background" style="border-radius:var(--wp--preset--radius--small);padding-top:3px;padding-right:12px;padding-bottom:3px;padding-left:12px">
					<!-- wp:paragraph {"fontSize":"100","textColor":"base"} -->
					<p class="has-base-color has-text-color has-100-font-size">${props.pointsBadge || `<?php esc_html_e( '2 points', 'ma-theme' ); ?>`}</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->

	<!-- wp:group {"metadata":{"name":"Content"},"className":"is-style-cpd-card-content","layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group is-style-cpd-card-content">
		<!-- wp:group {"metadata":{"name":"Category & Title"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"metadata":{"name":"Category"},"level":6,"textColor":"brand-core","fontSize":"200"} -->
			<h6 class="wp-block-heading has-brand-core-color has-text-color has-200-font-size"><a href="${props.categoryUrl || '#'}">${props.category || `<?php esc_html_e( 'Medical Chronicle', 'ma-theme' ); ?>`}</a></h6>
			<!-- /wp:heading -->

			<!-- wp:heading {"metadata":{"name":"Title"},"level":5,"textColor":"contrast","fontSize":"300"} -->
			<h5 class="wp-block-heading has-contrast-color has-text-color has-300-font-size">${props.title || `<?php esc_html_e( 'Hypertension Management Guidelines', 'ma-theme' ); ?>`}</h5>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"1px"}},"backgroundColor":"neutral-200"} -->
		<hr class="wp-block-separator has-text-color has-neutral-200-color has-alpha-channel-opacity has-neutral-200-background-color is-style-wide" style="border-width:1px"/>
		<!-- /wp:separator -->

		<!-- wp:group {"metadata":{"name":"Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"18px","height":"18px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/icons/icon-clock.svg" alt="" style="width:18px;height:18px"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"textColor":"neutral-700","fontSize":"200"} -->
			<p class="has-neutral-700-color has-text-color has-200-font-size">${props.duration || `<?php esc_html_e( '1h', 'ma-theme' ); ?>`}</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Button container"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"className":"is-style-cta-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cta-outline"><a class="wp-block-button__link wp-element-button" href="${props.ctaUrl || '#'}">${props.ctaText || `<?php esc_html_e( 'View CPD activity', 'ma-theme' ); ?>`}</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->`
    ),
    props: {
      /**
       * Card image URL
       */
      imageUrl: figma.string('Image URL'),
      
      /**
       * Points badge text (e.g., "2 points")
       */
      pointsBadge: figma.string('Badge text'),
      
      /**
       * Category name and link
       */
      category: figma.string('Category text'),
      categoryUrl: figma.string('Category link'),
      
      /**
       * Activity title
       */
      title: figma.string('Title text'),
      
      /**
       * Duration text (e.g., "1h")
       */
      duration: figma.string('Duration text'),
      
      /**
       * CTA button text
       */
      ctaText: figma.string('Button text'),
      ctaUrl: figma.string('Button link'),
      
      /**
       * Component state
       */
      state: figma.enum('State', {
        Default: 'default',
        Hover: 'hover',
      }),
    },
    variant: {
      State: 'Default',
    },
    links: [
      {
        name: 'WordPress Pattern Documentation',
        url: 'https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/',
      },
      {
        name: 'Theme JSON Reference',
        url: 'https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/',
      },
    ],
  }
);

export default figma;
