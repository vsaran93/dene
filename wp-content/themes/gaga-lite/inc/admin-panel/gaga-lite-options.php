<?php
$gaga_lite_category_lists = gaga_lite_category_lists();
$gaga_lite_page_lists = gaga_lite_page_lists();


$bg_repeat = array(
    'no-repeat'  => __('No Repeat', 'gaga-lite'),
    'repeat'     => __('Tile', 'gaga-lite'),
    'repeat-x'   => __('Tile Horizontally', 'gaga-lite'),
    'repeat-y'   => __('Tile Vertically', 'gaga-lite'),
);
    
$bg_position = array(
    'left'       => __('Left', 'gaga-lite'),
    'center'     => __('Center', 'gaga-lite'),
    'right'      => __('Right', 'gaga-lite'),
);

$bg_attachment = array(
    'fixed'      => __('Fixed', 'gaga-lite'),
    'scroll'     => __('Scroll', 'gaga-lite'),
);

$gaga_lite_enables = array('slider','about','portfolio','service','blog','shop','cta','testimonial','team','client','skill','pricing');
$gaga_lite_menu_titles = array('about','portfolio','service','blog','shop','cta','testimonial','team','client','skill','pricing');
$gaga_lite_section_titles = array('about','portfolio','service','blog','shop','cta','testimonial','team','client','skill','pricing');
$gaga_lite_section_descriptions = array('service','cta','team');
$gaga_lite_section_bgs = array('about','portfolio','service','blog','shop','cta','testimonial','team','client','skill','pricing');
$gaga_lite_section_bgs_images = array('about','portfolio','service','blog','shop','cta','testimonial','team','client','skill');
$gaga_lite_categorys = array('slider','portfolio','service','blog','testimonial','team','client');
$font_fields = array('body_font','heading_1','heading_2','heading_3','heading_4','heading_5','heading_6');

$gaga_lite_font_size = gaga_lite_font_size();

$gaga_lite_font_lists = gaga_lite_google_font_list();

/**
 * Add panel
 * */
$gaga_lite_panels = array(
    'gaga-lite-home_page_panel' => array(
        'id' => 'gaga-lite-home_page_panel',
        'args' => array(
            'title' => __('Home Page Setting', 'gaga-lite'),
            'description' => __('Home page setting pannel', 'gaga-lite'),
            'priority' => 30,
            )
    ),
    'gaga-lite-typography_setting' => array(
        'id' => 'gaga-lite-typography_setting',
        'args' => array(
            'title' => __('Typography', 'gaga-lite'),
            'description' => __('Font setting', 'gaga-lite'),
            'priority' => 31,
            )
    )
 );
 
 /**
 * Add section
  * */
