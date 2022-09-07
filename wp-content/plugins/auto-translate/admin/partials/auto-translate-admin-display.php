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
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php if( is_admin()): ?>
<div class="wrap" id="wpat_admin">
    <h1><?php _e( 'Automatic Translator', 'auto-translate' ); ?></h1>
    <p><?php _e( 'This plugin works out of the box and does not need any configuration. But if you want to personalize it, you are in the right place.', 'auto-translate' ); ?></p>
    <hr/>
    <h2 class="nav-tab-wrapper">
        <a href="?page=auto_translate&tab=language_settings" class="nav-tab <?php echo $vars['active_tab'] == 'language_settings' ? 'nav-tab-active' : ''; ?>"><?php _e('Language Settings', 'auto-translate'); ?></a>
        <a href="?page=auto_translate&tab=visual_settings" class="nav-tab <?php echo $vars['active_tab'] == 'visual_settings' ? 'nav-tab-active' : ''; ?>"><?php _e('Styling', 'auto-translate'); ?></a>
        <a href="?page=auto_translate&tab=advanced_settings" class="nav-tab <?php echo $vars['active_tab'] == 'advanced_settings' ? 'nav-tab-active' : ''; ?>"><?php _e('Advanced Options', 'auto-translate'); ?></a>
    </h2>
    <form method="post" action="options.php">

        <?php
            if( $vars['active_tab'] == 'language_settings' ) {
                settings_fields( 'auto-translate-language-settings-group' );
                do_settings_sections( 'auto-translate-language-settings-group' );
                require 'auto-translate-admin-language-settings-display.php';
            }
            elseif( $vars['active_tab'] == 'visual_settings' ) {
                settings_fields( 'auto-translate-visual-settings-group' );
                do_settings_sections( 'auto-translate-visual-settings-group' );
                require 'auto-translate-admin-visual-settings-display.php'; 
            }
            elseif( $vars['active_tab'] == 'advanced_settings' ) {
                settings_fields( 'auto-translate-advanced-settings-group' );
                do_settings_sections( 'auto-translate-advanced-settings-group' );
                require 'auto-translate-admin-advanced-settings-display.php'; 
            }
        ?>
        
        <?php submit_button(); ?>

    </form>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php endif ?>