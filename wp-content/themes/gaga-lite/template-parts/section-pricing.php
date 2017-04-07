<?php
$pricing_section_title = get_theme_mod('gaga-lite-pricing_section_title');

?>

<div class="pricing_section">
    <div class="ak-container">  
        <h2 class="wow fadeInDown"><?php echo wp_kses_post($pricing_section_title); ?></h2>
        <div class="pricing_widget clearfix wow fadeInUp">
        <?php if ( is_active_sidebar( 'gaga_lite_pricing_table_widget' ) ) : ?>
        	<ul id="sidebar">
        		<?php dynamic_sidebar( 'gaga_lite_pricing_table_widget' ); ?>
        	</ul>
        <?php endif; ?> 
        </div>
    </div>
</div>