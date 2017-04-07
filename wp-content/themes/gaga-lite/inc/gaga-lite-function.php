<?php
function gaga_lite_page_lists(){
    $pages = get_pages();
    $page_lists = array();
    $page_lists[0] = __('Select Page', 'gaga-lite'); 
    foreach($pages as $page) :
        $page_lists[$page->ID] = $page->post_title;
    endforeach;
    return $page_lists;
}
function gaga_lite_font_size(){
    $font_sizes['default'] = 'Default';
    for($i = 12;$i<=70;$i++)
    {
         $font_sizes[$i] = $i.' px';
          
    }
    return $font_sizes;
}

function gaga_lite_category_lists(){
    $categories = get_categories(
        array(
            'hide_empty' => 0,
            'exclude' => 1
        )
    );

    
    $category_lists = array();
    $category_lists[0] = __('Select Category', 'gaga-lite');
    foreach($categories as $category) :
        $category_lists[$category->term_id] = $category->name;
    endforeach;
    return $category_lists;
}
function  gaga_lite_google_font_list()
{
    return $fonts = array(
    'Lato'=>'Lato',
    'Oswald'=>'Oswald',
    'Arvo'=>'Arvo',     
    );
}

if(! function_exists('gaga_lite_get_menu_sections')){
function gaga_lite_get_menu_sections(){
    $sections = array('about','team','service','shop','skill','portfolio','client','testimonial','pricing','blog','cta');
    $enabled_section = array();
    foreach($sections as $section) :
        if(get_theme_mod('gaga-lite-'.$section.'_enable_disable') == 1) :
            $enabled_section[] = array(
                'id' => 'plx_'.$section.'_section',
                'menu_text' => get_theme_mod('gaga-lite-'.$section.'_menu_title'),
                'section' => $section,
            ); 
        endif;
    endforeach;
    return $enabled_section;
}
}
if(!function_exists('gaga_lite_bg_color')){
function gaga_lite_bg_color()
{
    $enabled_sections = gaga_lite_get_menu_sections();
    ?>
        <style>
            <?php foreach($enabled_sections as $enabled_section) : ?>
                <?php
                    $section = $enabled_section['section'];
                    $section_bg_color =      get_theme_mod('gaga-lite-'.$section.'_bg_color');
                    $section_bg_image =    get_theme_mod('gaga-lite-'.$section.'_bg_image');
                    $section_bg_repeat = get_theme_mod('gaga-lite-'.$section.'_bg_repeat', 'no-repeat');
                    $section_bg_position = get_theme_mod('gaga-lite-'.$section.'_bg_position', 'left');
                    $section_bg_attachment = get_theme_mod('gaga-lite-'.$section.'_bg_attachment', 'fixed');
                ?>
                #plx_<?php echo wp_kses_post($section).'_section'; ?>{
                    background: <?php echo esc_attr($section_bg_color).' url('.esc_url_raw($section_bg_image).') '.$section_bg_repeat.' '.$section_bg_attachment.' '.$section_bg_position; ?>
                }
            <?php endforeach; ?>
        </style>
    <?php
}
}


add_action('wp_head','gaga_lite_bg_color');

function gaga_lite_hex2rgba($color, $opacity = false) {

$default = 'rgb(0,0,0)';

//Return default if no color provided
if(empty($color))
      return $default; 

//Sanitize $color if "#" is provided 
    if ($color[0] == '#' ) {
    	$color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
            return $default;
    }

    //Convert hexadec to rgb
    $rgb =  array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if($opacity){
    	if(abs($opacity) > 1)
    		$opacity = 1.0;
    	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
    	$output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
}
