<?php
/** Woocommerce Compatible code **/
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action('woocommerce_before_main_content', 'gaga_lite_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'gaga_lite_wrapper_end', 10);
add_action('woocommerce_single_product_summary','social_share_above_cart',25);
add_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash_start',9);
add_action('woocommerce_before_single_product_summary','woocommerce_show_product_images',20);
add_action('woocommerce_before_single_product_summary','woocommerce_show_product_sale_flash',21);
add_filter('woocommerce_sale_flash', 'woocommerce_change_sale_to_percentage', 21, 3);
add_action('woocommerce_single_product_summary','wishlist_single_page',31);
add_action('woocommerce_before_single_product_summary','woocommerce_show_product_images_end',21);
add_action('woocommerce_before_shop_loop_item_title','wishlist_archive_page',11);
add_action('woocommerce_before_shop_loop_item_title','cart_view_product_page',12);

function woocommerce_cart_wishlist_wrap_start(){
    echo '<div class="wrap_cart_wishlist">';
}
function woocommerce_cart_wishlist_wrap_end(){
    echo '</div>';
}
function wishlist_single_page(){
    global $product;
    if( function_exists( 'YITH_WCWL' ) ){
        $url = add_query_arg( 'add_to_wishlist', $product->id );?>
        <a class="item-wishlist" href="<?php echo $url ?>"><i class="fa fa-heart"></i></a>
        <?php
      }
}
function wishlist_archive_page(){
    global $product;
    if( function_exists( 'YITH_WCWL' ) ){
        $url = add_query_arg( 'add_to_wishlist', $product->id );?>
        <a class="item-wishlist" href="<?php echo $url ?>"><i class="fa fa-heart"></i></a>
        <?php
      }
}
function gaga_lite_wrapper_start() {
if(is_active_sidebar('woocommerce_left_sidebar')){
        $ak = 'content-area-left';
    }
    else{
      $ak = 'content-area-no';
    }
  echo '<div class="ak-container"><div class="inner clearfix"><div id="primary" class="content-area '.$ak.'"><main id="main" class="site-main woocommerce_gaga" role="main">';
}

function gaga_lite_wrapper_end() {
  echo '</main><!-- #main -->
	</div><!-- #primary -->';
    if(is_active_sidebar('woocommerce_left_sidebar')):
        echo '<div id="secondary" class="widget-area widget-area-left" role="complementary">';    
            dynamic_sidebar('woocommerce_left_sidebar');
        echo '</div><!-- #secondary -->'; 
    endif;
    echo '</div><!-- .inner -->
    </div><!-- .ak-container -->';
    
}
function social_share_above_cart(){
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	// check for plugin using plugin name
	if ( is_plugin_active( 'accesspress-social-share/accesspress-social-share.php' ) ) {
		echo do_shortcode("[apss-share share_text='SHARE THIS']");
	}
			
}
function woocommerce_show_product_sale_flash_start(){
    echo '<div class="salse_image_wrap">';
}
function woocommerce_show_product_images_end(){    
    echo '</div>';
}


function woocommerce_change_sale_to_percentage($content, $post, $product){

    if (!$product->is_in_stock()) return;
    $sale_price = get_post_meta($product->id, '_price', true);
    $regular_price = get_post_meta($product->id, '_regular_price', true);
        
        if (!empty($regular_price) && !empty($sale_price) && $regular_price > $sale_price){
            $sale = ceil((($regular_price - $sale_price) / $regular_price) * 100);
            $content = '<span class="onsale">SALE-' . $sale . '%</span>';
            return $content;
        }
}
function cart_view_product_page()
{
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        $count = WC()->cart->cart_contents_count;?>
        <a class="cart-contents_product" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart','gaga-lite' ); ?>"><i class="fa fa-shopping-bag"></i></a><?php
    }
}