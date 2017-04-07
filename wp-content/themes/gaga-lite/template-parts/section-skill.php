<?php
$progress_title1 = get_theme_mod('gaga-lite-our_skill1');
$progress_title2 = get_theme_mod('gaga-lite-our_skill2');
$progress_title3 = get_theme_mod('gaga-lite-our_skill3');
$progress_title4 = get_theme_mod('gaga-lite-our_skill4');
$our_skill_percentage1 = get_theme_mod('gaga-lite-our_skill_percent_1');
$our_skill_percentage2 = get_theme_mod('gaga-lite-our_skill_percent_2');
$our_skill_percentage3 = get_theme_mod('gaga-lite-our_skill_percent_3');
$our_skill_percentage4 = get_theme_mod('gaga-lite-our_skill_percent_4');
$portfolio_section_title = get_theme_mod('gaga-lite-skill_section_title');
$portfolio_section_descr = get_theme_mod('gaga-lite-skill_desc');


 
$color = get_theme_mod('gaga-lite-skin_color');
if(!$color){$color = '#ed1b2f';}
$rgb = gaga_lite_hex2rgba($color);
$rgba = gaga_lite_hex2rgba($color, 1);?>

<div class="skill_section">
    <div class="ak-container">
        <div class="skill_section_title"><h2 class="wow fadeInDown"><?php echo wp_kses_post($portfolio_section_title); ?></h2></div>
        <div class="skill_desc wow fadeInUp"><?php echo wp_kses_post($portfolio_section_descr); ?></div>
        <div class="clearfix wow fadeInUp">
            <div class="progress_1 prog">
                <div class="progre_view_1"><canvas class="loader cloader" color="<?php echo esc_attr($rgba); ?>" data-percentage="<?php echo $our_skill_percentage1; ?>"></canvas>

                </div>
                <div class="progress_title_1"><?php echo esc_attr($progress_title1); ?></div>
            </div>
            <div class="progress_2 prog">
                <div class="progre_view_2"><canvas class="loader2 cloader" color="<?php echo esc_attr($rgba); ?>" data-percentage="<?php echo $our_skill_percentage2; ?>"></canvas>

                </div>
                <div class="progress_title_2"><?php echo esc_attr($progress_title2); ?></div>
            </div>
            <div class="progress_3 prog">
                <div class="progre_view_3"><canvas class="loader3 cloader" color="<?php echo esc_attr($rgba); ?>" data-percentage="<?php echo $our_skill_percentage3; ?>"></canvas>

                </div>
                <div class="progress_title_3"><?php echo esc_attr($progress_title3); ?></div>
            </div>
            <div class="progress_4 prog">
                <div class="progre_view_4"><canvas class="loader4 cloader" color="<?php echo esc_attr($rgba); ?>" data-percentage="<?php echo $our_skill_percentage4; ?>"></canvas>

                </div>
                <div class="progress_title_4"><?php echo esc_attr($progress_title4); ?></div>
            </div>
        </div>

    </div>
</div>