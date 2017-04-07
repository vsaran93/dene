
<?php
/**
 * client Section
 */
$client_section_title = get_theme_mod('gaga-lite-client_section_title');

$client_category = get_theme_mod('gaga-lite-client_cat');
$client_args = array('post_type' => 'post', 'cat' => $client_category, 'order' => 'DESC');
$client_query = new WP_Query($client_args);?>

<?php if ($client_query->have_posts() && $client_category) : ?>
    <div class="clearfix">
        <?php if($client_section_title){ ?>
            <div class="client_section_title"><h2 class="wow fadeInDown"><?php echo wp_kses_post($client_section_title); ?></h2></div>
        <?php } ?> 
        <div class="client-posts wow fadeInUp">
            <div class="ak-container owl-carouse">
                <ul class="client_slider1"><?php
                        while ($client_query->have_posts()) : $client_query->the_post();
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                            $img_src = $img[0];
                            if($img_src):?> 
                        <li>
                            <div class="item">
                                 <img  src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                             </div>
                        </li>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>