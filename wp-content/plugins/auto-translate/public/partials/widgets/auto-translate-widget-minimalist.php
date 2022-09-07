<style>
    .auto_translate_minimalist .wpat_lang_item.wpat_lang_selected {
        border-color: <?=$wpat_min_border_color?>;
        border-width: <?=$wpat_min_border_thickness?>px;
    }
    .auto_translate_minimalist .wpat_minimalist_dropdown {
        border-color: <?=$wpat_min_border_color?>;
        border-width: 0 <?=$wpat_min_border_thickness?>px <?=$wpat_min_border_thickness?>px <?=$wpat_min_border_thickness?>px;
    }
    .auto_translate_minimalist .wpat_lang_item {
        background-color: <?=$wpat_min_background_color?>;
        color: <?=$wpat_min_font_color?>;
        font-family: <?=$wpat_min_font_family?>;
    }
    .wpat_minimalist_dropdown {
        background-color: <?=$wpat_min_background_color?>;
    }
    .wpat_minimalist_dropdown .wpat_lang_item:hover {
        background-color: <?=$wpat_min_hover_color?>;
        color: <?=$wpat_min_font_hover_color?>;
    }
</style>
<div class="
            auto_translate_minimalist
            wpat_min_style_<?=$wpat_min_style?>
            wpat_min_txt_display_<?=$wpat_min_txt_display?>
            wpat_invisible
            <?=$wpat_min_txt_underline?>
            ">
    <div class="wpat_lang_item wpat_lang_selected">
        <div class="wpat_flag_wrapper">
            <div class="wpat_flag" data-icon-class="<?=$wpat_min_icon?>"></div>
            <div class="wpat_lang_name"></div>
            <div class="wpat_lang_name_code">&nbsp;-&nbsp;</div>
            <div class="wpat_lang_code skiptranslate"></div>
        </div>
        <span class="dashicons wpat_chevron <?=$wpat_min_chevron?>"></span>
    </div>
    <div class="wpat_minimalist_dropdown wpat_closed" >
        <?php foreach($languages_data as $lang_code => $lang):?>
        <div class="wpat_lang_item" data-lang-code="<?=$lang_code?>">
            <div class="wpat_flag <?=$lang['country_code']?>"></div>
            <div class="wpat_lang_name"><?=$lang['lang_name']?></div>
            <div class="wpat_lang_name_code">&nbsp;-&nbsp;</div>
            <div class="wpat_lang_code skiptranslate"><?=$lang['lang_code']?></div>
        </div>
        <?php endforeach;?>
    </div>
</div>