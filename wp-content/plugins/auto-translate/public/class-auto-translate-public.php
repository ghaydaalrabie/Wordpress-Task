<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://pampa.dev
 * @since      1.0.0
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/public
 * @author     Pampa Dev <intouch@pampa.dev>
 */
class Auto_Translate_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of the plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

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
        
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( dirname(__FILE__) ) . 'public/css/auto-translate-public.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '-global', plugin_dir_url( dirname(__FILE__) ) . 'global/css/auto-translate-global.min.css', array(), $this->version, 'all' );
        wp_enqueue_style( 'dashicons' );

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

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

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/auto-translate-public.min.js', array('jquery'), $this->version, false);
		wp_enqueue_script( $this->plugin_name . '-global', plugin_dir_url( dirname(__FILE__) ) . 'global/js/auto-translate-global.min.js', array(), $this->version, 'all' );

    }


    public function hook_javascript_translator()
    {
        /* Language settings */
        $included_languages = implode(',', array_keys($this->get_included_languages()));
        $languages_data = Auto_Translate_Languages::get_languages_data(explode(',',$included_languages));

        /* Styling settings */
        $wpat_widget_type = get_option('wpat_widget_type');
        // Classic settings
        $wpat_button_icon = get_option('wpat_button_icon');
        $wpat_show_icon = get_option('wpat_show_icon');
        $wpat_base_language = get_option('wpat_base_language');
        $wpat_color_1 = get_option('wpat_color_1');
        $wpat_color_2 = get_option('wpat_color_2');
        $wpat_border_radius = get_option('wpat_border_radius');
        $wpat_border_thickness = get_option('wpat_border_thickness');
        $wpat_border_color = get_option('wpat_border_color');
        $wpat_font_color = get_option('wpat_font_color');
        $wpat_font_family = get_option('wpat_font_family');
        $wpat_dropdown_shadow = get_option('wpat_dropdown_shadow');
        $wpat_dropdown_border_thickness = get_option('wpat_dropdown_border_thickness');
        $wpat_dropdown_border_color = get_option('wpat_dropdown_border_color');
        $wpat_dropdown_background_color = get_option('wpat_dropdown_background_color');
        $wpat_dropdown_hover_color = get_option('wpat_dropdown_hover_color');
        $wpat_dropdown_font_hover_color = get_option('wpat_dropdown_font_hover_color');
        $wpat_dropdown_font_selected_color = get_option('wpat_dropdown_font_selected_color');
        $wpat_dropdown_font_color = get_option('wpat_dropdown_font_color');
        $wpat_dropdown_font_family = get_option('wpat_dropdown_font_family');

        include 'partials/auto-translate-public-header-display.php';
    }

    private function get_included_languages(){
        global $supported_languages;
        $wpat_base_language = get_option('wpat_base_language');
        $wpat_supported_languages = get_option('wpat_supported_languages');

        if (is_array($wpat_supported_languages) && !in_array('all', $wpat_supported_languages)) {
            $included_languages = array();

            $wpat_supported_languages[] = $wpat_base_language;
            foreach($wpat_supported_languages as $language){
                $included_languages[$language] = $supported_languages[$language];
            }
        } else {
            $included_languages = $supported_languages;
        }

        return $included_languages;
    }

    function hook_content_translator()
    {
        $wpat_default_location = get_option('wpat_default_location', true);
        if ( $wpat_default_location ) {
            echo $this->content_translator(true);
        }
    }

    function auto_translate_button_function ($atts = [], $content = null )
    {
        return $this->content_translator(false);
    }

    private function content_translator($default_location)
    {
        ob_start();
        global $supported_languages;
        $wpat_widget_type           = get_option('wpat_widget_type');
        $wpat_min_style             = get_option('wpat_min_style');
        $wpat_min_icon              = get_option('wpat_min_icon');
        $wpat_min_txt_display       = get_option('wpat_min_txt_display');
        $wpat_min_chevron           = get_option('wpat_min_chevron');
        $wpat_min_txt_underline     = get_option('wpat_min_txt_underline');
        $wpat_min_border_thickness  = get_option('wpat_min_border_thickness');
        $wpat_min_border_color      = get_option('wpat_min_border_color');
        $wpat_min_background_color  = get_option('wpat_min_background_color');
        $wpat_min_font_color        = get_option('wpat_min_font_color');
        $wpat_min_font_family       = get_option('wpat_min_font_family');
        $wpat_min_hover_color       = get_option('wpat_min_hover_color');
        $wpat_min_font_hover_color  = get_option('wpat_min_font_hover_color');
        $wpat_widget_size           = get_option('wpat_widget_size');
        $wpat_base_language         = get_option('wpat_base_language');

        $included_languages     = $this->get_included_languages();
        $languages_data         = Auto_Translate_Languages::get_languages_data(array_keys($included_languages));

        include 'partials/auto-translate-public-display.php';
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

}
