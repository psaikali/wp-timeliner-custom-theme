<?php
/**
 * Plugin Name: WP Timeliner Custom Theme
 * Description: Additional theme for WP Timeliner
 * Author: Pierre Saïkali
 * Author URI: https://saika.li
 * Version: 1.0.0
 */

/**
 * Register a new custom theme for WP Timeliner
 *
 * @param array $themes The default plugin themes array.
 * @return array $themes The new themes array.
 */
function add_custom_theme( $themes ) {
	include 'class-custom-theme.php';
	$themes['custom-theme'] = new My_New_Custom_Theme();
	return $themes;
}
add_filter( 'wpt.timeline.themes', __NAMESPACE__ . '\add_custom_theme' );