<table class="form-table">
    <tr valign="top">
        <th scope="row">
            <?php _e('Style', 'auto-translate'); ?><br/>
            <small><?php _e('Select one styling option','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input type="radio" name="wpat_min_style" value="flags" <?php if( $minimalist['wpat_min_style'] === 'flags' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_style_flags"><?php _e('Flags', 'auto-translate'); ?></label><br/>
            <input type="radio" name="wpat_min_style" value="flat_flags" <?php if( $minimalist['wpat_min_style'] === 'flat_flags' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_style_flat_flags"><?php _e('Flat flags', 'auto-translate'); ?></label><br/>
            <input type="radio" name="wpat_min_style" value="icon" <?php if( $minimalist['wpat_min_style'] === 'icon' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_style_icon"><?php _e('Icon', 'auto-translate'); ?></label><br/>
            <input type="radio" name="wpat_min_style" value="clean" <?php if( $minimalist['wpat_min_style'] === 'clean' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_style_clean"><?php _e('Text only', 'auto-translate'); ?></label>
        </td>
        <th scope="row" class="wpat_min_icon_wrapper <?php echo $minimalist['wpat_min_style']==='icon'?'':'wpat_hidden'?>">
            <?php _e('Icon', 'auto-translate'); ?><br/>
            <small><?php _e('This is the icon for the widget','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>" class="wpat_min_icon_wrapper <?php echo $minimalist['wpat_min_style']==='icon'?'':'wpat_hidden'?>">
            <?php
            /*
                * https://github.com/bradvin/dashicons-picker
                */
            ?>
            <input id="wpat_min_icon" name="wpat_min_icon" type="hidden" value="<?=$minimalist['wpat_min_icon']?>"/><span id="wpat_min_icon_display" class="dashicons <?=$minimalist['wpat_min_icon']?>"></span>
            <input id="wpat_min_icon_picker" class="button dashicons-picker" type="button" value="<?php _e('Choose Icon', 'auto-translate'); ?>" 
            data-target="#wpat_min_icon" data-preview="#wpat_min_icon_display" />
        </td>
    </tr>
    <tr valign="top">
        <th scope="row">
            <?php _e('Text displayed', 'auto-translate'); ?><br/>
            <small><?php _e('Select a text display option','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input type="radio" name="wpat_min_txt_display" value="name" <?php if( $minimalist['wpat_min_txt_display'] === 'name' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_txt_display"><?php _e('Language name', 'auto-translate'); ?></label><br/>
            <input type="radio" name="wpat_min_txt_display" value="name_code" <?php if( $minimalist['wpat_min_txt_display'] === 'name_code' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_txt_display"><?php _e('Language name', 'auto-translate'); ?> - <?php _e('Language code', 'auto-translate'); ?></label><br/>
            <input type="radio" name="wpat_min_txt_display" value="code" <?php if( $minimalist['wpat_min_txt_display'] === 'code' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_txt_display"><?php _e('Language code', 'auto-translate'); ?></label><br/>
        </td>
        <th scope="row">
            <?php _e('Chevron style', 'auto-translate'); ?><br/>
            <small><?php _e('Chevron style','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input type="radio" name="wpat_min_chevron" value="dashicons-arrow-down-alt2" <?php if( $minimalist['wpat_min_chevron'] === 'dashicons-arrow-down-alt2' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_chevron"><?php _e('Default', 'auto-translate'); ?><span class="dashicons dashicons-arrow-down-alt2"></span></label><br/>
            <input type="radio" name="wpat_min_chevron" value="dashicons-arrow-down" <?php if( $minimalist['wpat_min_chevron'] === 'dashicons-arrow-down' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_chevron"><?php _e('Alternative', 'auto-translate'); ?><span class="dashicons dashicons-arrow-down"></span></label><br/>
            <input type="radio" name="wpat_min_chevron" value="dashicons-arrow-down-none" <?php if( $minimalist['wpat_min_chevron'] === 'dashicons-arrow-down-none' ){ echo "checked='checked'"; }; ?>/> <label for="wpat_min_chevron"><?php _e('None', 'auto-translate'); ?></label><br/>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row">
            <?php _e('Border thickness', 'auto-translate'); ?><br/>
            <small><?php _e('Widgets\'s border thickness in pixels','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input type="number" id="wpat_min_border_thickness" name="wpat_min_border_thickness" value="<?=$minimalist['wpat_min_border_thickness']?>"/> px
        </td>
        <th scope="row">
            <?php _e('Border color', 'auto-translate'); ?><br/>
            <small><?php _e('Widget\'s border color','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input class="color-picker" type="text" id="wpat_min_border_color" name="wpat_min_border_color" value="<?=$minimalist['wpat_min_border_color']?>"/>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row">
            <?php _e('Background color', 'auto-translate'); ?><br/>
            <small><?php _e('Widget\'s background color','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input class="color-picker" type="text" id="wpat_min_background_color" name="wpat_min_background_color" value="<?=$minimalist['wpat_min_background_color']?>"/>
        </td>
        <th scope="row">
            <?php _e('Hover color', 'auto-translate'); ?><br/>
            <small><?php _e('The hovered dropdown text background color','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input class="color-picker" type="text" id="wpat_min_hover_color" name="wpat_min_hover_color" value="<?=$minimalist['wpat_min_hover_color']?>"/>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row">
            <?php _e('Font color', 'auto-translate'); ?><br/>
            <small><?php _e('Font color','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input class="color-picker" type="text" id="wpat_min_font_color" name="wpat_min_font_color" value="<?=$minimalist['wpat_min_font_color']?>"/>
        </td>
        <th scope="row">
            <?php _e('Font name', 'auto-translate'); ?><br/>
            <small><?php _e('Font name','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input type="text" id="wpat_min_font_family" name="wpat_min_font_family" value="<?=$minimalist['wpat_min_font_family']?>" placeholder="<?=_e('Leave it blank if not sure', 'auto-translate')?>"/>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row">
            <?php _e('Font hover color', 'auto-translate'); ?><br/>
            <small><?php _e('The hovered text color','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <input class="color-picker" type="text" id="wpat_min_font_hover_color" name="wpat_min_font_hover_color" value="<?=$minimalist['wpat_min_font_hover_color']?>"/>
        </td>
        <th scope="row">
            <?php _e('Underline text', 'auto-translate'); ?><br/>
            <small><?php _e('Select to underline the hovered dropdown text','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$columns?>">
            <div class="custom-control custom-switch">
                <input type="checkbox" id="wpat_min_txt_underline" value="wpat_min_txt_underline" name="wpat_min_txt_underline" <?php if( $minimalist['wpat_min_txt_underline'] ){ echo "checked='checked'"; }; ?>/>
                <label for="wpat_min_txt_underline"><?php _e('Underline on hover', 'auto-translate'); ?></label>
            </div>
        </td>
    </tr>
</table>