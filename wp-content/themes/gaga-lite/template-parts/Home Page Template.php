<?php 
/**
 * Template Name: Home Page
 * */
get_header();
$enabled_sections = gaga_lite_get_menu_sections();
foreach($enabled_sections as $section) :?>
    <section id="<?php echo esc_attr($section['id']) ?>" class="plx-sections clearfix">
        <div class="gaga_lite_background">
            <?php get_template_part('template-parts/section', $section['section']); ?>
        </div>
    </section> <?php
endforeach;
get_footer(); ?>