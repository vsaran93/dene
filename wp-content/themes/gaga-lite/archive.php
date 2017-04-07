<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gaga lite
 */
get_header();
$bg_image = get_theme_mod('gaga-lite-title_bg');?>
<div class="inner_header" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
    <header class="page-header">
        <h1 class="page-title"><?php single_cat_title('', true); ?></h1>
    </header><!-- .page-header -->
</div>

<div class="ak-container">
    <div class="inner clearfix">
        <div id="primary" class="content-area collection">
            <main id="main" class="site-main" role="main">

                <?php if (have_posts()) : 
                    // Start the Loop ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="inner_content_background clearfix">
                            <div class="combine">
                                <?php
                                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
                                $img_src = $img[0];
                                if($img_src):
                                ?>
                                <div class="archive_image">
                                    <img src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive"/>
                                </div>
                                <?php endif;?>
                                <div class="arcive_title"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a> </div><?php
                                ?><div class="arcivce_date_auther"><?php
                                $auther = get_the_author();
                                $date = get_the_time('m-d-Y');
                                echo _e('Posted By :','gaga-lite')  . $auther . " | " . _e('Date :','gaga-lite') . $date;
                                ?>  </div><?php
                                $content = get_the_content();
                                ?><div class="arcive_content"><?php  echo wp_trim_words( $content,'90' ); ?> </div><?php
                                ?> <span class="arcive_read_more"><a href="<?php the_permalink(); ?>">Read More</a></span> <?php
                                $comment = get_comments_number();
                                ?>  <div class ="main_like_comment"><span><?php echo absint($comment); ?></span>&nbspComments</div><?php ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="archive_pagination clearfix">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer

                        echo paginate_links(array(
                            'prev_text' => 'Prev',
                            'next_text' => 'Next',
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        ));
                        ?>
                    </div>
                    <?php //the_posts_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <div id="secondary" class="widget-area widget-area-right">
            <?php get_sidebar('right'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>