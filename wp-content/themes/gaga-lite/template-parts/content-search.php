<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gaga lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php gaga_lite_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
            $content = get_the_content();
           echo wp_trim_words( $content,'40' );
        ?>
        <div class="blog_read_more"><a href="<?php echo get_permalink(); ?>"><?php _e('Read More','gaga-lite') ?></a></div>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php gaga_lite_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->