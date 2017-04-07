<?php
/**
 * service Section
 */
$service_section_title = get_theme_mod('gaga-lite-service_section_title');
$service_section_description = get_theme_mod('gaga-lite-service_desc');
$service_category = get_theme_mod('gaga-lite-service_cat');
$service_args = array('post_type' => 'post', 'cat' => $service_category, 'order' => 'DESC');
$service_query = new WP_Query($service_args);
?>

<?php if ($service_query->have_posts() && $service_category) : ?>
    <div class="service_section">
        <div class="ak-container">        

            <div class="service_section_title"><h2 class="wow fadeInDown"><?php echo wp_kses_post($service_section_title); ?></h2></div>    
            <div class="service-posts clearfix">
                <?php while ($service_query->have_posts()) : $service_query->the_post(); ?>
                    <div class="service-posts-wrap clearfix wow fadeInUp"><?php
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_service_image');
                        $img_src = $img[0];?>
                        <div class="service_title"><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></div>
                        <div class="service_image">
                            <figure>
                                <?php if ($img_src) : ?>
                                    <img src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                            </figure>
                        </div>
                        <div class="services-excerpt-content">
                            <?php $content = get_the_content();
                            echo wp_trim_words( $content,'28' ); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="clearfix"></div>
            <div class="service-descr">
                <?php echo wp_kses_post($service_section_description); ?>
            </div>
        </div>
    </div>
<?php endif; ?>