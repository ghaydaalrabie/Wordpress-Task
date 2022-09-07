<?php

/**
 * Fired during plugin activation
 *
 * @link       https://pampa.dev
 * @since      1.0.0
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Auto_Translate
 * @subpackage Auto_Translate/includes
 * @author     Pampa Dev <intouch@pampa.dev>
 */
class Auto_Translate_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		self::add_options();
	}

	public static function add_options() {
		// The default value for wpat_widget_type depends on the plugin version we come from.
		// If we come from a version before 1.4.0, we set the default value to 'classic'
		// because that means that the website is already using that style and we don't want 
		// to break it, otherwise we set it to 'minimalist'
		$default_wpat_widget_type = 'minimalist';
		if(	get_option('wpat_supported_languages') && // If the option exists then it's an existing installation
			version_compare(get_option('wpat_auto_translate_version'), '1.4.0') < 0
		) {
			$default_wpat_widget_type = 'classic';
		}

		update_option('wpat_auto_translate_version', AUTO_TRANSLATE_VERSION);

		/* Language settings */
		$wp_default_lang = explode("-",get_bloginfo("language"))[0];
		add_option('wpat_base_language', $wp_default_lang);

		/* Styling settings */
		add_option('wpat_widget_type', $default_wpat_widget_type);
		// Classic settings
		add_option('wpat_button_icon', 'dashicons-translation');
		add_option('wpat_show_icon', 'on');
		add_option('wpat_supported_languages', array('ar', 'bn', 'de', 'en', 'fr', 'hi', 'id', 'pt', 'ru', 'es'));
		add_option('wpat_color_1', '#000');
		add_option('wpat_color_2', '#000');
		add_option('wpat_widget_size', get_option('wpat_size', 'smaller')==='smaller'?'small':'large');
		add_option('wpat_border_radius', '0');
		add_option('wpat_border_thickness', 1);
		add_option('wpat_border_color', '#fff');
		add_option('wpat_font_color', '#fff');
		add_option('wpat_font_family', '');
		add_option('wpat_dropdown_border_thickness', 1);
		add_option('wpat_dropdown_border_color', '#000');
		add_option('wpat_dropdown_background_color', '#fff');
		add_option('wpat_dropdown_hover_color', '#356177');
		add_option('wpat_dropdown_font_hover_color', '#fff');
		add_option('wpat_dropdown_font_selected_color', '#356177');
		add_option('wpat_dropdown_font_color', '#000');
		add_option('wpat_dropdown_shadow', '');
		add_option('wpat_dropdown_font_family', '');
		// Minimalist settings
		add_option('wpat_min_style', 'flags');
		add_option('wpat_min_icon', 'dashicons-admin-site-alt3');
		add_option('wpat_min_txt_display', 'name');
		add_option('wpat_min_chevron', 'dashicons-arrow-down-alt2');
		add_option('wpat_min_txt_underline', 'wpat_min_txt_underline');
		add_option('wpat_min_border_thickness', 1);
		add_option('wpat_min_border_color', '#f0f0f0');
		add_option('wpat_min_background_color', '#fff');
		add_option('wpat_min_font_color', '#000');
		add_option('wpat_min_font_family', '');
		add_option('wpat_min_hover_color', '#fff');
		add_option('wpat_min_font_hover_color', '#000');

		/* Advanced settings */
		add_option('wpat_default_location', true);
	}

}
