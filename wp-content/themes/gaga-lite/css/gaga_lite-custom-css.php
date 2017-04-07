<?php
    function gaga_lite_dynamic_styles () {
    $body_font_size = get_theme_mod('gaga-lite-body_font_size');
    $heading1= get_theme_mod('gaga-lite-heading_1_size');
    $heading2= get_theme_mod('gaga-lite-heading_2_size');
    $heading3= get_theme_mod('gaga-lite-heading_3_size');
    $heading4= get_theme_mod('gaga-lite-heading_4_size');
    $heading5= get_theme_mod('gaga-lite-heading_5_size');
    $heading6= get_theme_mod('gaga-lite-heading_6_size');
    
    if($body_font_size == ''){$body_font_size = '13';}
    
    if($heading1 == '' || $heading1 == 'default'){$heading1 = '24';}
    
    if($heading2 == '' || $heading2 == 'default'){$heading2 = '44';}
   
    if($heading3 == '' || $heading3 == 'default'){$heading3 = '18';}
    
    if($heading4 == '' || $heading4 == 'default'){$heading4 = '16';}
    
    if($heading5 == '' || $heading5 == 'default'){$heading5 = '12';}
    
    if($heading6 == '' || $heading6 == 'default'){$heading6 = '10';}
    
    $body_font_font = get_theme_mod('gaga-lite-body_font_font');
    if($body_font_font == ''){$body_font_font = 'Lato';}
    
    $heading1_font= get_theme_mod('gaga-lite-heading_1_font');
    if($heading1_font == ''){$heading1_font = 'Lato';}
    
    $heading2_font= get_theme_mod('gaga-lite-heading_2_font');
    if($heading2_font == ''){$heading2_font = 'Lato';}
    
    $heading3_font= get_theme_mod('gaga-lite-heading_3_font');
    if($heading3_font == ''){$heading3_font = 'Lato';}
    
    $heading4_font= get_theme_mod('gaga-lite-heading_4_font');
    if($heading4_font == ''){$heading4_font = 'Lato';}
    
    $heading5_font= get_theme_mod('gaga-lite-heading_5_font');
    if($heading5_font == ''){$heading5_font = 'Lato';}
    
    $heading6_font= get_theme_mod('gaga-lite-heading_6_font');
    if($heading6_font == ''){$heading6_font = 'Lato';}
    
    $skin_color = get_theme_mod('gaga-lite-skin_color');     
     $body_bg_image = get_theme_mod('gaga-lite-body_background_image');
     
     if($body_bg_image){?>
     <style>
        .site-content{
            background: url( <?php echo $body_bg_image ?>);
        }
     </style>
     <?php    }                                 
    
   
if($body_font_font){
   wp_register_style('gaga-lite-body-font', '//fonts.googleapis.com/css?family='.sanitize_text_field($body_font_font));
           wp_enqueue_style( 'gaga-lite-body-font');
    }
    if($heading1_font){    
   wp_register_style('gaga-lite-heading1_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading1_font));
           wp_enqueue_style( 'gaga-lite-heading1_fon');
       }
 if($heading2_font){
   wp_register_style('gaga-lite-heading2_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading2_font));
           wp_enqueue_style( 'gaga-lite-heading2_font');
       
   }
   if($heading3_font){   
   wp_register_style('gaga-lite-heading3_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading3_font));
           wp_enqueue_style( 'gaga-lite-heading3_font');
       }
 
if($heading4_font){
   wp_register_style('gaga-lite-heading4_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading4_font));
           wp_enqueue_style( 'gaga-lite-heading4_font');
       
   }
if($heading5_font){
   wp_register_style('gaga-lite-heading5_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading5_font));
           wp_enqueue_style( 'gaga-lite-heading5_font');
      }
   if($heading6_font){

   wp_register_style('gaga-lite-heading6_font', '//fonts.googleapis.com/css?family='.sanitize_text_field($heading6_font));
           wp_enqueue_style( 'gaga-lite-heading6_font');
           }           
       
  
   
   ?>
    
        <style>
            h1{
                font-size: <?php echo absint($heading1).'px'; ?>;
                font-family:<?php echo esc_attr($heading1_font); ?>;
                <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
            }
            h2{
                font-size: <?php echo absint($heading2).'px '; ?>;
                font-family:<?php echo esc_attr($heading2_font) ?>;
                <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
                 
            }
            h3{
                font-size: <?php echo absint($heading3).'px'; ?>;
                font-family:<?php echo esc_attr($heading3_font); ?>;
                 <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
            }
            h4{
                font-size: <?php echo absint($heading4).'px'; ?>;
                font-family:<?php echo esc_attr($heading4_font); ?>;
                 <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
            }
            h5{
                font-size: <?php echo absint($heading5).'px'; ?>;
                font-family:<?php echo esc_attr($heading5_font); ?>;
                 <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
            }
            h6{
                font-size: <?php echo absint($heading6).'px'; ?>;
                font-family:<?php echo esc_attr($heading6_font); ?>;
                 <?php if($skin_color){ ?>
                 color:<?php echo esc_attr($skin_color); 
                 }?>
            }
            body{
                font-size: <?php echo absint($body_font_size).'px '; ?>;
                font-family:<?php echo esc_attr($body_font_font);?>;
                
            }
            .footer_widget_view .widget-title{
                color: #010101;
            }
             <?php if($skin_color){ ?>           
            .team-post-wrap>a, #plx_about_section .combine_content .buy a, .blog_latest_post a.read_more, 
            hr.border, .blog-posts .main_like_comment span, .blog-posts-wrap-latest .sub_like_comment span, 
            .nav-next a, .nav-previous a, .blog_read_more a, .team-post-wrap>a, a.view_all_latest, 
            .portfolio_view_all a, .cta_btn_link a, input.wpcf7-submit, #respond .form-submit input, 
            .testimonial_section .bx-wrapper .bx-pager.bx-default-pager a.active, .port_slide #slider-prev, 
            .port_slide #slider-next, .inner .main_like_comment span, #toggle div, .inner .arcive_read_more a, 
            .reply a, .comment-metadata .edit-link a, 
            #plx_service_section .service-posts-wrap .service_image figure img, .archive_pagination a, 
            .pricing_widget .sign_up_price:hover .pricing-position-outer, .pricing_widget .sign_up_price, 
            #plx_shop_section #Container div.mix .item-img a.item-wishlist, 
            .woocommerce-page ul.products li.product a.item-wishlist, 
            #plx_shop_section #Container div.mix .item-img a.cart-contents_product, 
            .woocommerce-page ul.products li.product a.cart-contents_product, 
            .woocommerce-page .inner ul.products li span.onsale, .woocommerce-page .content-area span.onsale, 
            .woocommerce-page div.product a.item-wishlist, .woocommerce-page .content-area button.button.alt, 
            .woocommerce-page .woocommerce-message a.wc-forward, .woocommerce-page #payment #place_order, 
            .woocommerce-page .inner_content_background .entry-content a.add_to_cart, 
            .woocommerce-page .widget_price_filter .price_slider_amount .button, 
            .woocommerce-page #respond input#submit, .woocommerce-page .cart .button,
             .woocommerce-page .cart input.button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
             .woocommerce a.remove:hover, .woocommerce a.remove:hover, 
             #plx_shop_section .shop-product .shop_view_all input, 
             #plx_shop_section #Container div.mix .item-img span.onsale, 
             .woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, 
             .woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle, 
             #plx_shop_section .shop-product .shop_buttons button:before, 
             #plx_shop_section .shop-product .shop_buttons button.active:before, 
             #plx_shop_section .shop-product .shop_buttons button:after, 
             #plx_shop_section .shop-product .shop_buttons button.active:after
            {
                background:<?php echo esc_attr($skin_color).'!important'; ?>
            }
            
                        
            .team-descr,.highlite,.aptf-tweet-content>a,.entry-footer a,.team_section .team-descr, 
            .slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active, 
            .widget-area li:hover a, 
            span.gaga-pricing-plan-sub-text, 
            .slider_area .gaga_lite_slider span.next-page a, 
            .inner .arcive_read_more a:hover,.comment-metadata .edit-link a:hover, 
            .reply a:hover,.main-navigation ul>li a:hover, 
            .inner #respond .form-submit input:hover, .main-navigation .current a,.team-post-wrap>a:hover, 
            .blog_latest_post a.read_more:hover, .blog_read_more a:hover, a.view_all_latest:hover, 
            .portfolio_view_all a:hover, .cta_btn_link a:hover, input.wpcf7-submit:hover, .site-info a:hover, 
            .logged-in-as a, .author a, .nav-links a:hover, .nav-previous a:hover:before, 
            .nav-next a:hover:before, .archive_pagination a:hover:before, .comment-author b.fn, 
            .comment-author .fn a, .comment-awaiting-moderation, .widget-area ul.sub-menu>li:hover a, 
            .tagcloud a, .widget h1 a, .comment-respond h3 small a:hover, 
            a.aptf-tweet-reply.aptf-tweet-action-reply, .pricing_widget .sign_up_price:hover, 
            .pricing_widget .sign_up_price:hover .pricing-position-inner:before, strong,span.tags-links, 
            .comment-content p a, 
            .comment-content dl dd a, .comment-content table tbody tr td a, #wp-calendar tr td a, 
            .about-contents a, a.aptf-tweet-name, .aptf-tweet-content a, .aptf-tweet-content a, 
            #plx_shop_section #Container div.mix .price ins, 
            .woocommerce-page ul.products li.product .price, #plx_shop_section #Container div.mix .price .amount, 
            .woocommerce-page div.product p.price, 
            .woocommerce-page .content-area button.button.alt:hover, 
            .woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover, 
            .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a, 
            .woocommerce-page .woocommerce-info:before, 
            .woocommerce-page .woocommerce-message a.wc-forward:hover, 
            .woocommerce-page .content-area-left h1.page-title, .woocommerce-page .woocommerce-message:before,
             .woocommerce-page div.product .stock, .woocommerce-page .cart .button:hover, 
             .woocommerce-page .cart input.button:hover,
             .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
             td.product-name a, .woocommerce-message a:hover, .woocommerce a.remove, 
             #plx_shop_section .shop-product .shop_view_all input:hover, 
             .woocommerce-page .widget_price_filter .price_slider_amount .button:hover, h2.about_section_title, 
             h2.about_section_title, .service_section_title h2, .team_section h2, .blog_sectio_title h2, 
             .blog_latest_post h2, .portfolio_section h2, .skill_section_title h2, .client_section_title h2, 
             .pricing_section h2, .cta_section_title h2, .testimonial-title h2, 
             #plx_shop_section .shop-product h2, #plx_service_section .service-posts-wrap .service_title a h3, 
             .blog_title a h3, .blog-posts-wrap-latest a h3,.footer_widget_view .contact_title, 
             .inner h2.entry-title, .posted_in a, .woocommerce.widget_product_categories ul li a:hover, 
             .woocommerce .widget_layered_nav ul li a:hover, .price del, 
             #plx_shop_section .shop-product .shop_buttons button:hover, 
             #plx_shop_section .shop-product .shop_buttons button.active
            {
                color: <?php echo esc_attr($skin_color).'!important'; ?>;
            }
            .woocommerce a.remove{
                color: <?php echo esc_attr($skin_color).'!important' ?>;
            }                        
            #plx_service_section .service-posts-wrap:first-child, 
            #plx_service_section .service-posts-wrap:nth-child(2), 
            #plx_service_section .service-posts-wrap:nth-child(odd), 
            .entry-header h1.entry-title a, h1.widget-title, #respond h3, 
            .slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active, 
            .widget-area li:hover, .comments-title, #toggle, .inner .arcive_read_more a:hover, 
            .comment-metadata .edit-link a:hover, .reply a:hover, .inner #respond .form-submit input:hover, 
            #plx_about_section .combine_content .buy a:hover, .team-post-wrap>a:hover, 
            .blog_latest_post a.read_more:hover, .blog_read_more a:hover, .portfolio_view_all a:hover, 
            .cta_btn_link a:hover, input.wpcf7-submit:hover, a.view_all_latest:hover, 
            #plx_service_section .service-posts-wrap, #secondary .widget_search input.search-field, 
            .nav-links a:hover, .widget-area li.menu-item-has-children:hover>a, .archive_pagination a:hover, 
            .pricing_widget .sign_up_price:hover, .woocommerce-page .content-area button.button.alt, 
            .woocommerce-page .content-area button.button.alt, 
            .woocommerce-page .woocommerce-message a.wc-forward, 
            .woocommerce-page #payment #place_order, 
            .woocommerce-page .inner_content_background .entry-content a.add_to_cart, 
            .woocommerce-page .widget_price_filter .price_slider_amount .button, 
            .woocommerce-page #respond input#submit, .woocommerce-page .cart .button, 
            .woocommerce-page .cart input.button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
            #plx_shop_section .shop-product .shop_view_all input
            {
                border-color:<?php echo esc_attr($skin_color).'!important'; ?>;
            }
                        
            .main_footer, .woocommerce-page .woocommerce-message, .woocommerce-page .woocommerce-info
            {
                border-top-color:<?php echo esc_attr($skin_color).'!important' ?>;
            }
                        
            .fill
            {
                fill:<?php echo esc_attr($skin_color); ?>;
            }
            #plx_about_section .combine_content .buy a:hover, .blog_read_more a:hover, .team-post-wrap > a:hover, 
            .blog_latest_post a.read_more:hover, .comment-metadata .edit-link a:hover, a.view_all_latest:hover, 
            .portfolio_view_all a:hover, .cta_btn_link a:hover, input.wpcf7-submit:hover, .nav-links a:hover, 
            .archive_pagination a:hover{
                border-color:<?php echo esc_attr($skin_color).'!important' ?>;
                color:<?php echo esc_attr($skin_color).'!important' ?>;
            }
            .reply a:hover{
                border-color:<?php echo esc_attr($skin_color)?>;
                color:<?php echo esc_attr($skin_color) ?>;
            }
            <?php } ?>
            <?php   
            $color = get_theme_mod('gaga-lite-skin_color');
            if($color){
                $rgba = gaga_lite_hex2rgba(esc_attr($color), 0.88);
            
            ?>
            .portfolio-positing:hover .portfolio_main
            {
                background:<?php echo esc_attr($rgba).'!important'; ?>
            }
            
            <?php } ?>
                        
                #plx_service_section, .woocommerce-page .content-area button.button.alt:hover, 
                .woocommerce-page .woocommerce-message a.wc-forward:hover, .woocommerce-page .cart .button:hover, 
                .woocommerce-page .cart input.button:hover, 
                .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
                .woocommerce-page .inner_content_background .entry-content a.add_to_cart:hover, 
                .woocommerce-page .cart .button:hover, #plx_shop_section .shop-product .shop_view_all input:hover, 
                .woocommerce-page .widget_price_filter .price_slider_amount .button:hover, 
                #respond input#submit:hover
            {
                background-color: transparent !important;
            }
            #plx_about_section .combine_content .buy a:hover, .team-post-wrap > a:hover, 
            #plx_shop_section .shop-product .shop_view_all input:hover, .portfolio_view_all a:hover, 
            a.view_all_latest:hover, .blog_latest_post a.read_more:hover, .cta_btn_link a:hover, 
            input.wpcf7-submit:hover, .blog_read_more a:hover, #respond input#submit:hover, .nav-next a:hover, 
            .nav-previous a:hover, .woocommerce-page .widget_price_filter .price_slider_amount .button:hover, 
            .inner .arcive_read_more a:hover{
                background: transparent!important;
            }
                        
            <?php $pricing_bg_color = get_theme_mod('gaga-lite-pricing_bg_color');
                if($pricing_bg_color == ''){$pricing_bg_color = '#F5F5F5';}
             ?>
                          
            .widget_gaga_lite_pricing>a:hover .widget_footer,.widget_footer
            {
                background-color:<?php echo esc_attr($pricing_bg_color) ?> ;
            }
            <?php $skin_color1 = get_theme_mod('gaga-lite-skin_color');
                if($skin_color1){
                    $rgba1 = gaga_lite_hex2rgba($skin_color1, 0.7);
                
             ?>
                          
            .nav-previous a:hover:after, .nav-next a:hover:after, .archive_pagination a.prev:hover:after, 
            .archive_pagination a.next:hover:after
            {
                background: <?php echo esc_attr($rgba1).'!important' ?> ;
            }
            <?php } ?>
            .yith-wcwl-wishlistexistsbrowse.show a, .yith-wcwl-wishlistexistsbrowse.show span
            {
                display: none;
            }
        </style>
    <?php
    /** font for body **/           
    $query_args = array(
        'family' => 'Lato:100,300,400,700,900'	
    );
    wp_register_style( 'gaga-font-default', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
    wp_enqueue_style('gaga-font-default');
}
add_action('wp_head', 'gaga_lite_dynamic_styles', 100);
?>