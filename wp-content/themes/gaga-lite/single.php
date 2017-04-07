<?php
/**
 * The template for displaying all single posts.
 *
 * @package gaga lite
 */
get_header();
$bg_image = get_theme_mod('gaga-lite-title_bg'); ?>
<div class="inner_header" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
    <?php the_title('<h1>', '</h1>'); ?>
</div>
<?php
$post_id = get_the_ID();
$post_class = get_post_meta($post_id, 'gaga_lite_sidebar_layout', true);
    if ($post_class == 'both-sidebar') {
        $ak = 'ak-container2';
        $content_area = 'content-area-both';
    }
    if ($post_class == 'no-sidebar') {
        $ak = 'ak-container';
        $content_area = 'content-area-no';
    }
    if ($post_class == 'right-sidebar') {
        $ak = 'ak-container';
        $content_area = 'content-area-right';
    }
    if ($post_class == 'left-sidebar') {
        $ak = 'ak-container';
        $content_area = 'content-area-left';
    }
    if ($post_class == '') {
        $ak = 'ak-container';
        $content_area = 'content-area-right';
    }?>
<div class="<?php echo esc_attr($ak); ?>">
    <div class="inner clearfix"><?php
        while (have_posts()) : the_post();
            $categories = array();
            $cats = get_the_category();
            foreach ($cats as $cat) :
                $categories[] = $cat->term_id;
            endforeach;
            $portfolio_cat_id = get_theme_mod('gaga-lite-portfolio_cat');
            if (in_array($portfolio_cat_id, $categories)) {
                get_template_part('template-parts/content', 'portfolio');
            }
        endwhile;?>
        
        <div id="primary" class="content-area <?php echo esc_attr($content_area); ?>">           
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); 
                    $categories = array();
                    $cats = get_the_category();
                    foreach ($cats as $cat) :
                        $categories[] = $cat->term_id;
                    endforeach;
                    $portfolio_cat_id = get_theme_mod('gaga-lite-portfolio_cat');
                    if (in_array($portfolio_cat_id, $categories)) {
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="inner_content_background clearfix">
                                <div class="combine">
                                    <header class="entry-header">
                                        <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                                        <div class="entry-meta">
                                            <?php gaga_lite_posted_on(); ?>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->
                            
                                    <div class="entry-content">
                                        <?php the_content(); 
                                        wp_link_pages(array(
                                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'gaga-lite'),
                                                    'after' => '</div>',
                                                ));?>
                                    </div><!-- .entry-content -->
    
                                    <footer class="entry-footer">
                                        <?php gaga_lite_entry_footer(); ?>
                                    </footer><!-- .entry-footer -->
                                </div>
                            </div>
                        </article><!-- #post-## -->
            <?php } 
        else {
            get_template_part('template-parts/content', 'single');
        }
                the_post_navigation(); 
                $comment = get_comments_number();?>  
                <div class ="main_like_comment"><span><?php echo absint($comment); ?></span>&nbspComments</div><?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;?>
                
        <?php endwhile; // End of the loop. ?>
            </main><!-- #main -->
        </div><!-- #primary -->

        
            <?php if ($post_class == 'left-sidebar') {
                $widget_area = 'widget-area-left';?>
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary">
                <?php get_sidebar('left');?>
            </div> <?php
            }

            if ($post_class == 'both-sidebar') {
                $widget_area = 'widget-area-left-both';?>
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary">
                <?php get_sidebar('left');?>
            </div> <?php
            }

            if ($post_class == 'right-sidebar') {
                $widget_area = 'widget-area-right';?> 
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary"> <?php
                get_sidebar('right');?> 
            </div> <?php
            }

            if ($post_class == 'both-sidebar') {
                $widget_area = 'widget-area-right-both';?> 
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary"> <?php
                get_sidebar('right');?>
            </div> <?php
            }
            if ($post_class == '') {
                $widget_area = 'widget-area-right';?>
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary"> <?php
                get_sidebar('right');?>
            </div> <?php
            } ?>
    </div>
</div>
<?php get_footer(); ?>