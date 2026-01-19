<?php
/**
 * Title: Sidebar
 * Slug: ma-theme/sidebar
 * Description: A sidebar with search, recent posts, categories, tags, and archives widgets.
 * Categories: ma-theme-components
 * Keywords: sidebar, widgets, search, categories, tags, archives
 * Block Types: core/template-part/sidebar
 * Viewport Width: 400
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group" role="complementary" aria-label="<?php esc_attr_e( 'Blog sidebar', 'ma-theme' ); ?>">
	<!-- wp:heading {"level":2,"className":"screen-reader-text"} -->
	<h2 class="wp-block-heading screen-reader-text"><?php esc_html_e( 'Sidebar', 'ma-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'ma-theme' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search…', 'ma-theme' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'ma-theme' ); ?>"} /-->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Recent Posts', 'ma-theme' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true} /-->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'ma-theme' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:categories {"showPostCounts":true} /-->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Tags', 'ma-theme' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:tag-cloud {"numberOfTags":20} /-->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Archives', 'ma-theme' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:archives {"showPostCounts":true} /-->
</div>
<!-- /wp:group -->
