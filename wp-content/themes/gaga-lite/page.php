<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gaga lite
 */

get_header();
while ( have_posts() ) : the_post();
$bg_image = get_theme_mod('gaga-lite-title_bg'); ?>
<div class="inner_header" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
    <?php the_title('<h1>', '</h1>'); ?>
</div>

<?php
    $post_id = get_the_ID();
    $post_class = get_post_meta( $post_id, 'gaga_lite_sidebar_layout', true );
    
    
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
    <div class="inner clearfix">
        <div id="primary" class="content-area <?php echo esc_attr($content_area); ?>"> 
		<main id="main" class="site-main" role="main">

			

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
		</main><!-- #main -->
	</div><!-- #primary -->
    
        <?php 
        if ($post_class == 'left-sidebar') {
        $widget_area = 'widget-area-left';
        ?>
            <div id="secondary" class="widget-area <?php echo esc_attr($widget_area); ?>" role="complementary">
                <?php get_sidebar('left');?>
            </div> <?php
            }

            if ($post_class == 'both-sidebar') {
                $widget_area = 'widget-area-left-both';
                ?>
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
            </div>
            <?php }?>
    </div>
</div>
<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>