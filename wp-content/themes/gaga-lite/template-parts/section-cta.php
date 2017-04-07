<?php
$cta_section_title = get_theme_mod('gaga-lite-cta_section_title');
$cta_title = get_theme_mod('gaga-lite-cta_title');
$cta_descr = get_theme_mod('gaga-lite-cta_desc');
$cta_buton_text = get_theme_mod('gaga-lite-cta_btn_text');
$cta_buton_link = get_theme_mod('gaga-lite-cta_btn_link');

?>

<div class="cta_section">
    <div class="ak-container">


        <div class="cta_section_view clearfix">
            
            <div class="cta_desc wow fadeInUp">
            <?php if($cta_section_title){ ?>
                <div class="cta_section_title"><h2 class=""><?php echo wp_kses_post($cta_section_title); ?></h2></div>
            <?php } ?>
                <div class="cta-descr">
                    <?php echo wp_kses_post($cta_descr); ?>
                </div>
                <?php
                if ($cta_buton_text == '') {
                    
                } else {
                    ?>
                    <div class="cta_btn_link"><a href="<?php echo esc_url($cta_buton_link); ?>"><?php echo esc_attr($cta_buton_text); ?></a></div>
                        <?php } ?>
            </div>
        </div>

    </div>
</div>