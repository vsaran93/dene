<?php
/**
 * Shoop Section
 * */
 include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	// check for plugin using plugin name
	if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	
$section_title = get_theme_mod('gaga-lite-shop_section_title');?>
<div class="shop_section">
    <div class="ak-container">        
        <div class="shop-product clearfix">
            <h2 class=""><?php echo wp_kses_post($section_title); ?></h2>
                    <?php
                    $args = array(
                            'orderby'           => 'id', 
                        ); 
                        $shop_categories = get_terms( 'product_cat',$args);
                        //print_r($shop_categories);
                        if($shop_categories){ ?>
                        <div class=" shop_buttons"><?php 
                            $first_shop_cat = $shop_categories{0}->term_taxonomy_id;
                            if (!empty($shop_categories) && !is_wp_error($shop_categories)):
                    			echo '<button class="btn filter" data-filter="*" class="is-checked">'. __('All','gaga-lite').'</button >';
                    			foreach ($shop_categories as $shop_categorie) :
                    				echo '<button class="btn filter" data-filter=".'.$shop_categorie->term_taxonomy_id.'">' . $shop_categorie->name .'</button >';
                    			endforeach;
                            endif;?>
                        </div>
                    <?php } ?>
                    <div id="Container">
                    <?php
                        $product_args = array(
                          'post_type' => 'product',
                          'posts_per_page' => 8,
                          
                          );
                            $product_loop = new WP_Query( $product_args );
                            if ($product_loop->have_posts()):
                            $i = 0;
                                while ( $product_loop->have_posts() ) : $product_loop->the_post(); 
                                    $term_lists = wp_get_post_terms($post->ID, 'product_cat', array("fields" => "all"));
                                    $term_id = array();
                                    foreach($term_lists as $term_list){
                                        $term_id[] = $term_list->term_taxonomy_id;
                                    }
                                    if($shop_categories){
                                        if (in_array($first_shop_cat, $term_id)) {
                                            $i = $i + 0.25;
                                        }
                                    }
                                    $term_id = join(' ', $term_id);
                                    //print_r($term_lists);
                                    global $product; 
                                    ?>
                                    <div class="mix <?php echo $term_id; ?>">
                                      <div class="item-img">
                                        <a class="home_product_img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                                          <?php
                                          /**
                                           * woocommerce_before_shop_loop_item_title hook
                                           *
                                           * @hooked woocommerce_show_product_loop_sale_flash - 10
                                           * @hooked woocommerce_template_loop_product_thumbnail - 10
                                           */
                                          do_action( 'woocommerce_before_shop_loop_item_title' );?>
                                        </a>
                                        <?php 
                                      if( function_exists( 'YITH_WCWL' ) ){
                                        $url = add_query_arg( 'add_to_wishlist', $product->id );?>
                                        <a class="item-wishlist" href="<?php echo esc_url($url) ?>"><i class="fa fa-heart"></i></a>
                                        <?php
                                      }?>
                                        <?php woocommerce_template_loop_add_to_cart( $product_loop->post, $product );?>
                                      </div>
                                      <a class="home_product_title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                                        <h3><?php the_title(); ?></h3>
                                        <p class="short_desc"><?php $home_exc = strip_shortcodes(substr(strip_tags(get_the_content()),0,32)); echo $home_exc.'...'; ?></p>
                                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                                      </a>
                                      
                                    </div>
                              <?php endwhile; 
                          endif; ?>
                          <?php wp_reset_query(); ?>
                  </div>
                  <a class="shop_view_all" target="_blank" href="<?php echo get_post_type_archive_link( 'product' );?>"><input type="button" value="<?php _e('View All','gaga-lite');?>" /></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php } ?>