$gaga_lite_sections = array(
/** 
* General setting 
**/
'gaga-lite-general_section'=>array(
  'id'=>'gaga-lite-general_section',
  'args'=>array(
    'title'=>__('General Setting','gaga-lite'),
    'description'=>__('This is General Setting','gaga-lite'),
    'priority'=>1,
    'capability'=>'edit_theme_options',
    'thme_support'=>'',
  )
),


/** 
* Slider section setting 
**/
'gaga-lite-slider_section'=>array(
  'id'=>'gaga-lite-slider_section',
  'args'=>array(
    'title'=>__('Slider Setting','gaga-lite'),
    'description'=>__('Setting of slider section','gaga-lite'),
    'priority'=>1,
    'capability'=>'edit_theme_options',
    'thme_support'=>'',
    'panel'=>'gaga-lite-home_page_panel'
  )
),

/** 
 * Header section setting 
**/
'gaga-lite-header_section'=>array(
    'id'=>'gaga-lite-header_section',
    'args'=>array(
        'title'=>__('Header Setting','gaga-lite'),
        'description'=>__('Setting of header section','gaga-lite'),
        'priority'=>2,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
    )
),

'gaga-lite-about_section' =>array(
    'id'=>'gaga-lite-about_section',
    'args'=>array(
        'title'=>__('About Us Setting','gaga-lite'),
        'description'=>__('Setting of about section','gaga-lite'),
        'priority' => 3,
        'capability'=>'edit_theme_options',
        'theme_support' =>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** 
 * Portfolio section setting 
**/
'gaga-lite-portfolio_section' =>array(
    'id'=>'gaga-lite-portfolio_section',
    'args'=>array(
        'title'=>__('Portfolio Setting','gaga-lite'),
        'description'=>__('Setting of Portfolio section','gaga-lite'),
        'priority'=>8,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** 
 * Our service section setting 
**/
'gaga-lite-service_section'=>array(
    'id'=>'gaga-lite-service_section',
    'args'=>array(
        'title'=>__('Our Service Setting','gaga-lite'),
        'description'=>__('Setting of our service section','gaga-lite'),
        'priority' => 6,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** 
 * Blog section setting 
**/
'gaga-lite-blog_section'=>array(
    'id'=>'gaga-lite-blog_section',
    'args'=>array(
        'title'=>__('Blog Section','gaga-lite'),
        'description'=>__('Seting of blog section','gaga-lite'),
        'priority'=>6,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
'gaga-lite-shop_section'=>array(
    'id'=>'gaga-lite-shop_section',
    'args'=>array(
        'title'=>__('Shop Section','gaga-lite'),
        'priority'=>6,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** Our skills section **/
'gaga-lite-skill_section'=>array(
    'id'=>'gaga-lite-skill_section',
    'args'=>array(
        'title'=>__('Skill Section','gaga-lite'),
        'description'=>__('This is our skill','gaga-lite'),
        'priority'=>'7',
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/**
 * Call To Action section setting
 * */
 'gaga-lite-cta_section'=>array(
    'id'=>'gaga-lite-cta_section',
    'args'=>array(
        'title'=>__('Call To Action Setting','gaga-lite'),
        'description'=>__('This is call to action setting','gaga-lite'),
        'priority'=>12,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'                                                            
    )        
 ),                  
/** 
 * Testimonial section setting 
**/
'gaga-lite-testimonial_section'=>array(
    'id'=>'gaga-lite-testimonial_section',
    'args'=>array(
        'title'=>__('Testimonial Setting','gaga-lite'),
        'description'=>__('Setting of testimonial section','gaga-lite'),
        'priority'=>13,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel',
    )
),
/** 
 * Team section setting 
**/
'gaga-lite-team_section'=>array(
    'id'=>'gaga-lite-team_section',
    'args'=>array(
        'title'=>__('Team Setting','gaga-lite'),
        'description'=>__('Setting of team section','gaga-lite'),
        'priority'=>4,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** 
 * Our client section setting 
**/
'gaga-lite-client_section'=>array(
    'id'=>'gaga-lite-client_section',
    'args'=>array(
        'title'=>__('Our client','gaga-lite'),
        'description'=>__('Setting of client','gaga-lite'),
        'priority'=>10,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),
/** 
 * Our client section setting 
**/
'gaga-lite-pricing_section'=>array(
    'id'=>'gaga-lite-pricing_section',
    'args'=>array(
        'title'=>__('Pricing Section','gaga-lite'),
        'description'=>__('Setting of Pricing Section','gaga-lite'),
        'priority'=>11,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-home_page_panel'
    )
),

'gaga-lite-body_font'=>array(
    'id'=>'gaga-lite-body_font',
    'args'=>array(
        'title'=>__('Body','gaga-lite'),
        'description'=>__('Body Font Setting','gaga-lite'),
        'priority'=>15,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_1'=>array(
    'id'=>'gaga-lite-heading_1',
    'args'=>array(
        'title'=>__('Heading 1 ','gaga-lite'),
        'description'=>__('Setting of Heading 1','gaga-lite'),
        'priority'=>16,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_2'=>array(
    'id'=>'gaga-lite-heading_2',
    'args'=>array(
        'title'=>__('Heading 2','gaga-lite'),
        'description'=>__('Setting of Heading 2','gaga-lite'),
        'priority'=>17,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_3'=>array(
    'id'=>'gaga-lite-heading_3',
    'args'=>array(
        'title'=>__('Heading 3','gaga-lite'),
        'description'=>__('Setting of Heading 3','gaga-lite'),
        'priority'=>18,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_4'=>array(
    'id'=>'gaga-lite-heading_4',
    'args'=>array(
        'title'=>__('Heading 4','gaga-lite'),
        'description'=>__('Setting of Heading 4','gaga-lite'),
        'priority'=>19,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_5'=>array(
    'id'=>'gaga-lite-heading_5',
    'args'=>array(
        'title'=>__('Heading 5','gaga-lite'),
        'description'=>__('Setting of Heading 5','gaga-lite'),
        'priority'=>20,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
'gaga-lite-heading_6'=>array(
    'id'=>'gaga-lite-heading_6',
    'args'=>array(
        'title'=>__('Heading 6','gaga-lite'),
        'description'=>__('Setting of Heading 6','gaga-lite'),
        'priority'=>21,
        'capability'=>'edit_theme_options',
        'theme_support'=>'',
        'panel'=>'gaga-lite-typography_setting'
    )
),
);
  
  /**
   * Single setting add 
  * */
$wp_customize->add_setting(
    'gaga-lite-about_button_text',
    array(
        'default'=>'',
        'sanitize_callback' => 'gaga_lite_sanitize_text',
    )
);
$wp_customize->add_setting(
    'gaga-lite-about_button_link',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);


/** CTA description **/
$wp_customize->add_setting(
    'gaga-lite-cta_desc',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_textarea'
    )
);
/** CTA button text **/
$wp_customize->add_setting(
    'gaga-lite-cta_btn_text',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);
/** CTA button link **/
$wp_customize->add_setting(
    'gaga-lite-cta_btn_link',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);




$wp_customize->add_setting(
    'gaga-lite-about_page_select',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_page_select'                
    )
);


$wp_customize->add_setting(
    'gaga-lite-our_skill1',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-our_skill2',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-our_skill3',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-our_skill4',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);

$wp_customize->add_setting(
    'gaga-lite-our_skill_percent_1',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-our_skill_percent_2',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);

    $wp_customize->add_setting(
    'gaga-lite-our_skill_percent_3',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-our_skill_percent_4',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);



/** Enable Disable **/
$wp_customize->add_setting(
    'gaga-lite-slider_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga_lite_full_slider',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-about_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-portfolio_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-service_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-blog_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-cta_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-testimonial_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-team_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);


$wp_customize->add_setting(
    'gaga-lite-client_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-skill_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);
$wp_customize->add_setting(
    'gaga-lite-pricing_enable_disable',
    array(
        'default'=>0,
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox'
    )
);  

/** Menu Title **/
$wp_customize->add_setting(
    'gaga-lite-about_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
); 
$wp_customize->add_setting(
    'gaga-lite-portfolio_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
); 
$wp_customize->add_setting(
    'gaga-lite-service_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-blog_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-cta_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-testimonial_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-team_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
); 

$wp_customize->add_setting(
    'gaga-lite-client_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-skill_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-pricing_menu_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);

/** Section TItle **/
$wp_customize->add_setting(
    'gaga-lite-about_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-portfolio_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-service_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-blog_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-cta_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-testimonial_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-team_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);

$wp_customize->add_setting(
    'gaga-lite-client_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-skill_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
    )
);
$wp_customize->add_setting(
    'gaga-lite-pricing_section_title',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_text'
            )
        );
        
$wp_customize->add_setting(
    'gaga-lite-service_desc',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_textarea'
    )
);

$wp_customize->add_setting(
    'gaga-lite-cta_desc',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_textarea'
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_desc',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_textarea'
    )
);
        
        // BG COlor
$wp_customize->add_setting(
    'gaga-lite-about_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-cta_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-testimonial_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);



$wp_customize->add_setting(
    'gaga-lite-client_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);

$wp_customize->add_setting(
    'gaga-lite-skill_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);
$wp_customize->add_setting(
    'gaga-lite-pricing_bg_color',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
);



// bg image
$wp_customize->add_setting(
    'gaga-lite-about_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-cta_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-testimonial_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);



$wp_customize->add_setting(
    'gaga-lite-client_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

$wp_customize->add_setting(
    'gaga-lite-skill_bg_image',
    array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_url',
    )
);

// bg repeat
$wp_customize->add_setting(
    'gaga-lite-about_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-cta_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-testimonial_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);



$wp_customize->add_setting(
    'gaga-lite-client_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-skill_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

$wp_customize->add_setting(
    'gaga-lite-pricing_bg_repeat',
    array(
        'default' => 'no-repeat',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_repeat',
    )
);

// bg repeat
$wp_customize->add_setting(
    'gaga-lite-about_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);
$wp_customize->add_setting(
    'gaga-lite-cta_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-testimonial_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);



$wp_customize->add_setting(
    'gaga-lite-client_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-skill_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

$wp_customize->add_setting(
    'gaga-lite-pricing_bg_position',
    array(
        'default' => 'right',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_position',
    )
);

// Bg attachment
$wp_customize->add_setting(
    'gaga-lite-about_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-cta_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);
$wp_customize->add_setting(
    'gaga-lite-shop_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);
$wp_customize->add_setting(
    'gaga-lite-testimonial_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);



$wp_customize->add_setting(
    'gaga-lite-client_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-skill_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

$wp_customize->add_setting(
    'gaga-lite-pricing_bg_attachment',
    array(
        'default' => 'fixed',
        'sanitize_callback'=>'gaga_lite_sanitize_bg_attachment',
    )
);

// section category
$wp_customize->add_setting(
    'gaga-lite-slider_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-portfolio_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-service_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-blog_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-testimonial_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-team_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);

$wp_customize->add_setting(
    'gaga-lite-client_cat',
    array(
        'default'=>'',
        'sanitize_callback'=>'gaga_lite_sanitize_cat_select'
    )
);
$wp_customize->add_setting(
       'gaga-lite-header_logo',
       array(
            'default' => '',
            'sanitize_callback'=>'gaga_lite_sanitize_text',
        )
            ) ;
            
                                    
// font size
$wp_customize->add_setting(
    'gaga-lite-body_font_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_1_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_2_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_3_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_4_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_5_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_6_size',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_size'
    )
);

// font family
$wp_customize->add_setting(
    'gaga-lite-body_font_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_1_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);
$wp_customize->add_setting(
    'gaga-lite-heading_2_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_3_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_4_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);
$wp_customize->add_setting(
    'gaga-lite-body_background_image',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);
$wp_customize->add_setting(
    'gaga-lite-heading_5_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);

$wp_customize->add_setting(
    'gaga-lite-heading_6_font',
    array(
        'default'=>'',
        'transport'   => 'postMessage',
        'sanitize_callback'=>'gaga_lite_sanitize_font_style'
    )
);


        
$wp_customize->add_setting(
   'gaga-lite-header_menu_position',
   array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_checkbox',
    )
        ) ;
$wp_customize->add_setting(
   'gaga-lite-title_bg',
   array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
        ) ;

$wp_customize->add_setting(
   'gaga-lite-title_bg',
   array(
        'default' => '',
        'sanitize_callback'=>'gaga_lite_sanitize_text',
    )
    );


$wp_customize->add_setting(
   'gaga-lite-skin_color',
   array(
        'default' => '',
        'transport'   => 'postMessage',
        'sanitize_callback' => 'gaga_lite_sanitize_text'
    )
        ) ;

$wp_customize->add_setting(
    'gaga-lite-team_button_link',
   array(
        'default' => '',
        'sanitize_callback' => 'gaga_lite_sanitize_text'
    ) 
);
$wp_customize->add_setting(
    'gaga-lite-custom_menu_enable',
    array(
        'default' => '',
        'sanitize_callback' => 'gaga_lite_sanitize_checkbox'
    ) 
);



  /** Single controll add
 **/
$gaga_lite_controls = array(

        /** about button text **/
    'gaga-lite-about_button_text' => array(
        'id' => 'gaga-lite-about_button_text',
        'args' => array(
            'label' => __('Button text Title', 'gaga-lite'),
            'section' => 'gaga-lite-about_section',
            'type' => 'text',
            'priority' => 17,
        )
    ),
    /** about button link **/
    'gaga-lite-about_button_link' => array(
        'id' => 'gaga-lite-about_button_link',
        'args' => array(
            'label' => __('Button Link', 'gaga-lite'),
            'section' => 'gaga-lite-about_section',
            'type' => 'text',
            'priority' => 18,
        )
    ),
    

    /** CTA description **/
    'gaga-lite-cta_desc'=>array(
        'id'=>'gaga-lite-cta_desc',
        'args'=>array(
            'label'=>__('CTA Description','gaga-lite'),
            'section'=>'gaga-lite-cta_section',
            'type'=>'textarea',
            'priority'=>12,
        )
    ),
    /** CTA button text **/
    'gaga-lite-cta_btn_text'=>array(
        'id'=>'gaga-lite-cta_btn_text',
        'args'=>array(
            'label'=>__('CTA Button Text','gaga-lite'),
            'section'=>'gaga-lite-cta_section',
            'type'=>'text',
            'priority'=>13
        )
    ),
    /** CTA button link **/
    'gaga-lite-cta_btn_link'=>array(
        'id'=>'gaga-lite-cta_btn_link',
        'args'=>array(
            'label'=>__('CTA Button Link','gaga-lite'),
            'section'=>'gaga-lite-cta_section',
            'type'=>'text',
            'priority'=>14
        )
    ),

    'gaga-lite-body_font'=>array(
        'id'=>'gaga-lite-body_font',
        'args'=>array(
            'label'=>__('Body Text','gaga-lite'),
            'section'=>'gaga-lite-body_font_section',
            'type'=>'text',
            'priority'=>15,
        )
    ),
    /** About page select**/
    'gaga-lite-about_page_select'=>array(
        'id'=>'gaga-lite-about_page_select',
        'args'=>array(
            'label'=>__('Select page','gaga-lite'),
            'section'=>'gaga-lite-about_section',
            'type'=>'select',
            'choices'=>$gaga_lite_page_lists,
            'priority'=>16,
        )
    ),
    
    'gaga-lite-our_skill1'=>array(
        'id'=>'gaga-lite-our_skill1',
        'args'=>array(
            'label'=>__('Our Skill Title 1','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'text',
            'priority'=>16
        )
    ),
    'gaga-lite-our_skill2'=>array(
        'id'=>'gaga-lite-our_skill2',
        'args'=>array(
            'label'=>__('Our Skill Title 2','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'text',
            'priority'=>17
        )
    ),
    'gaga-lite-our_skill3'=>array(
        'id'=>'gaga-lite-our_skill3',
        'args'=>array(
            'label'=>__('Our Skill Title 3','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'text',
            'priority'=>18
        )
    ),
    'gaga-lite-our_skill4'=>array(
        'id'=>'gaga-lite-our_skill4',
        'args'=>array(
            'label'=>__('Our Skill Title 4','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'text',
            'priority'=>19
        )
    ),
    'gaga-lite-our_skill_percent_1'=>array(
        'id'=>'gaga-lite-our_skill_percent_1',
        'args'=>array(
            'label'=>__('Our Skill Percentage 1','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'number',
            'priority'=>16
        )
    ),
    'gaga-lite-our_skill_percent_2'=>array(
        'id'=>'gaga-lite-our_skill_percent_2',
        'args'=>array(
            'label'=>__('Our Skill Percentage 2','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'number',
            'priority'=>17
        )
    ),
    'gaga-lite-our_skill_percent_3'=>array(
        'id'=>'gaga-lite-our_skill_percent_3',
        'args'=>array(
            'label'=>__('Our Skill Percentage 3','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'number',
            'priority'=>18
        )
    ),
    'gaga-lite-our_skill_percent_4'=>array(
        'id'=>'gaga-lite-our_skill_percent_4',
        'args'=>array(
            'label'=>__('Our Skill Percentage 4','gaga-lite'),
            'section'=>'gaga-lite-skill_section',
            'type'=>'number',
            'priority'=>19
        )
    ),
    'gaga-lite-header_menu_position' =>array(
        'id'=>'gaga-lite-header_menu_position',
        'args'=>array(
           'label'      => __( 'Check to show menu at top', 'gaga-lite' ),
           'section'    => 'gaga-lite-header_section',
           'type'=>'checkbox',
           'priority'=>1,
           
      
   )
   ),
   

   'gaga-lite-team_button_link' =>array(
    'id'=>'gaga-lite-team_button_link',
    'args'=>array(
       'label'      => __( 'Please enter team buton link', 'gaga-lite' ),
       'section'    => 'gaga-lite-team_section',
       'type'=>'text',
       'priority'=>7,
       
      
   )
   ),
   
     'gaga_lite_full_slider'=>array(
        'id'=>'gaga_lite_full_slider',
        'args'=>array(
            'label'=>__('Enable Full Screen Slider','gaga-lite'),
            'section'=>'gaga-lite-slider_section',
            'type'=>'checkbox',
            'priority'=>2
        )
     ),
	'gaga-lite-skin_color'=>array(
    'id'=>'gaga-lite-skin_color',
    'args'=>array(
		'label'    => __( 'Select Skin Color', 'gaga-lite' ),
		'section'  => 'gaga-lite-general_section',
		'type'     => 'radio',
		'choices'  => array(
            '' => 'Default',
			'#ec1e31'  => 'Red',
			'#1b8ad4' => 'Blue',
            '#43ab49'  => 'Green',
		),
	)
    ),
    'gaga-lite-custom_menu_enable'=>array(
        'id'=>'gaga-lite-custom_menu_enable',
        'args'=>array(
            'label'=>__('Check to enable primary menu','gaga-lite'),
            'section'=>'gaga-lite-header_section',
            'type'=>'checkbox',
            'priority'=>1
        )
    ),
);
  

    $gaga_lite_bg_image_controls['gaga-lite-header_logo']=array(
       'id'=>'gaga-lite-header_logo',
       'args'=>
       array(
           'label'      => __( 'Upload a logo', 'gaga-lite' ),
           'section'    => 'gaga-lite-header_section',
           'settings'   => 'gaga-lite-header_logo',
      
   )
    );

  
    $gaga_lite_bg_image_controls['gaga-lite-title_bg']=array(
       'id'=>'gaga-lite-title_bg',
       'args'=>
       array(
           'label'      => __( 'Upload background for title', 'gaga-lite' ),
           'section'    => 'gaga-lite-general_section',
           'settings'   => 'gaga-lite-title_bg',
    )
    );


     
    
/** ============================================================================================================ **/
/** Multi control add **/   
    
/** Multi enable/disable control **/
    foreach($gaga_lite_enables as $gaga_lite_enable):
        $gaga_lite_controls[]=array(
            'id'=>'gaga-lite-'.$gaga_lite_enable.'_enable_disable',
            'args'=>array(
                'label'=>__('Check To Enable','gaga-lite'),
                'section'=>'gaga-lite-'.$gaga_lite_enable.'_section',
                'type'=>'checkbox',
                'priority'=>1,
            )
        );
    endforeach;
    
    /** Multi menu title control **/
    foreach($gaga_lite_menu_titles as $gaga_lite_menu_title):
        $gaga_lite_controls []= array(
            'id'=>'gaga-lite-'.$gaga_lite_menu_title.'_menu_title',
            'args'=>array(
                'label'=>__('Enter menu title','gaga-lite'),
                'section'=>'gaga-lite-'.$gaga_lite_menu_title.'_section',
                'type'=>'text',
                'priority'=>2,
            )
        );
    endforeach;
        
        /** Multi section title control **/
    foreach($gaga_lite_section_titles as $gaga_lite_section_title):
        $gaga_lite_controls []= array(
            'id'=>'gaga-lite-'.$gaga_lite_section_title.'_section_title',
            'args'=>array(
                'label'=>__('Enter section title','gaga-lite'),
                'section'=>'gaga-lite-'.$gaga_lite_section_title.'_section',
                'type'=>'text',
                'priority'=>3,
            )
        );
    endforeach;
        
        /** Multi section description control **/
    foreach($gaga_lite_section_descriptions as $gaga_lite_section_description):
        $gaga_lite_controls []= array(
            'id'=>'gaga-lite-'.$gaga_lite_section_description.'_desc',
            'args'=>array(
                'label'=>__('Enter section descriptiopn','gaga-lite'),
                'section'=>'gaga-lite-'.$gaga_lite_section_description.'_section',
                'type'=>'textarea',
                'priority'=>4,
            )
        );
    endforeach;
        
        /** Multiple bg color control **/
    foreach($gaga_lite_section_bgs as $gaga_lite_section_bg):
        $gaga_lite_bg_color_controls[] = array(
            'id'=> 'gaga-lite-'.$gaga_lite_section_bg.'bg_color',
            'args'=>array(
                'label'=>__('Select BG color','gaga-lite'),
                'section'=> 'gaga-lite-'.$gaga_lite_section_bg.'_section',
                'settings'=>'gaga-lite-'.$gaga_lite_section_bg.'_bg_color',
                'priority'=>19,
            )
        );
    endforeach;
        
        
        
        /** Multiple bg image control **/
    $gaga_lite_bg_image_controls = array();
    foreach($gaga_lite_section_bgs_images as $gaga_lite_section_bg):
        $gaga_lite_bg_image_controls[] = array(
            'id'=>'gaga-lite-'.$gaga_lite_section_bg.'_bg_image',
            'args'=>array(
                'label'=>__('Select BG Image','gaga-lite'),
                'section'=> 'gaga-lite-'.$gaga_lite_section_bg.'_section',
                'settings'=>'gaga-lite-'.$gaga_lite_section_bg.'_bg_image',
                'priority'=>20,
            )
            
        );
        
        
    endforeach;
               
          /** Multiple bg image repeat control **/ 
    foreach($gaga_lite_section_bgs_images as $gaga_lite_section_bg):
        $gaga_lite_controls[] = array(
            'id'=> 'gaga-lite-'.$gaga_lite_section_bg.'_bg_repeat',
            'args'=>array(
                'label'=>__('Background style','gaga-lite'),
                'section'=> 'gaga-lite-'.$gaga_lite_section_bg.'_section',
                'type'=>'select',
                'choices'=>$bg_repeat,
                'priority'=>21,
                'active_callback'=>'bg_image_option_'.$gaga_lite_section_bg
            )
        );
    endforeach;
        
        /** Multiple bg image position control **/         
    foreach($gaga_lite_section_bgs_images as $gaga_lite_section_bg):
        $gaga_lite_controls[] = array(
            'id'=> 'gaga-lite-'.$gaga_lite_section_bg.'_bg_position',
            'args'=>array(
                'label'=>__('Background Position','gaga-lite'),
                'section'=> 'gaga-lite-'.$gaga_lite_section_bg.'_section',
                'type'=>'select',
                'choices'=>$bg_position,
                'priority'=>22,
                'active_callback'=>'bg_image_option_'.$gaga_lite_section_bg
            )
        );
    endforeach;
        
        /** Multiple bg image attachment control **/         
    foreach($gaga_lite_section_bgs_images as $gaga_lite_section_bg):
        $gaga_lite_controls[] = array(
            'id'=> 'gaga-lite-'.$gaga_lite_section_bg.'_bg_attachment',
            'args'=>array(
                'label'=>__('Background Attachment','gaga-lite'),
                'section'=> 'gaga-lite-'.$gaga_lite_section_bg.'_section',
                'type'=>'select',
                'choices'=>$bg_attachment,
                'priority'=>23,
                'active_callback'=>'bg_image_option_'.$gaga_lite_section_bg
            )
        );
    endforeach;
    
    /** Multiple category select control **/     
    foreach($gaga_lite_categorys as $gaga_lite_category):
        $gaga_lite_controls[]=array(
            'id'=>'gaga-lite-'.$gaga_lite_category.'_cat',
            'args'=>array(
                'label'=>__('Select category', 'gaga-lite'),
                'section'=>'gaga-lite-'.$gaga_lite_category.'_section',
                'type'=>'select',
                'choices'=>$gaga_lite_category_lists,
                'priority'=>3,
            )
        );
    endforeach;
        
        /** Multiple font size control **/         
    foreach($font_fields as $font_field):
        $gaga_lite_controls[]=array(
            'id'=>'gaga-lite-'.$font_field.'_size',
            'args'=>array(
                'label'=>'Font Size','gaga-lite',
                'section'=>'gaga-lite-'.$font_field,
                'type'=>'select',
                'choices'=>$gaga_lite_font_size,
                'priority'=>1
            )
        );
    endforeach;
    
    /** Multiple font control **/         
    foreach($font_fields as $font_field):
        $gaga_lite_controls[]=array(
            'id'=>'gaga-lite-'.$font_field.'_font',
            'args'=>array(
                'label'=>'Font','gaga-lite',
                'section'=>'gaga-lite-'.$font_field,
                'type'=>'select',
                'choices'=>$gaga_lite_font_lists,
                'priority'=>2,
                
            )
        );
    endforeach;
            

/** ============================================================================================================ **/         
    $gaga_lite_bg_image_controls['gaga-lite-header_logo']=array(
           'id'=>'gaga-lite-header_logo',
           'args'=>
           array(
               'label'      => __( 'Upload a logo', 'gaga-lite' ),
               'section'    => 'gaga-lite-header_section',
               'settings'   => 'gaga-lite-header_logo',
          
       )
   );

      $gaga_lite_bg_image_controls['gaga-lite-title_bg']=array(
           'id'=>'gaga-lite-title_bg',
           'args'=>
           array(
               'label'      => __( 'Upload background for title', 'gaga-lite' ),
               'section'    => 'gaga-lite-general_section',
               'settings'   => 'gaga-lite-title_bg',
        )
   );
      $gaga_lite_bg_image_controls['gaga-lite-body_background_image']=array(
           'id'=>'gaga-lite-body_background_image',
           'args'=>
           array(
               'label'      => __( 'Choose Body BG Image', 'gaga-lite' ),
               'section'    => 'gaga-lite-general_section',
               'settings'   => 'gaga-lite-body_background_image',
        )
   );
/** Theme pro Version info **/
    $wp_customize->add_section(
        'gaga_pro_features',
        array(
          'title'           =>  __('Important Links', 'gaga-lite'),
          'priority'        =>  '600', )
    );
    
    $wp_customize->add_setting('theme_info_theme',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control( new Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
        'label' => __( 'Gaga Pro Features' , 'gaga-lite' ),
        'section' => 'gaga_pro_features',
    )));