<?php
/**
 * Template part for displaying single posts.
 *
 * @package gaga lite
 */
    /**
     * Portfolio Section
     */
    $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_portfolio_slider_image');
    $img_src = $img[0];
    $portfolio_section_title = get_theme_mod('gaga-lite-portfolio_section_title');
    $portfolio_category = get_theme_mod('gaga-lite-portfolio_cat');
    $portfolio_args = array('post_type' => 'post', 'cat' => $portfolio_category);
    $portfolio_query = new WP_Query($portfolio_args);
    if ($portfolio_query->have_posts() && $portfolio_category) : 
    	?>
     <div class="port_slide">
            <ul class="portfolio_slider_image">
                <?php if($img_src){?>
                <li><img src="<?php echo esc_url($img_src); ?>" /></li>
                <?php } 
                while ($portfolio_query->have_posts()) : $portfolio_query->the_post();    
                $img1 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_portfolio_slider_image');
                $img_src1 = $img1[0];
                $id = get_the_ID();
                if($img_src1 !== $img_src){?>
                    <li>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo esc_url($img_src1); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                        <?php endif; ?>
                    </li>
                <?php } ?>
                      <?php endwhile; ?>
            </ul>
          <a id="slider-prev"></a>
          <a id="slider-next"></a>  
        </div>       
  <?php endif; 
  wp_reset_query();
  ?>
