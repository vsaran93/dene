<?php
/**
 * gaga lite Theme Customizer
 *
 * @package gaga lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gaga_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'gaga_lite_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gaga_lite_customize_preview_js() {
	wp_enqueue_script( 'gaga_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'gaga_lite_customize_preview_js' );

// Our Product detail's
if(class_exists( 'WP_Customize_control')){
    class Theme_Info_Custom_Control extends WP_Customize_Control
    {
        public function render_content()
        {?>
            <label>
                <div class="user_sticky_note">
                    <span class="sticky_info_row"><a class="button" href="http://accesspressthemes.com/theme-demos/?theme=gaga-lite" target="_blank"><?php _e('Live Demo','gaga-lite'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="http://doc.accesspressthemes.com/gaga-lite-doc/" target="_blank"><?php _e('Documentation','gaga-lite'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="https://accesspressthemes.com/support/forum/themes/free-themes/theme-gaga-lite/" target="_blnak"><?php _e('Support Forum','gaga-lite'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="https://wpall.club/" target="_blank"><?php _e('More Wordpress resources','gaga-lite'); ?></a></span>
                </div>
                <h2 class="customize-title"><?php echo esc_html( $this->label ); ?></h2>
                <br />
                <span class="customize-text_editor_desc">                  
                  <img src="<?php echo get_template_directory_uri() ?>/images/feature-list-pro.jpg"/>
                      <ul class="admin-pro-feature-list">   
                        <li><span><?php _e('Fully built on customizer!','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Woocommerce Compatible','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Home Section Re-Order','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('One Click Demo Import','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('3 Menu Styles','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Multiple Team Layout','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Custom Template Color','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Highly configurable One Page home page','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Multiple Blog layout','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Flexible Page Options','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Multiple Portfolio Page Layouts','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Multiple Service Page Layouts','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('4 Page Templates','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('NewsLetter Section','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Feature Section','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Map Section','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Video Section','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('13 Inbuilt useful Shortcodes','gaga-lite'); ?> </span></li>
                        <li><span><?php _e('Advanced Typography Options','gaga-lite'); ?> </span></li>
                    </ul>
                    <a href="https://accesspressthemes.com/wordpress-themes/gaga-pro" class="button button-primary buynow" target="_blank"><?php _e('Buy Now','gaga-lite'); ?></a>
                </span>
            </label>
            <?php
        }
    }
}