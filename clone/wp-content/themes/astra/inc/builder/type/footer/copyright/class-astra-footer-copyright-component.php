<?php
/**
 * Copyright component.
 *
 * @package     Astra Builder
 * @link        https://www.brainstormforce.com
 * @since       Astra 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'ASTRA_BUILDER_FOOTER_COPYRIGHT_DIR', ASTRA_THEME_DIR . 'inc/builder/type/footer/copyright' );
define( 'ASTRA_BUILDER_FOOTER_COPYRIGHT_URI', ASTRA_THEME_URI . 'inc/builder/type/footer/copyright' );

if ( ! class_exists( 'Astra_Footer_Copyright_Component' ) ) {

	/**
	 * Astra_Footer_Copyright_Component
	 *
	 * @since 3.0.0
	 */
	class Astra_Footer_Copyright_Component {

		/**
		 * Constructor function that initializes required actions and hooks
		 */
		public function __construct() {

			// @codingStandardsIgnoreStart WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			require_once ASTRA_BUILDER_FOOTER_COPYRIGHT_DIR . '/class-astra-footer-copyright-component-loader.php';

			// Include front end files.
			if ( ! is_admin() || Astra_Builder_Customizer::astra_collect_customizer_builder_data() ) {
				require_once ASTRA_BUILDER_FOOTER_COPYRIGHT_DIR . '/dynamic-css/dynamic.css.php';
			}
			// @codingStandardsIgnoreEnd WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		}
	}

	/**
	 *  Kicking this off by creating an object.
	 */
	new Astra_Footer_Copyright_Component();

}