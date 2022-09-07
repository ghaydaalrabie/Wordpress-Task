<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://pampa.dev
 * @since      1.2.0
 *
 * @package    Auto_Translate
 * @subpackage Auto_Translate/public/partials
 */
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<style>
    .google_translate_element .goog-te-gadget-simple {
    background-image: linear-gradient(135deg, <?=$wpat_color_1?> 0, <?=$wpat_color_2?> 100%);
    border-radius: <?=$wpat_border_radius?>px !important;
    border: <?=$wpat_border_thickness?>px solid <?=$wpat_border_color?> !important;
    }
    .google_translate_element .goog-te-menu-value {
        color: <?=$wpat_font_color?> !important;
        <?php if( $wpat_font_family != '' ): ?>
        font-family: <?=$wpat_font_family?> !important;
        <?php endif; ?>
    }
    <?php if( $wpat_widget_type !== 'classic' ): ?>
    .google_translate_element{
        display:none!important;
    }
    <?php endif; ?>
</style>
<script>
function googleTranslateElementInit() {
    var googleTranslateElements = document.getElementsByClassName('google_translate_element');
    new google.translate.TranslateElement({
    pageLanguage: '<?=$wpat_base_language?>',
    includedLanguages: '<?=$included_languages?>',
    layout: google.translate.TranslateElement.InlineLayout.<?=$wpat_widget_type==='classic'?'SIMPLE':'VERTICAL'?>,
    autoDisplay: true}, googleTranslateElements[0].id);
}
var wpatLanguagesCountries = <?=json_encode($languages_data)?>;
var wpatButtonIcon = '<?php echo $wpat_show_icon==='on'?$wpat_button_icon:''?>';
var wpatDropdownBorderThickness = <?=$wpat_dropdown_border_thickness?>;
var wpatDropdownBorderColor = '<?=$wpat_dropdown_border_color?>';
var wpatDropdownBackgroundColor = '<?=$wpat_dropdown_background_color?>';
var wpatDropdownHoverColor = '<?=$wpat_dropdown_hover_color?>';
var wpatDropdownFontHoverColor = '<?=$wpat_dropdown_font_hover_color?>';
var wpatDropdownFontSelectedColor = '<?=$wpat_dropdown_font_selected_color?>';
var wpatDropdownFontColor = '<?=$wpat_dropdown_font_color?>';
var wpatDropdownFontFamily = '<?=$wpat_dropdown_font_family?>';
var wpatWidgetType = '<?=$wpat_widget_type?>';
var wpatBaseLanguage = '<?=$wpat_base_language?>';

/* dropdown styling */
var wpatDropdownShadow = <?php echo $wpat_dropdown_shadow==='on'?'true':'false'; ?>;
</script><script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>