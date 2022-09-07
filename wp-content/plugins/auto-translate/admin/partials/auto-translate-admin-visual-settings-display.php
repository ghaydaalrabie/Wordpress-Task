<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://pampa.dev
 * @since      1.0.0
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/admin/partials
 */
global $widget_types;
global $supported_languages;
$classic            = $vars['tabs']['visual_settings']['classic'];
$minimalist         = $vars['tabs']['visual_settings']['minimalist'];
$columns            = $vars['tabs']['visual_settings']['columns'];
$wpat_widget_type   = $vars['tabs']['visual_settings']['wpat_widget_type'];
$demo_langs         = [
    'ar' => __('Arabic', 'auto-translate'), 
    'bn' => __('Bengali', 'auto-translate'), 
    'fr' => __('French', 'auto-translate'), 
    'hi' => __('Hindi', 'auto-translate'), 
    'id' => __('Indonesian', 'auto-translate'), 
    'pt' => __('Portuguese', 'auto-translate'), 
    'ru' => __('Russian', 'auto-translate'), 
    'es' => __('Spanish', 'auto-translate'), 
    'en' => __('English', 'auto-translate'),
];
$languages_data = Auto_Translate_Languages::get_languages_data(array_keys($demo_langs));
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<script>
    var wpatLanguagesCountries = <?=json_encode($languages_data)?>;
    var wpatWidgetType = '<?=$wpat_widget_type?>';
    var wpatBaseLanguage = 'en';
</script>
<div id="wpat_admin_visual" class="wpat_widget_type_<?=$wpat_widget_type?>">
    <h2><?php _e('Widget Styling', 'auto-translate'); ?></h2>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">
                <?php _e('Widget type', 'auto-translate'); ?><br/>
                <small><?php _e('This is the widget front-end type','auto-translate'); ?></small>
            </th>
            <td colspan="<?=$columns?>">
            <select name="wpat_widget_type">
            <?php foreach($widget_types as $key => $type):?>
                <option value="<?=$key?>" <?=$wpat_widget_type===$key?'selected':''?>><?php _e($type,'auto-translate'); ?></option>
            <?php endforeach;?>
            </select>
            </td>
            <td colspan="2">
                <div id="wpat_dropdown_preview" class="styling-preview col-2-3" data-preload-class="styling-preview col-2-3">
                    <div class="wpat_widget_type_classic_only">
                        <div id="google_translate_element_<?=rand()?>" class="google_translate_element <?=$classic['wpat_widget_size']?> dashicons-before">
                            <div class="skiptranslate goog-te-gadget" dir="ltr">
                                <div id=":0.targetLanguage" class="goog-te-gadget-simple">
                                    <img src="https://www.google.com/images/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;">
                                    <span style="vertical-align: middle;">
                                        <a aria-haspopup="true" class="goog-te-menu-value <?php echo $classic['wpat_show_icon']==='on'?$classic['wpat_button_icon']:''?>" href="javascript:void(0)">
                                            <span><?php _e('Select Language', 'auto-translate');?></span>
                                            <img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1">
                                            <span style="border-left: 1px solid rgb(187, 187, 187);">&#8203;</span>
                                            <img src="https://www.google.com/images/cleardot.gif" alt="" width="1" height="1">
                                            <span aria-hidden="true" style="color: rgb(118, 118, 118);">▼</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpat_widget_type_minimalist_only">
                        <div id="auto_translate_button_wrapper">
                            <?php 
                                $wpat_min_style = $minimalist['wpat_min_style'];
                                $wpat_min_icon = $minimalist['wpat_min_icon'];
                                $wpat_min_txt_display = $minimalist['wpat_min_txt_display'];
                                $wpat_min_txt_underline = $minimalist['wpat_min_txt_underline'];
                                $wpat_min_border_thickness = $minimalist['wpat_min_border_thickness'];
                                $wpat_min_border_color = $minimalist['wpat_min_border_color'];
                                $wpat_min_background_color = $minimalist['wpat_min_background_color'];
                                $wpat_min_font_color = $minimalist['wpat_min_font_color'];
                                $wpat_min_font_family = $minimalist['wpat_min_font_family'];
                                $wpat_min_hover_color = $minimalist['wpat_min_hover_color'];
                                $wpat_min_font_hover_color = $minimalist['wpat_min_font_hover_color'];
                                $wpat_min_chevron = $minimalist['wpat_min_chevron'];
                                require_once( plugin_dir_path( dirname( __FILE__ ) ) . '../public/partials/widgets/auto-translate-widget-minimalist.php' ); 
                            ?>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="wpat_widget_type_classic_only">
        <?php require 'auto-translate-admin-visual-settings-classic-display.php'; ?>
    </div>
    <div class="wpat_widget_type_minimalist_only">
        <?php require 'auto-translate-admin-visual-settings-minimalist-display.php'; ?>
    </div>
</div>