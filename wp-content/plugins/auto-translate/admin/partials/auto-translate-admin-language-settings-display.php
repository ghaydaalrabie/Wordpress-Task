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
$data = $vars['tabs']['language_setting'];
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<table class="form-table">
    <tr valign="top">
        <th scope="row">
            <?php _e('Base language', 'auto-translate'); ?><br/>
            <small><?php _e('What is your website\'s original language?','auto-translate'); ?></small>
        </th>
        <td colspan="<?php echo $data['columns'] ?>"><select name="wpat_base_language">
                <?php
                /*
                    * Auto detect is not supported yet. The problem is that if you select "Auto detect" and do not
                    * choose your base language in the "Supported languages" then the user will not be able to
                    * go back to the original language
                    */
                ?>
                <?php foreach($data['supported_languages'] as $code=>$lang): ?>
                    <option value="<?php echo $code; ?>" <?php if(esc_attr($data['wpat_base_language'])==$code):?> selected <?php endif; ?>><?php _e($lang, 'auto-translate'); ?></option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">
            <?php _e('Supported languages', 'auto-translate'); ?><br/>
            <small><?php _e('Select what languages you want your website to be translated into.','auto-translate'); ?></small>
            <div class="suggestion" id="languages-limit" style="
            <?php if( 
                is_array($data['wpat_supported_languages']) &&
                !in_array('all', $data['wpat_supported_languages']) &&
                count($data['wpat_supported_languages']) <= 10
             ): ?>
            display: none
            <?php endif; ?>
            ">
                <p><?php _e( 'We don\'t recommend selecting more than 10 languages, it might affect the UX negatively.', 'auto-translate' ); ?></p>
            </div>
    </div>
        </th>
        <td>
            <input type="checkbox" name='wpat_supported_languages[]' value="all" <?php if(!is_array($data['wpat_supported_languages']) || in_array('all', $data['wpat_supported_languages'])):?> checked <?php endif; ?>><?php _e('All', 'auto-translate'); ?><br/>
            <?php foreach($data['supported_languages'] as $code=>$lang): ?>
                <?php if($data['count'] % $data['langs_per_column'] == 0): ?></td><td><?php endif ?>
                <input type="checkbox" name='wpat_supported_languages[]' value="<?php echo $code; ?>" <?php if(in_array($code, $data['wpat_supported_languages'])):?> checked <?php endif; ?>><?php _e($lang, 'auto-translate'); ?><br/>
                <?php $data['count']++ ?>
            <?php endforeach; ?>
        </td>
    </tr>
</table>