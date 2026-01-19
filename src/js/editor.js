/**
 * Editor JavaScript enhancements
 *
 * Imports WordPress packages for:
 * - @wordpress/i18n: Internationalization
 * - @wordpress/a11y: Accessibility announcements
 */

import { __ } from '@wordpress/i18n';
import { speak } from '@wordpress/a11y';

// Register custom block styles in the editor
wp.domReady( function () {
	// Announce action to screen readers using @wordpress/a11y
	speak( __( 'Editor enhancements initializing', 'ma-theme' ) );

	// Unregister unwanted core block styles
	wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
	wp.blocks.unregisterBlockStyle( 'core/separator', 'wide' );
	wp.blocks.unregisterBlockStyle( 'core/separator', 'dots' );

	// Register custom block variations
	wp.blocks.registerBlockVariation( 'core/group', {
		name: 'ma-theme-card',
		title: __( 'Medical Academic Theme Card', 'ma-theme' ),
		description: __( 'A styled card container', 'ma-theme' ),
		category: 'design',
		icon: 'admin-page',
		attributes: {
			className: 'is-style-shadow',
			style: {
				spacing: {
					padding: {
						top: 'var:preset|spacing|medium',
						right: 'var:preset|spacing|medium',
						bottom: 'var:preset|spacing|medium',
						left: 'var:preset|spacing|medium',
					},
				},
			},
		},
	} );

	// Add custom formatting options
	wp.richText.registerFormatType( 'ma-theme/highlight', {
		title: __( 'Highlight', 'ma-theme' ),
		tagName: 'mark',
		className: 'highlight',
		edit( { isActive, value, onChange } ) {
			return wp.element.createElement(
				wp.blockEditor.RichTextToolbarButton,
				{
					icon: 'admin-appearance',
					title: __( 'Highlight', 'ma-theme' ),
					onClick() {
						onChange(
							wp.richText.toggleFormat( value, {
								type: 'ma-theme/highlight',
							} )
						);
					},
					isActive,
				}
			);
		},
	} );
} );

// Editor theme utilities
const {{theme_slug|camelCase}}Editor = {
	/**
	 * Add custom classes to blocks based on attributes
	 */
	addBlockClasses() {
		const { addFilter } = wp.hooks;

		addFilter(
			'blocks.getSaveContent.extraProps',
			'ma-theme/add-block-classes',
			( props, blockType, attributes ) => {
				if ( blockType.name === 'core/group' && attributes.className ) {
					props.className = attributes.className;
				}
				return props;
			}
		);
	},

	/**
	 * Customize block editor sidebar
	 */
	customizeSidebar() {
		const { registerPlugin } = wp.plugins;
		const { PluginSidebar } = wp.editPost;
		const { PanelBody } = wp.components;

		const {{theme_slug|camelCase}}Sidebar = () => {
			return wp.element.createElement(
				PluginSidebar,
				{
					name: 'ma-theme-sidebar',
					title: __(
						'Medical Academic Theme Settings',
						'ma-theme'
					),
					icon: 'admin-appearance',
				},
				wp.element.createElement(
					PanelBody,
					{ title: __( 'Theme Options', 'ma-theme' ) },
					wp.element.createElement(
						'p',
						null,
						__(
							'Custom theme settings will appear here.',
							'ma-theme'
						)
					)
				)
			);
		};

		registerPlugin( 'ma-theme-sidebar', {
			render: {{theme_slug|camelCase}}Sidebar,
		} );
	},
};

// Initialize editor enhancements
wp.domReady( function () {
	{{theme_slug|camelCase}}Editor.addBlockClasses();
	{{theme_slug|camelCase}}Editor.customizeSidebar();
} );
