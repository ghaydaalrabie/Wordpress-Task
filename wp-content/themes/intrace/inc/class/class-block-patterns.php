<?php
/**
 * Block Pattern Class
 *
 * @author Jegstudio
 * @package intrace
 * @since 1.0.0
 */

namespace Intrace;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use WP_Block_Pattern_Categories_Registry;

/**
 * Block Pattern Class
 *
 * @package intrace
 */
class Block_Patterns {

	/**
	 * Instance variable
	 *
	 * @var $instance
	 */
	private static $instance;

	/**
	 * Class instance.
	 *
	 * @return BlockPatterns
	 */
	public static function instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	/**
	 * Class constructor.
	 */
	public function __construct() {
		$this->register_block_patterns();
	}

	/**
	 * Register Block Patterns
	 */
	private function register_block_patterns() {
		$block_pattern_categories = array(
			'intrace-basic' => array( 'label' => __( 'Intrace Basic Patterns', 'intrace' ) ),
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_pattern_categories['intrace-gutenverse'] = array( 'label' => __( 'Intrace Gutenverse Patterns', 'intrace' ) );
		}

		$block_pattern_categories = apply_filters( 'intrace_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {
			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
				register_block_pattern_category( $name, $properties );
			}
		}

		$block_patterns = array(
			'core-header',
			'core-footer',
			'core-index-hero',
			'core-index-hero-2',
			'core-index-about',
			'core-index-group-2',
			'core-index-pricing',
			'core-index-services',
			'core-index-services-2',
			'core-index-client-logo',
			'core-hero-page-not-found',
			'core-hero-page',
			'core-hero-single-post',
			'core-archive-hero',
			'core-search-hero',
		);

		if ( defined( 'GUTENVERSE' ) ) {
			$block_patterns[] = 'gutenverse-header';
			$block_patterns[] = 'gutenverse-footer';
			$block_patterns[] = 'gutenverse-home-about';
			$block_patterns[] = 'gutenverse-home-client-logo';
			$block_patterns[] = 'gutenverse-home-hero';
			$block_patterns[] = 'gutenverse-home-section-2';
			$block_patterns[] = 'gutenverse-home-services';
			$block_patterns[] = 'gutenverse-about-section-2';
			$block_patterns[] = 'gutenverse-hero-about-us';
			$block_patterns[] = 'gutenverse-hero-contact-us';
			$block_patterns[] = 'gutenverse-hero-project-detail';
			$block_patterns[] = 'gutenverse-hero-projects';
			$block_patterns[] = 'gutenverse-hero-services';
			$block_patterns[] = 'gutenverse-project-detail-section-2';
			$block_patterns[] = 'gutenverse-projects-gallery';
			$block_patterns[] = 'gutenverse-services-section-2';
			$block_patterns[] = 'gutenverse-services-section-3';
			$block_patterns[] = 'gutenverse-services-testimonials';
		}

		$block_patterns = apply_filters( 'intrace_block_patterns', $block_patterns );

		if ( function_exists( 'register_block_pattern' ) ) {
			foreach ( $block_patterns as $block_pattern ) {
				$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

				register_block_pattern(
					'intrace/' . $block_pattern,
					require $pattern_file
				);
			}
		}
	}
}
