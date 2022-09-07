<?php
/**
 * Footer content.
 */
return array(
	'title'      => __( 'Footer', 'photology' ),
	'categories' => array( 'photology-basic' ),
	'content'    => '
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"10px"}}},"backgroundColor":"black","layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
            <div class="wp-block-group has-black-background-color has-background" style="padding-top:80px;padding-bottom:10px"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"60px"}}}} -->
            <div class="wp-block-columns" style="padding-bottom:60px"><!-- wp:column {"width":"300px","style":{"spacing":{"padding":{"right":"40px"}}}} -->
            <div class="wp-block-column" style="padding-right:40px;flex-basis:300px"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"#d1c8bb"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px"},"spacing":{"margin":{"bottom":"30px"}}},"fontFamily":"system-fonts"} /-->
            
            <!-- wp:paragraph {"style":{"color":{"text":"#949494"}}} -->
            <p class="has-text-color" style="color:#949494">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"LP2wHl","iconBackgroundColorValue":"#916c3d","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:40px"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
            
            <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
            
            <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
            
            <!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
            <!-- /wp:social-links --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"top","width":"150px","style":{"spacing":{"padding":{"top":"10px","left":"20px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:10px;padding-left:20px;flex-basis:150px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#d1c8bb"},"spacing":{"margin":{"bottom":"25px"}}},"fontSize":"small"} -->
            <h2 class="has-text-color has-small-font-size" style="color:#d1c8bb;font-style:normal;font-weight:500;margin-bottom:25px">Quick Links</h2>
            <!-- /wp:heading -->
            
            <!-- wp:navigation {"customTextColor":"#949494","layout":{"type":"flex","justifyContent":"left","orientation":"vertical","flexWrap":"wrap"},"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontSize":"tiny","fontFamily":"cambria-georgia"} -->
            <!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"About Us","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"Portfolio","url":"#","kind":"custom","isTopLevelLink":true} /-->
            <!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /--> 
            <!-- /wp:navigation -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"250px","style":{"spacing":{"padding":{"top":"10px"}}}} -->
            <div class="wp-block-column" style="padding-top:10px;flex-basis:250px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#d1c8bb"},"spacing":{"margin":{"left":"25px"}}},"fontSize":"small"} -->
            <h2 class="has-text-color has-small-font-size" style="color:#d1c8bb;font-style:normal;font-weight:500;margin-left:25px">Contact Info</h2>
            <!-- /wp:heading -->
            
            <!-- wp:list {"style":{"color":{"text":"#949494"},"typography":{"lineHeight":"3"}},"fontSize":"tiny"} -->
            <ul class="has-text-color has-tiny-font-size" style="color:#949494;line-height:3"><li>Jl. Sunset Road No.815, Kuta, Bali - 80361</li><li>(021) 123 - 4567</li><li>support@domain.com</li></ul>
            <!-- /wp:list --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"style":{"spacing":{"padding":{"left":"40px","top":"10px"}}}} -->
            <div class="wp-block-column" style="padding-top:10px;padding-left:40px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"color":{"text":"#d1c8bb"},"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"small"} -->
            <h2 class="has-text-color has-small-font-size" style="color:#d1c8bb;font-style:normal;font-weight:500;margin-bottom:40px">Recent Works</h2>
            <!-- /wp:heading -->
            
            <!-- wp:gallery {"columns":3,"linkTo":"none"} -->
            <figure class="wp-block-gallery has-nested-images columns-3 is-cropped"><!-- wp:image {"id":521,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/wwork-man-working-tree-person-creative-655263-pxhere.com.jpg" alt="" class="wp-image-521"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":519,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/architecturee-house-window-building-skyscraper-downtown-44174-pxhere.com.jpg" alt="" class="wp-image-519"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":520,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/mann-love-couple-wedding-bride-groom-736332-pxhere.com.jpg" alt="" class="wp-image-520"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":510,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/rock-music-people-night-smoke-crowd-655306-pxhere.com.jpg" alt="" class="wp-image-510"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":516,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/iphone-smartphone-hand-tree-forest-light-15166-pxhere.com.jpg" alt="" class="wp-image-516"/></figure>
            <!-- /wp:image -->
            
            <!-- wp:image {"id":517,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="' . esc_url( PHOTOLOGY_URI ) . '/assets/img/man-person-camera-photography-photographer-male-81765-pxhere.com.jpg" alt="" class="wp-image-517"/></figure>
            <!-- /wp:image --></figure>
            <!-- /wp:gallery --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:separator {"customColor":"#343940","className":"is-style-wide"} -->
            <hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#343940;color:#343940"/>
            <!-- /wp:separator -->
            
            <!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"left","style":{"color":{"text":"#949494"},"elements":{"link":{"color":{"text":"var:preset|color|LP2wHl"}}}}} -->
            <p class="has-text-align-left has-text-color has-link-color" style="color:#949494">Proudly Powered by <a href="http://wordpress.org" data-type="URL" data-id="wordpress.org">WordPress</a></p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|ExjbqM"}}}}} -->
            <div class="wp-block-column is-vertically-aligned-center has-link-color"><!-- wp:paragraph {"align":"right","style":{"color":{"text":"#949494"},"elements":{"link":{"color":{"text":"var:preset|color|LP2wHl"}}}}} -->
            <p class="has-text-align-right has-text-color has-link-color" style="color:#949494">Copyright © 2022. All rights reserved.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->',
);
