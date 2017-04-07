<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package gaga-lite
 */
get_header();
?>
<main id="main" class="site-main" role="main">
    <?php $bg_image = get_theme_mod('gaga-lite-title_bg'); ?>
    <div class="inner_header" style="background-image: url(<?php echo esc_url($bg_image); ?>);">
        <header class="page-header">
            <h1 class="page-title"><?php _e('404 Error!','gaga-lite') ?></h1>
        </header><!-- .page-header -->
    </div>
    
    <div class="ak-container">
        <div class="inner clearfix">
            <section class="error-404 not-found">
                <div class="number404">
                    404 
                    <span><?php _e('error','gaga-lite') ?></span>   
                </div>
            </section><!-- .error-404 -->
        </div>
    </div>

</main><!-- #main -->

<?php get_footer(); ?>