<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the class in charge of your new WP Timeliner theme.
 * For more details, have a look at the parent WP_Timeliner\Themes\Abstract_Theme class
 * defined in wp-content/plugins/wp-timeliner/classes/themes/abstract-theme.php.
 */
if ( ! class_exists( 'My_New_Custom_Theme' ) ) {
	class My_New_Custom_Theme extends \WP_Timeliner\Themes\Abstract_Theme {
		/**
		 * Theme version, for assets cache busting.
		 */
		private const THEME_VERSION = '1.0.0';

		/**
		 * Path to the theme icon (displayed in the Timeline admin page).
		 * Recommended size is 160 x 128 px.
		 *
		 * @return string URL to the theme icon.
		 */
		public function get_icon() {
			return 'https://via.placeholder.com/160x128';
		}

		/**
		 * Enqueue this theme assets (JS & CSS).
		 */
		public function enqueue_assets() {
			if ( apply_filters( 'wpt.theme.load_theme_css', true, 'custom-theme' ) ) {
				wp_enqueue_style( 'wpt-theme-minimalist-css', plugins_url( 'wp-timeliner-custom-theme' ) . '/assets/css/theme.css', [], self::THEME_VERSION );
			}
		}
	}
}
