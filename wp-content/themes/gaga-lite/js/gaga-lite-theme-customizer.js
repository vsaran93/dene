jQuery(document).ready(function($){
        
    wp.customize( 'gaga-lite-body_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'body' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-body_font_size', function( value ) {
		value.bind( function( newval ) {
			$( 'p' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );        
    wp.customize( 'gaga-lite-heading_1_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h1' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-heading_2_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h2' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-heading_3_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h3' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-heading_4_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h4' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-heading_5_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h5' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    wp.customize( 'gaga-lite-heading_6_size', function( value ) {
		value.bind( function( newval ) {
			$( 'h6' ).attr( 'style', 'font-size: '+newval+'px !important' );
		} );
	} );
    
    wp.customize( 'gaga-lite-body_font_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'body' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_1_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h1' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_2_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h2' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_3_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h3' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_4_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h4' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_5_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h5' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-heading_6_font', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h6' ).attr( 'style', 'font-family: '+newval1+' !important' );
            WebFont.load({
            google: {
              families: [newval1]
            }
          });
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h1' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h2' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h3' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h4').attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h5' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( 'h6' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
  
    
  wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( '.blog_read_more a, .team-post-wrap>a, a.view_all_latest, .portfolio_view_all a, .cta_btn_link a, input.wpcf7-submit, #plx_about_section .combine_content .buy a,.blog_latest_post a.read_more,hr.border,.blog-posts .main_like_comment span, .blog-posts-wrap-latest .sub_like_comment span,.nav-next a,.nav-previous a,.blog_read_more a, .team-post-wrap>a, a.view_all_latest, .portfolio_view_all a, .cta_btn_link a, input.wpcf7-submit, #respond .form-submit input,.testimonial_section .bx-wrapper .bx-pager.bx-default-pager a.active,.port_slide #slider-prev, .port_slide #slider-next,.inner .main_like_comment span,#toggle div,.inner .arcive_read_more a,.reply a,.comment-metadata .edit-link a,#plx_service_section .service-posts-wrap .service_image figure img,.archive_pagination a,.pricing_widget .sign_up_price:hover .pricing-position-outer,.pricing_widget .sign_up_price, #plx_shop_section #Container div.mix .item-img span.onsale, #plx_shop_section #Container div.mix .item-img a.cart-contents_product, #plx_shop_section .shop-product .shop_view_all input, #plx_shop_section #Container div.mix .item-img a.item-wishlist' ).attr( 'style', 'background: '+newval1+' !important' );
            
		} );
        
	} );
      wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( '.team-descr,.highlite,.aptf-tweet-content>a,.entry-footer a,.team_section .team-descr,.slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active,.widget-area li:hover a,span.gaga-pricing-plan-sub-text,.slider_area .gaga_lite_slider span.next-page a,.inner .arcive_read_more a:hover,.comment-metadata .edit-link a:hover,.reply a:hover,.main-navigation ul>li a:hover,.inner #respond .form-submit input:hover,.main-navigation .current a,#plx_about_section .combine_content .buy a:hover,.team-post-wrap>a:hover,.blog_latest_post a.read_more:hover,.blog_read_more a:hover,a.view_all_latest:hover,.portfolio_view_all a:hover,.cta_btn_link a:hover,input.wpcf7-submit:hover,.site-info a:hover,.logged-in-as a,.author a,.nav-links a:hover,.nav-previous a:hover:before, .nav-next a:hover:before, .archive_pagination a:hover:before,.comment-author b.fn,.comment-author .fn a,.comment-awaiting-moderation,.widget-area ul.sub-menu>li:hover a,.tagcloud a,.widget h1 a,.archive_pagination a:hover,.comment-respond h3 small a:hover,a.aptf-tweet-reply.aptf-tweet-action-reply,.pricing_widget .sign_up_price:hover,.pricing_widget .sign_up_price:hover .pricing-position-inner:before,strong,span.tags-links,.comment-content p a,.comment-content dl dd a,.comment-content table tbody tr td a,.entry-content a,#wp-calendar tr td a,.about-contents a,li.recentcomments a, #plx_shop_section #Container div.mix .price .amount, #plx_shop_section .shop-product .shop_view_all input:hover' ).attr( 'style', 'color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( '#plx_service_section .service-posts-wrap:first-child, #plx_service_section .service-posts-wrap:nth-child(2),#plx_service_section .service-posts-wrap:nth-child(odd),.entry-header h1.entry-title a, h1.widget-title,#respond h3,.slider_area .gaga_lite_slider .bx-pager.bx-default-pager .bx-pager-item a.bx-pager-link.active,.widget-area li:hover,.comments-title,#toggle,.inner .arcive_read_more a:hover,.comment-metadata .edit-link a:hover,.reply a:hover,.inner #respond .form-submit input:hover,#plx_about_section .combine_content .buy a:hover,.team-post-wrap>a:hover,.blog_latest_post a.read_more:hover,.blog_read_more a:hover,.portfolio_view_all a:hover,.cta_btn_link a:hover,input.wpcf7-submit:hover,a.view_all_latest:hover,#plx_service_section .service-posts-wrap,#secondary .widget_search input.search-field,.nav-links a:hover,.widget-area li.menu-item-has-children:hover>a,.archive_pagination a:hover,.pricing_widget .sign_up_price:hover, #plx_shop_section .shop-product .shop_view_all input' ).attr( 'style', 'border-color: '+newval1+' !important' );
            
		} );
        
	} );
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( '.main_footer' ).attr( 'style','border-top-color: '+newval1+' !important' );
            
		} );
        
	} );     
    wp.customize( 'gaga-lite-skin_color', function( value ) {
		value.bind( function( newval1 ) {
			$( '.fill' ).attr( 'style','fill: '+newval1+' !important' );
            
		} );
        
	} );              
});