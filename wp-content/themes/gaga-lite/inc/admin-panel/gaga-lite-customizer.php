<?php
/**
 * Enqueue scripts and styles for admin.
 */
function gaga_lite_customizer_scripts() {
    wp_enqueue_style( 'gaga-lite-customizer-style' , get_template_directory_uri().'/css/customizer-custom.css');
    wp_enqueue_script( 'gaga-lite-customizer-script' , get_template_directory_uri().'/js/customizer-custom.js',array('jquery'), '20130508', true);
    wp_localize_script( 'gaga-lite-customizer-script' , 'gaga_lite_template_path'  , array('template_path'=> get_template_directory_uri()));
}

add_action( 'customize_controls_enqueue_scripts', 'gaga_lite_customizer_scripts');


add_action('customize_register','gaga_lite_add_customizer');
function gaga_lite_add_customizer($wp_customize){
    
    require get_template_directory().'/inc/admin-panel/gaga-lite-options.php';
    require get_template_directory().'/inc/admin-panel/gaga-lite-sanitize.php';

    /** Remove unuse default section**/
    $wp_customize->remove_section( 'header_image');
    $wp_customize->remove_section( 'background_image');

    /** Add panel loop**/
    foreach($gaga_lite_panels as $gaga_lite_panel):
        $wp_customize->add_panel($gaga_lite_panel['id'],$gaga_lite_panel['args']);
    endforeach;
    
    /** Add section loop**/
    foreach($gaga_lite_sections as $gaga_lite_section):
        $wp_customize->add_section($gaga_lite_section['id'],$gaga_lite_section['args']);
    endforeach;

    /** Add controls loop**/
    foreach($gaga_lite_controls as $gaga_lite_control) :
        $wp_customize->add_control($gaga_lite_control['id'], $gaga_lite_control['args']);
    endforeach;

    /** Add bg color loop**/
    foreach($gaga_lite_bg_color_controls as $gaga_lite_bg_color_control):
        $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,$gaga_lite_bg_color_control['id'],$gaga_lite_bg_color_control['args']));
    endforeach;
    /** Add bg image loop**/
    foreach($gaga_lite_bg_image_controls as $gaga_lite_bg_image_control):
        $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,$gaga_lite_bg_image_control['id'],$gaga_lite_bg_image_control['args']));
    endforeach;
    
     function bg_image_option_about( $control ) {
            if($control->manager->get_setting('gaga-lite-about_bg_image')->value() != ''){
                return true;
                
            }else{
                return false;
            }
        }
        function bg_image_option_portfolio( $control ) {
            if($control->manager->get_setting('gaga-lite-portfolio_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        } 
        function bg_image_option_service( $control ) {
            if($control->manager->get_setting('gaga-lite-service_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        } 
        function bg_image_option_blog( $control ) {
            if($control->manager->get_setting('gaga-lite-blog_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_shop( $control ) {
            if($control->manager->get_setting('gaga-lite-shop_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_cta( $control ) {
            if($control->manager->get_setting('gaga-lite-cta_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_testimonial( $control ) {
            if($control->manager->get_setting('gaga-lite-testimonial_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_team( $control ) {
            if($control->manager->get_setting('gaga-lite-team_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        
        function bg_image_option_client( $control ) {
            if($control->manager->get_setting('gaga-lite-client_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_skill( $control ) {
            if($control->manager->get_setting('gaga-lite-skill_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function bg_image_option_pricing( $control ) {
            if($control->manager->get_setting('gaga-lite-pricing_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
}
?>