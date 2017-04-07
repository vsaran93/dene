<?php
    /**
     * Sanitize
     */
     
function gaga_lite_sanitize_text($input){
    $all_tags = array(
        'span'=>array(
            'class'=>array()
        )
     );
    return wp_kses($input,$all_tags);
    
}

function gaga_lite_sanitize_textarea($input){
    return wp_kses_post( force_balance_tags( $input ) );
}

function gaga_lite_sanitize_url($input){
    return esc_url($input);
}

function gaga_lite_sanitize_checkbox($input){
    if($input == 1){
        return 1;
    }else{
        return '';
    }
}

function gaga_lite_sanitize_page_select($input){
    $gaga_lite_page_lists = gaga_lite_page_lists();
    if(array_key_exists($input,$gaga_lite_page_lists))
    {
        return $input;
    }
    else
    {
        return '';
    }
}

function gaga_lite_sanitize_cat_select($input){
    $gaga_lite_category_lists = gaga_lite_category_lists();
    if(array_key_exists($input,$gaga_lite_category_lists))
    {
        return $input;
    }
    else
    {
        return '';
    }
}

function gaga_lite_sanitize_font_size($input){
   $gaga_lite_font_size = gaga_lite_font_size();
    if(array_key_exists($input,$gaga_lite_font_size))
    {
        return $input;
    }
    else
    {
        return '';
    }
    
}
function gaga_lite_sanitize_font_style($input){
    $gaga_lite_font_lists = gaga_lite_google_font_list();
    if(array_key_exists($input,$gaga_lite_font_lists))
    {
        return $input;
    }
    else
    {
        return '';
    }
}    

function gaga_lite_sanitize_bg_repeat($input){
    
    $bg_repeat = array(
    'no-repeat'  => 'No Repeat',
    'repeat'     => 'Tile',
    'repeat-x'   => 'Tile Horizontally',
    'repeat-y'   => 'Tile Vertically',
);
    if(array_key_exists($input,$bg_repeat))
    {
        return $input;
    }
    else
    {
        return '';
    }
}
function gaga_lite_sanitize_bg_position($input){
    
       $bg_position = array(
    'left'       => 'Left',
    'center'     => 'Center',
    'right'      => 'Right',
);
    
    if(array_key_exists($input,$bg_position))
    {
        return $input;
    }
    else
    {
        return '';
    }
}
function gaga_lite_sanitize_bg_attachment($input){
    
    $bg_attachment = array(
    'fixed'      => 'Fixed',
    'scroll'     => 'Scroll',
);
    
    if(array_key_exists($input,$bg_attachment))
    {
        return $input;
    }
    else
    {
        return '';
    }
}