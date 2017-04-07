<?php
/**
 * team Section
 */
$team_section_title = get_theme_mod('gaga-lite-team_section_title');
$team_section_descr = get_theme_mod('gaga-lite-team_desc');
$team_category = get_theme_mod('gaga-lite-team_cat');
$team_args = array('post_type' => 'post', 'cat' => $team_category, 'order' => 'DESC');
$team_query = new WP_Query($team_args);
$category = get_category($team_category);
$count_category = $category->category_count;
?>

<?php if ($team_query->have_posts() && $team_category): ?>
    <div class="team_section">
        <div class="ak-container">
            <div class="team_title"><h2 class="wow fadeInDown"><?php echo wp_kses_post($team_section_title); ?></h2></div>
            <div class="team-post-wrap wow fadeInUp">
            <?php if($count_category <= '3'){ ?>
                <div class="team_image_member clearfix">
                    <?php
                    while ($team_query->have_posts()) : $team_query->the_post();
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_team_image');
                        $img_src = $img[0];
                        $id = get_the_id();?>
                        <div class="images_team_loop"> 
                            <div class="team_inner">
                                <a  href="<?php the_permalink(); ?>" >  
                                    <?php if ($img_src) : ?>
                                        <img class="team_image" id="<?php echo esc_attr($id) ?>" src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php endif; ?>
                                    <div class="team_cover"></div> 
                                    <div class="clearfix"></div>
                                    <span class="team_name"><?php the_title(); ?></span>
                                    
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php }
            else{?>
                   <ul id="flexiselDemo2">
                    <?php                    
                    while ($team_query->have_posts()) : $team_query->the_post();
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_team_image');
                        $img_src = $img[0];
                        $id = get_the_id();
                        ?>  
                                  
                        <li> 
                            <div class="team_inner">
                                <a  href="<?php the_permalink(); ?>" >  
                                    <?php if ($img_src) : ?>
                                        <img class="team_image" id="<?php echo esc_attr($id) ?>" src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php endif; ?>
                                    <div class="team_cover"></div> 
                                    <div class="clearfix"></div>
                                    <span class="team_name"><?php the_title(); ?></span>
                                    
                                </a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php } ?>
                <div class="team-descr">
                    <?php echo wp_kses_post($team_section_descr); ?>
                </div>  
                <div class="clearfix"></div>
                <?php $link = get_theme_mod('gaga-lite-team_button_link'); ?>
                <a href="<?php echo esc_url($link); ?>"><?php _e('join us','gaga-lite'); ?></a>
            </div>
        </div>
    </div>
<?php endif; ?>