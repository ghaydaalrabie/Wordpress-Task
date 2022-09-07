<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://pampa.dev
 * @since      1.0.0
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/admin
 * @author     Pampa Dev <intouch@pampa.dev>
 */
class Auto_Translate_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Auto_Translate_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Auto_Translate_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/auto-translate-admin.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '-global', plugin_dir_url( dirname(__FILE__) ) . 'global/css/auto-translate-global.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'wp-color-picker' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Auto_Translate_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Auto_Translate_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/auto-translate-admin.min.js', array( 'jquery','wp-color-picker' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '-global', plugin_dir_url( dirname(__FILE__) ) . 'global/js/auto-translate-global.min.js', array(), $this->version, 'all' );

	}

	/**
	 * Load the plugin's widgets.
	 *
	 * @since    1.3.0
	 */
	public function load_widgets() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-auto-translate-button-widget.php';
		register_widget('wpat_button_widget');
	}

	/**
	 * Check the plugin version and update options.
	 *
	 * @since    1.4.0
	 */
	public function check_version() {
		if (AUTO_TRANSLATE_VERSION !== get_option('wpat_auto_translate_version')){
			require_once plugin_dir_path( __FILE__ ) . '../includes/class-auto-translate-activator.php';
			Auto_Translate_Activator::activate();
		}
	}

	public function create_admin_menu() {
		//create new top-level menu
		add_menu_page(__('Automatic Translator Settings', 'auto-translate'), __('Translator', 'auto-translate'), 'administrator', 'auto_translate', array($this, 'auto_translate_settings_page'), 'dashicons-translation', 98);
	}

	function plugin_settings() {
		/* Language settings */
		register_setting( 'auto-translate-language-settings-group', 'wpat_base_language' );
		register_setting( 'auto-translate-language-settings-group', 'wpat_supported_languages' , array('type'=>'array'));

		/* Styling settings */
		register_setting( 'auto-translate-visual-settings-group', 'wpat_widget_type');
		// Classic settings
		register_setting( 'auto-translate-visual-settings-group', 'wpat_button_icon' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_show_icon' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_color_1' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_color_2' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_widget_size' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_border_radius' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_border_thickness' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_border_color' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_font_color' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_font_family' );
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_shadow');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_border_thickness');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_border_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_background_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_hover_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_font_hover_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_font_selected_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_font_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_dropdown_font_family');
		// Minimalist settings
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_style');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_icon');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_txt_display');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_txt_underline');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_border_thickness');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_border_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_background_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_font_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_font_family');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_hover_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_font_hover_color');
		register_setting( 'auto-translate-visual-settings-group', 'wpat_min_chevron');

		/* Advanced settings */
		register_setting( 'auto-translate-advanced-settings-group', 'wpat_default_location', [ 'type '=> 'boolean', 'default' => true]);
	}

	public function auto_translate_settings_page(){
		global $supported_languages;
		$langs_per_column = 27;
		$vars = [];
		$vars['active_tab'] = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'language_settings';
		$vars['tabs'] = [
			'language_setting' => [
				'supported_languages' => $supported_languages,
				'count' => 1,
				'langs_per_column' => $langs_per_column,
				'columns' => ceil(sizeof($supported_languages) / $langs_per_column),
				'wpat_supported_languages' => get_option('wpat_supported_languages'),
				'wpat_base_language' => get_option('wpat_base_language')
			],
			'visual_settings' => [
				'wpat_widget_type' => get_option('wpat_widget_type'),
				'classic' => [
					'wpat_widget_size' => get_option('wpat_widget_size'),
					'wpat_color_1' => get_option('wpat_color_1'),
					'wpat_color_2' => get_option('wpat_color_2'),
					'wpat_border_radius' => get_option('wpat_border_radius'),
					'wpat_border_thickness' => get_option('wpat_border_thickness'),
					'wpat_border_color' => get_option('wpat_border_color'),
					'wpat_button_icon' => get_option('wpat_button_icon'),
					'wpat_show_icon' => get_option('wpat_show_icon'),
					'wpat_font_color' => get_option('wpat_font_color'),
					'wpat_font_family' => get_option('wpat_font_family'),
					'wpat_dropdown_shadow' => get_option('wpat_dropdown_shadow'),
					'wpat_dropdown_border_thickness' => get_option('wpat_dropdown_border_thickness'),
					'wpat_dropdown_border_color' => get_option('wpat_dropdown_border_color'),
					'wpat_dropdown_background_color' => get_option('wpat_dropdown_background_color'),
					'wpat_dropdown_hover_color' => get_option('wpat_dropdown_hover_color'),
					'wpat_dropdown_font_hover_color' => get_option('wpat_dropdown_font_hover_color'),
					'wpat_dropdown_font_selected_color' => get_option('wpat_dropdown_font_selected_color'),
					'wpat_dropdown_font_color' => get_option('wpat_dropdown_font_color'),
					'wpat_dropdown_font_family' => get_option('wpat_dropdown_font_family'),
				],
				'minimalist' => [
					'wpat_min_style' => get_option('wpat_min_style'),
					'wpat_min_icon' => get_option('wpat_min_icon'),
					'wpat_min_txt_display' => get_option('wpat_min_txt_display'),
					'wpat_min_txt_underline' => get_option('wpat_min_txt_underline'),
					'wpat_min_border_thickness' => get_option('wpat_min_border_thickness'),
					'wpat_min_border_color' => get_option('wpat_min_border_color'),
					'wpat_min_background_color' => get_option('wpat_min_background_color'),
					'wpat_min_font_color' => get_option('wpat_min_font_color'),
					'wpat_min_font_family' => get_option('wpat_min_font_family'),
					'wpat_min_hover_color' => get_option('wpat_min_hover_color'),
					'wpat_min_font_hover_color' => get_option('wpat_min_font_hover_color'),
					'wpat_min_chevron' => get_option('wpat_min_chevron'),
				],
				'columns' => 1
			],
			'advanced_settings' => [
				'wpat_default_location' => get_option('wpat_default_location', true),
				'columns' => 1
			]
		];
		require_once 'partials/auto-translate-admin-display.php';
	}
}
