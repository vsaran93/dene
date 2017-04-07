<?php
    /**
     * Portfolio Section
     */
    $portfolio_section_title = get_theme_mod('gaga-lite-portfolio_section_title');
    $portfolio_category = get_theme_mod('gaga-lite-portfolio_cat');
    $portfolio_args = array('post_type' => 'post', 'cat' => $portfolio_category, 'order' => 'DESC','posts_per_page' => '4');
    $portfolio_query = new WP_Query($portfolio_args);
    ?>
<?php if ($portfolio_query->have_posts() && $portfolio_category) : ?>
    <div class="portfolio_section">
    <?php if($portfolio_section_title){?>
        <h2 class="wow fadeInDown"><?php echo wp_kses_post($portfolio_section_title); ?></h2>
    <?php }?>
        <div class="portfolio-posts clearfix">
            <?php while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <div class="portfolio-post-wrap">
                    <div class="portfolio-positing wow fadeInUp">
                        <?php
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_portfolio_image');
                        $img_src = $img[0];
                        $id = get_the_ID();
                        ?>
                    <?php if ($img_src) : ?>
                        <div class="portfolio_image"  id="<?php echo esc_attr($id); ?>">
                            
                                <img src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                        </div>
                    <?php endif; ?>
                        <div class="portfolio_main">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <div class="portfolio_content">
                                <?php
                                $content = get_the_content();
                                ?> <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( wp_kses_post($content),'40' );?></a><?php
                                ?>
                            </div> 
                        </div> 
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="clearfix"></div>
            <div class="portfolio_view_all"><a href="<?php echo get_category_link($portfolio_category); ?>"><?php _e('VIEW ALL Work', 'gaga-lite'); ?></a></div>
        </div>
    </div>
<?php endif; ?>