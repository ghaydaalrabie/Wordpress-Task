<?php
/**
 * Add theme page
 */
function gutenify_agency_menu() {
	add_theme_page( esc_html__( 'Gutenify Agency', 'gutenify-agency' ), esc_html__( 'Gutenify Theme', 'gutenify-agency' ), 'edit_theme_options', 'gutenify-agency-info', 'gutenify_agency_theme_page_display' );
}
add_action( 'admin_menu', 'gutenify_agency_menu' );

/**
 * Display About page
 */
function gutenify_agency_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}

	include_once 'templates/theme-info.php';
}

function gutenify_agency_admin_plugin_notice() {
	include 'templates/admin-plugin-notice.php';
}
add_action( 'admin_notices', 'gutenify_agency_admin_plugin_notice' );
