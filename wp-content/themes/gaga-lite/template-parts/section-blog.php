<?php
/**
 * blog Section
 */
$blog_section_title = get_theme_mod('gaga-lite-blog_section_title');
$blog_category = get_theme_mod('gaga-lite-blog_cat');
$blog_args = array('post_type' => 'post', 'cat' => $blog_category, 'order' => 'DESC', 'posts_per_page' => '1');
$blog_query = new WP_Query($blog_args);
?>

<?php if ($blog_query->have_posts() && $blog_category) : ?>
    <div class="blog_section">
        <div class="ak-container clearfix">
            <div class="blog_main_post">
                <?php if($blog_section_title){ ?>
                    <div class="blog_sectio_title"><h2 class="wow fadeIn"><?php echo wp_kses_post($blog_section_title); ?></h2></div>
                <?php } ?>
                <div class="blog-posts">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <div class="blog-posts-wrap wow fadeIn">
                            <?php
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_blog_main_img');
                            $img_src = $img[0];
                            ?>
                            <div class="blog_image" >
                                <figure>
                                    <?php if ($img_src) : ?>
                                        <img src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                    <?php endif; ?>
                                </figure>
                            </div>
                            <div class="blog_title"><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a></div>
                            <div class="blog_date_main" >
                                <?php
                                $auther = get_the_author();
                                $date = get_the_time('m-d-Y');
                                echo _e('Posted By :','gaga-lite')  . $auther . " | " . _e('Date :','gaga-lite') . $date;
                                ?>  
                            </div>

                            <p class="blogs-excerpt-content">
                                <?php
                                $content = get_the_content();
                               echo wp_trim_words( wp_kses_post($content),'90' );
                                ?>
                            </p>
                            <div class="blog_read_more"><a href="<?php echo get_permalink(); ?>"><?php _e('Read More','gaga-lite'); ?></a></div>
                            <div class="main_like_comment">
                                <?php
                                $comment = get_comments_number();
                                ?>  <span><?php echo absint($comment); ?></span>Comment
                                
                            </div>
                        </div>
                            
                        <?php endwhile; 
                        wp_reset_query();?>
                    </div>
            </div>
            <?php
            $latest_post = array('post_type' => 'post', 'cat' => $blog_category, 'order' => 'DESC','posts_per_page' => '2', 'offset' => '1');
            $latest_query = new WP_Query($latest_post);
            ?>
            <div class="blog_latest_post wow fadeIn">
                <h2><?php _e('<span>Latest</span> posts', 'gaga-lite') ?></h2>
                <div class="blog-posts-latest">

                    <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                        <div class="blog-posts-wrap-latest">
                        <?php
                        $img1 = wp_get_attachment_image_src(get_post_thumbnail_id(), 'gaga_lite_blog_sub_img');
                        $img_src1 = $img1[0];?>
                           <figure>
                                <?php if ($img_src) : ?>
                                    <img src="<?php echo esc_url($img_src1); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                            </figure>
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                            <div class="blog_date_sub">
                                <?php
                                $auther1 = get_the_author();
                                $date1 = get_the_time('m-d-Y');
                                echo _e('Posted By :','gaga-lite')  . $auther1 . " | " . _e('Date :','gaga-lite') . $date1;
                                ?>  
                            </div>
                            <div class="clearfix"></div>   
                            <div class="sub_like_comment">
                                <?php
                                $comment1 = get_comments_number();
                                ?>  <span><?php echo absint($comment1 )?></span>Comment
                            </div> 
                            <a href="<?php echo get_permalink(); ?>" class="read_more"><?php _e('Read More','gaga-lite'); ?></a>
                            <div class="clearfix"></div>
                        </div>
                    <?php endwhile; ?>
                    <a href="<?php echo get_category_link($blog_category); ?>" class="view_all_latest"><?php _e('VIEW ALL', 'gaga-lite'); ?></a>
                </div>
                
            </div>
        </div>
    </div>
<?php 
endif; 
wp_reset_query();
?>