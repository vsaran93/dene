<?php
/**
 * Template part for displaying single posts.
 *
 * @package gaga lite
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="inner_content_background clearfix">
        <div class="combine"><?php
            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
            $img_src = $img[0];
            if($img_src){ ?>
                <div class="entry-image">
                    <img src="<?php echo esc_url($img_src); ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive"/>
                </div>
            <?php } ?>
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
        </div>
        <footer class="entry-footer">
            <?php gaga_lite_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->