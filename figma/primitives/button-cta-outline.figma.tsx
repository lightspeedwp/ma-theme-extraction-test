/**
 * Figma Code Connect for CTA Button (Outline Style)
 * 
 * This file connects the Figma button design to the WordPress button block implementation.
 * 
 * @fileoverview WordPress Button Block with CTA outline style
 */

import figma from '@figma/code-connect';

/**
 * CTA Button - Outline Style
 * 
 * A full-width outlined button in the CTA color scheme.
 * 
 * Features:
 * - Full-width layout (100%)
 * - Outline style (transparent background with colored border)
 * - CTA color scheme
 * - Responsive padding and typography
 * 
 * Design tokens used:
 * - Colors: cta-core (border and text)
 * - Typography: font-size-300 (Small - 1.25rem fluid)
 * - Border radius: radius-small (4px)
 * - Font weight: 700 (Bold)
 * - Letter spacing: 4px
 * 
 * States:
 * - Default: CTA color border and text
 * - Hover: Filled CTA background, white text
 * - Active: Filled CTA-dark background
 * - Disabled: Neutral color, reduced opacity
 */
figma.connect(
  'https://www.figma.com/design/4x7b2gxbPg1xC1fQkOIzvP/Medical-Academic-Design-System?node-id=157-19017',
  {
    example: (props) => (
      `<!-- wp:button {"width":100,"className":"is-style-cta-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cta-outline">
  <a class="wp-block-button__link wp-element-button" href="${props.url || '#'}">
    ${props.text || 'View CPD activity'}
  </a>
</div>
<!-- /wp:button -->`
    ),
    props: {
      /**
       * Button text/label
       */
      text: figma.string('Button text'),
      
      /**
       * Button link URL
       */
      url: figma.string('Button link'),
      
      /**
       * Button width (full-width by default)
       */
      width: figma.enum('Width', {
        Full: 100,
        Auto: 'auto',
      }),
      
      /**
       * Button state
       */
      state: figma.enum('State', {
        Default: 'default',
        Hover: 'hover',
        Active: 'active',
        Disabled: 'disabled',
      }),
    },
    variant: {
      State: 'Default',
      Width: 'Full',
    },
    links: [
      {
        name: 'WordPress Button Block',
        url: 'https://developer.wordpress.org/block-editor/reference-guides/core-blocks/#button',
      },
      {
        name: 'Block Styles',
        url: 'https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/',
      },
    ],
  }
);

export default figma;
