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
$data = $vars['tabs']['advanced_settings'];
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<table class="form-table">
    <tr valign="top">
        <th scope="row">
            <?php _e('Default Location', 'auto-translate'); ?><br/>
            <small><?php _e('Turn this off if you don\'t want the \'Automatic Translator\' button to be displayed on the top left corner.','auto-translate'); ?></small>
        </th>
        <td colspan="<?=$data['columns']?>">
            <label for="default-location-on"><?php _e('On', 'auto-translate'); ?></label> <input type="radio" id="default-location-on" name="wpat_default_location" value=1 <?php if( $data['wpat_default_location'] ){ echo "checked='checked'"; }; ?>/>
            <label for="default-location-off"><?php _e('Off', 'auto-translate'); ?></label> <input type="radio" id="default-location-off" name="wpat_default_location" value=0 <?php if( !$data['wpat_default_location'] ){ echo "checked='checked'"; }; ?>/>
        </td>
        <td colspan="<?=$data['columns']?>">
            <div class="suggestion">
                <p><?php _e( 'For optimization reasons we suggest you to turn this option Off if you are using a <b>shortcode</b> or a <b>widget</b> to display the translation button.', 'auto-translate' ); ?></p>
            </div>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row" class="admin-shortcode-wrapper">
            <?php _e('Shortcode', 'auto-translate'); ?><br/>
            <small><?php _e('You can use this shortcode to display the translation button in a custom location.', 'auto-translate'); ?></small>
        </th>
        <td colspan="<?=$data['columns']?>" class="admin-shortcode-wrapper">
            <code>[auto_translate_button]</code>
        </td>
    </tr>
    <tr valign="top">
        <th scope="row" class="admin-shortcode-wrapper">
            <?php _e('Widget', 'auto-translate'); ?><br/>
            <small><?php _e('You can use a widget to display the translation button within a widget area.', 'auto-translate'); ?></small>
        </th>
        <td colspan="<?=$data['columns']?>" class="admin-shortcode-wrapper">
        <?php _e('Go to <b>Appearance -> Widgets</b> and look for the <i>"Automatic Translator Button"</i> widget to place it where you need.', 'auto-translate'); ?>
        </td>
    </tr>
</table>