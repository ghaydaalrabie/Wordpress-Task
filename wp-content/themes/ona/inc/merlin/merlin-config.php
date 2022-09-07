<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(

	$config = array(
		'directory'            => 'inc/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => false, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'ona' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'ona' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'ona' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'ona' ),

		'btn-skip'                 => esc_html__( 'Skip', 'ona' ),
		'btn-next'                 => esc_html__( 'Next', 'ona' ),
		'btn-start'                => esc_html__( 'Start', 'ona' ),
		'btn-no'                   => esc_html__( 'Cancel', 'ona' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'ona' ),
		'btn-child-install'        => esc_html__( 'Install', 'ona' ),
		'btn-content-install'      => esc_html__( 'Install', 'ona' ),
		'btn-import'               => esc_html__( 'Import', 'ona' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'ona' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'ona' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It should take only a few minutes.', 'ona' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'ona' ),

		'child-header'             => esc_html__( 'Install Child Theme', 'ona' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'ona' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'ona' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'ona' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'ona' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'ona' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'ona' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'ona' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'ona' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'ona' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'ona' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'ona' ),

		'import-header'            => esc_html__( 'Import Content', 'ona' ),
		'import'                   => esc_html__( 'Let\'s import content to your website. This could take some minutes. Please wait.', 'ona' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://ona.deothemes.com', esc_html__( 'Explore Demos', 'ona' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'ona' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'ona' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'ona' ),
		'ready-action-link'        => esc_html__( 'Extras', 'ona' ),
		'ready-big-button'         => esc_html__( 'View your website', 'ona' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.deothemes.com/ona/', esc_html__( 'Documentation', 'ona' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', admin_url( '?page=ona-theme-contact' ), esc_html__( 'Get Theme Support', 'ona' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'ona' ) ),
	)
);
