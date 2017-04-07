<?php
/**
 * Testimonial post/page widget
 *
 * @package gaga lite
 */
/**
 * Adds gaga_lite_Testimonial widget.
 */
 if(!function_exists('gaga_lite_register_pricing_widget')){
add_action('widgets_init', 'gaga_lite_register_pricing_widget');

function gaga_lite_register_pricing_widget() {
    register_widget('gaga_lite_pricing');
}
}
if(!class_exists('gaga_lite_Pricing')){
class gaga_lite_Pricing extends WP_Widget {
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'gaga_lite_pricing', 'Gaga : Pricing Table', array(
            'description' => __('A widget that shows Pricing Table', 'gaga-lite')
                )
        );
    }

    /**
     * Helper function that holds widget fields
     * Array is used in update and form functions
     */
    private function widget_fields() {
        $fields = array(
            // This widget has no title
            // Other fields
            'pricing_plan' => array(
                'gaga_lite_widgets_name' => 'pricing_plan',
                'gaga_lite_widgets_title' => __('Price', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_plan_sub_text' => array(
                'gaga_lite_widgets_name' => 'pricing_plan_sub_text',
                'gaga_lite_widgets_title' => __('Status', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature1' => array(
                'gaga_lite_widgets_name' => 'pricing_feature1',
                'gaga_lite_widgets_title' => __('Feature 1', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature2' => array(
                'gaga_lite_widgets_name' => 'pricing_feature2',
                'gaga_lite_widgets_title' => __('Feature 2', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature3' => array(
                'gaga_lite_widgets_name' => 'pricing_feature3',
                'gaga_lite_widgets_title' => __('Feature 3', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature4' => array(
                'gaga_lite_widgets_name' => 'pricing_feature4',
                'gaga_lite_widgets_title' => __('Feature 4', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature5' => array(
                'gaga_lite_widgets_name' => 'pricing_feature5',
                'gaga_lite_widgets_title' => __('Feature 5', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature6' => array(
                'gaga_lite_widgets_name' => 'pricing_feature6',
                'gaga_lite_widgets_title' => __('Feature 6', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature7' => array(
                'gaga_lite_widgets_name' => 'pricing_feature7',
                'gaga_lite_widgets_title' => __('Feature 7', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'pricing_feature8' => array(
                'gaga_lite_widgets_name' => 'pricing_feature8',
                'gaga_lite_widgets_title' => __('Feature 8', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'button_text' => array(
                'gaga_lite_widgets_name' => 'button_text',
                'gaga_lite_widgets_title' => __('Button Text', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
            'button_link' => array(
                'gaga_lite_widgets_name' => 'button_link',
                'gaga_lite_widgets_title' => __('Button Link', 'gaga-lite'),
                'gaga_lite_widgets_field_type' => 'text',
            ),
        );

        return $fields;
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);

        $pricing_plan = $instance['pricing_plan'];
        $pricing_plan_sub_text = $instance['pricing_plan_sub_text'];
        $pricing_feature1 = $instance['pricing_feature1'];
        $pricing_feature2 = $instance['pricing_feature2'];
        $pricing_feature3 = $instance['pricing_feature3'];
        $pricing_feature4 = $instance['pricing_feature4'];
        $pricing_feature5 = $instance['pricing_feature5'];
        $pricing_feature6 = $instance['pricing_feature6'];
        $pricing_feature7 = $instance['pricing_feature7'];
        $pricing_feature8 = $instance['pricing_feature8'];
        $button_text = $instance['button_text'];
        $button_link = $instance['button_link'];


        echo $before_widget;
        ?>

        <div class="wow fadeInUp gaga-pricing-table">
            <div class="gaga-pricing-head">
                <?php if (!empty($pricing_plan)): ?>
                    <div class="gaga-pricing-plan">
                        <svg version="1.1" id="Layer_1"  x="0px" y="0px"
                             width="111.986px" height="110.986px" viewBox="0 0 111.986 110.986" style="enable-background:new 0 0 111.986 110.986;"
                             xml:space="preserve">
                        <polygon class="fill"  points="14.249,18.692 14.163,23.24 
                                 9.966,24.214 10.449,28.738 6.409,30.23 7.455,34.656 3.634,36.644 5.226,40.905 1.683,43.355 3.798,47.382 0.592,50.258 
                                 3.193,53.989 0.37,57.243 3.42,60.618 1.028,64.198 4.477,67.167 2.553,71.02 6.347,73.531 4.92,77.594 8.998,79.61 8.094,83.821 
                                 12.39,85.311 12.021,89.602 16.473,90.541 16.642,94.844 21.176,95.219 21.886,99.465 26.428,99.268 27.664,103.394 32.148,102.628 
                                 33.892,106.567 38.244,105.246 40.469,108.933 44.621,107.079 47.287,110.46 51.176,108.095 54.246,111.117 57.803,108.285 
                                 61.229,110.897 64.407,107.639 68.132,109.805 70.876,106.176 74.844,107.853 77.11,103.913 81.257,105.078 83.011,100.882 
                                 87.273,101.521 88.488,97.138 92.793,97.238 93.452,92.737 97.736,92.295 97.822,87.747 102.019,86.774 101.537,82.251 
                                 105.575,80.759 104.53,76.331 108.351,74.345 106.759,70.084 110.302,67.633 108.188,63.606 111.395,60.731 108.792,57 
                                 111.615,53.747 108.565,50.371 110.958,46.789 107.508,43.822 109.431,39.97 105.638,37.458 107.065,33.393 102.987,31.377 
                                 103.893,27.165 99.594,25.677 99.966,21.387 95.511,20.448 95.343,16.145 90.809,15.772 90.1,11.522 85.555,11.72 84.321,7.594 
                                 79.838,8.36 78.093,4.421 73.742,5.744 71.517,2.054 67.364,3.911 64.697,0.529 60.809,2.894 57.74,-0.128 54.18,2.703 
                                 50.756,0.092 47.578,3.347 43.854,1.185 41.109,4.814 37.144,3.134 34.876,7.078 30.73,5.91 28.973,10.105 24.713,9.467 
                                 23.496,13.851 19.191,13.751 18.532,18.252 14.249,18.692 "/>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M8.521,55.494c0-26.203,21.266-47.472,47.472-47.472
                              c26.203,0,47.471,21.269,47.471,47.472c0,26.206-21.268,47.472-47.471,47.472C29.787,102.966,8.521,81.7,8.521,55.494L8.521,55.494z
                              M102.014,55.494c0-25.402-20.621-46.021-46.021-46.021c-25.403,0-46.022,20.619-46.022,46.021
                              c0,25.403,20.619,46.021,46.022,46.021C81.393,101.514,102.014,80.897,102.014,55.494L102.014,55.494z"/>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M13.381,62.94h85.223c-3.533,20.33-21.277,35.805-42.611,35.805
                              C34.656,98.745,16.914,83.27,13.381,62.94L13.381,62.94z"/>
                        <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;" d="M6.272,55.494c0-27.446,22.273-49.721,49.721-49.721
                              c27.444,0,49.721,22.275,49.721,49.721c0,27.447-22.276,49.722-49.721,49.722C28.545,105.216,6.272,82.941,6.272,55.494
                              L6.272,55.494z M104.989,55.494c0-27.044-21.953-48.996-48.996-48.996c-27.045,0-48.996,21.952-48.996,48.996
                              c0,27.046,21.951,48.996,48.996,48.996C83.036,104.49,104.989,82.54,104.989,55.494L104.989,55.494z"/>
                        </svg><div class="per_tex">
                            <div class="percent"><span>
                                    <?php echo esc_html($pricing_plan); ?></span>/m
                            </div>
                            <div class="clearfix"></div>
                            <?php if (!empty($pricing_plan_sub_text)): ?>
                                <span class="gaga-pricing-plan-sub-text"><?php echo esc_html($pricing_plan_sub_text); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>


            </div>

            <div class="gaga-pricing-features">
                <ul class="gaga-pricing-features-inner">
                    <?php if (!empty($pricing_feature1)): ?>
                        <li><?php echo esc_attr($pricing_feature1); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature2)): ?>
                        <li><?php echo esc_attr($pricing_feature2); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature3)): ?>
                        <li><?php echo esc_attr($pricing_feature3); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature4)): ?>
                        <li><?php echo esc_attr($pricing_feature4); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature5)): ?>
                        <li><?php echo esc_attr($pricing_feature5); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature6)): ?>
                        <li><?php echo esc_attr($pricing_feature6); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature7)): ?>
                        <li><?php echo esc_attr($pricing_feature7); ?></li>
                    <?php endif; ?>
                    <?php if (!empty($pricing_feature8)): ?>
                        <li><?php echo esc_attr($pricing_feature8); ?></li>
                    <?php endif; ?>

                    <?php if (!empty($button_link)): ?>                       

                        <li class="pricing-read">
                            <a class="sign_up_price" href="<?php echo esc_url($button_link); ?>"><?php
                                if ($button_text == '') {
                                    echo _e('Sign Up','gaga-lite');
                                } else {
                                    echo esc_attr($button_text);
                                }
                                ?>
                                <div class="pricing-position-outer">
                                    <div class="pricing-position-inner">
                                        <svg version="1.1" id="Capa_1"  x="0px" y="0px"
                                             width="32px" height="32px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                        <g>
                                        <path class="fill"  d="M31.41,16.733c0.785-0.402,0.785-1.063,0-1.471c-0.781-0.403-0.863-1.191-0.184-1.749
                                              c0.684-0.558,0.545-1.206-0.305-1.438c-0.854-0.233-1.096-0.987-0.545-1.675c0.553-0.688,0.283-1.291-0.599-1.343
                                              c-0.881-0.05-1.276-0.734-0.879-1.522c0.396-0.79,0.009-1.324-0.862-1.19c-0.875,0.134-1.404-0.454-1.181-1.309
                                              c0.226-0.852-0.267-1.295-1.092-0.984C24.94,4.365,24.296,3.9,24.339,3.018c0.043-0.881-0.53-1.212-1.272-0.734
                                              c-0.741,0.477-1.465,0.155-1.608-0.717c-0.143-0.871-0.771-1.074-1.396-0.454c-0.628,0.622-1.401,0.456-1.722-0.365
                                              c-0.32-0.823-0.977-0.891-1.461-0.155c-0.485,0.739-1.277,0.739-1.762,0c-0.482-0.736-1.142-0.667-1.461,0.155
                                              c-0.319,0.821-1.095,0.986-1.721,0.365c-0.628-0.62-1.256-0.417-1.397,0.454C10.396,2.44,9.674,2.762,8.932,2.285
                                              C8.188,1.808,7.616,2.139,7.657,3.02c0.042,0.882-0.599,1.347-1.424,1.034C5.408,3.742,4.916,4.186,5.14,5.038
                                              C5.366,5.892,4.835,6.48,3.964,6.347c-0.873-0.134-1.262,0.4-0.864,1.19c0.396,0.788,0.001,1.472-0.88,1.522
                                              c-0.882,0.052-1.151,0.655-0.599,1.343c0.551,0.688,0.308,1.441-0.542,1.675c-0.854,0.231-0.99,0.88-0.307,1.438
                                              c0.684,0.558,0.602,1.346-0.184,1.749c-0.785,0.406-0.785,1.067,0,1.47c0.784,0.406,0.867,1.191,0.184,1.752
                                              c-0.684,0.559-0.547,1.206,0.307,1.438c0.85,0.232,1.094,0.986,0.542,1.676c-0.553,0.688-0.283,1.291,0.599,1.343
                                              c0.88,0.05,1.275,0.733,0.879,1.522c-0.396,0.787-0.009,1.322,0.864,1.188c0.871-0.132,1.402,0.456,1.176,1.31
                                              c-0.224,0.854,0.269,1.295,1.094,0.983c0.825-0.313,1.466,0.153,1.423,1.035c-0.042,0.88,0.531,1.21,1.273,0.731
                                              c0.742-0.476,1.465-0.152,1.608,0.718c0.143,0.868,0.771,1.075,1.397,0.452c0.626-0.619,1.401-0.455,1.72,0.367
                                              c0.32,0.824,0.979,0.893,1.462,0.154c0.484-0.738,1.276-0.738,1.762,0c0.482,0.736,1.141,0.67,1.461-0.154
                                              c0.32-0.822,1.094-0.986,1.722-0.367c0.627,0.623,1.255,0.416,1.396-0.452c0.145-0.87,0.867-1.19,1.608-0.718
                                              c0.743,0.479,1.315,0.146,1.272-0.731c-0.043-0.882,0.601-1.349,1.425-1.035c0.825,0.312,1.315-0.13,1.092-0.983
                                              s0.306-1.439,1.181-1.31c0.87,0.136,1.258-0.399,0.862-1.188c-0.397-0.789-0.002-1.475,0.879-1.522
                                              c0.882-0.052,1.149-0.655,0.599-1.346c-0.553-0.688-0.309-1.44,0.545-1.675c0.85-0.229,0.988-0.879,0.305-1.438
                                              C30.546,17.925,30.628,17.14,31.41,16.733z M16.055,29.126c-3.899,0-7.393-1.729-9.767-4.449c0.298-0.021,0.633-0.045,0.917-0.045
                                              c0.281,0,0.565-0.018,0.839-0.032c0.24-0.017,0.471-0.026,0.683-0.026h0.1c0.199,0.041,0.401,0.061,0.612,0.086
                                              c0.188,0.021,0.382,0.039,0.586,0.08c0.229,0.045,0.466,0.268,0.694,0.481c0.132,0.125,0.263,0.245,0.391,0.339
                                              c0.132,0.093,0.259,0.186,0.389,0.277c0.396,0.289,0.809,0.59,1.275,0.797c0.576,0.248,1.211,0.33,1.828,0.41
                                              c0.299,0.037,0.597,0.074,0.881,0.133c0.187,0.021,0.347,0.039,0.508,0.059c0.482,0.055,0.981,0.112,1.48,0.112
                                              c0.337,0,0.635-0.026,0.909-0.081c0.984-0.28,1.611-1.079,1.611-1.996c0.502-0.199,0.947-0.617,1.23-1.152
                                              c0.252-0.479,0.337-0.99,0.246-1.443c0.951-0.623,1.441-1.789,1.178-2.791c0.419-0.287,0.709-0.77,0.811-1.358
                                              c0.141-0.815-0.11-1.685-0.641-2.208c-0.699-0.667-1.667-0.829-2.521-0.971c-0.133-0.021-0.267-0.046-0.396-0.068
                                              c-0.096-0.026-0.219-0.055-0.343-0.082c-1.139-0.266-1.943-0.523-1.944-1.455c-0.003-0.614,0.2-1.181,0.413-1.784
                                              c0.245-0.689,0.498-1.403,0.458-2.235c-0.077-1.481-0.706-2.771-1.683-3.45c-0.39-0.312-0.904-0.496-1.392-0.496
                                              c-0.728,0-1.27,0.395-1.49,1.083c-0.155,0.465-0.129,0.914-0.103,1.392c0.006,0.118,0.015,0.239,0.019,0.364
                                              c0.026,0.657-0.051,1.199-0.243,1.713c-0.364,1.026-1.094,1.982-1.689,2.702l-0.326,0.409c-0.456,0.574-0.927,1.17-1.463,1.647
                                              c-0.263,0.208-0.543,0.282-0.902,0.36c-0.102,0.005-0.189,0.033-0.265,0.054c-0.047,0.018-0.1,0.033-0.128,0.033
                                              c-0.354-0.026-0.73-0.054-1.119-0.054c-0.535,0-3.091,0.025-4.547,0.04C3.543,8.776,9.173,3.406,16.055,3.406
                                              c7.136,0,12.942,5.769,12.942,12.86C28.998,23.357,23.189,29.126,16.055,29.126z M15.151,8.15l-0.006-0.112
                                              c-0.027-0.45-0.036-0.936,0.22-0.972c0.018-0.001,0.038-0.003,0.06-0.003c0.414,0,0.934,0.519,1.243,1
                                              c0.322,0.612,0.49,1.255,0.475,1.834c-0.018,0.603-0.213,1.174-0.422,1.779c-0.245,0.712-0.5,1.451-0.44,2.257
                                              c0.083,1.096,0.953,2.043,2.165,2.356c0.354,0.093,0.729,0.153,1.092,0.212c0.676,0.108,1.373,0.226,1.942,0.543
                                              c0.372,0.188,0.769,0.578,0.698,1.096c-0.033,0.279-0.161,0.627-0.588,0.703c-0.229,0.066-0.383,0.199-0.457,0.391
                                              c-0.09,0.227-0.057,0.512,0.091,0.756c0.153,0.184,0.178,0.563,0.087,0.897c-0.125,0.397-0.414,0.678-0.863,0.829
                                              c-0.189,0.023-0.361,0.156-0.453,0.357c-0.106,0.229-0.084,0.479,0.063,0.651c0.126,0.183,0.104,0.59-0.073,0.929
                                              c-0.14,0.266-0.336,0.426-0.526,0.426c-0.026,0-0.055-0.002-0.082-0.01l-0.029-0.006H19.31c-0.234,0-0.541,0.104-0.691,0.338
                                              c-0.102,0.152-0.115,0.344-0.039,0.514c0.094,0.254,0.084,0.541-0.033,0.732c-0.084,0.139-0.219,0.223-0.4,0.245
                                              c-0.32,0.086-0.643,0.086-0.954,0.086c-0.923-0.083-1.904-0.172-2.852-0.345l-0.452-0.102c-0.234-0.054-0.467-0.104-0.673-0.156
                                              c-0.339-0.166-0.719-0.453-1.084-0.729c-0.122-0.093-0.241-0.183-0.359-0.269c-0.085-0.065-0.178-0.154-0.271-0.244
                                              c-0.242-0.227-0.513-0.48-0.85-0.573c-0.316-0.194-0.653-0.194-0.929-0.194c-0.882-0.082-1.3-0.402-1.515-1.177
                                              C7.995,21.414,7.987,20.523,8,19.751l0.002-0.174c0.007-0.728,0.019-1.635,0.392-2.295c0.187-0.316,0.556-0.384,0.983-0.464
                                              c0.591-0.097,1.058-0.291,1.493-0.626c0.062-0.021,0.126-0.067,0.172-0.154c0.177-0.12,0.321-0.298,0.455-0.457
                                              c0.699-0.762,1.345-1.555,1.851-2.284c0.119-0.177,0.237-0.345,0.354-0.511c0.539-0.771,1.097-1.566,1.334-2.549
                                              C15.206,9.517,15.188,8.892,15.151,8.15z"/>
                                        </g>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!--
            <?php if (!empty($pricing_button_text)): ?>
              <div class="gaga-pricing-readmore"><a class="bttn" href="<?php echo esc_url($pricing_button_link); ?>"><?php echo esc_attr($pricing_button_text); ?></a></div>
            <?php endif; ?>
            -->
            <div class="widget_footer"></div>             
        </div>

        <?php
        echo $after_widget;
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param	array	$new_instance	Values just sent to be saved.
     * @param	array	$old_instance	Previously saved values from database.
     *
     * @uses	gaga_lite_widgets_updated_field_value()		defined in widget-fields.php
     *
     * @return	array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = $old_instance;

        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            extract($widget_field);

            // Use helper function to get updated field values
            $instance[$gaga_lite_widgets_name] = gaga_lite_widgets_updated_field_value($widget_field, $new_instance[$gaga_lite_widgets_name]);
        }

        return $instance;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param	array $instance Previously saved values from database.
     *
     * @uses	gaga_lite_widgets_show_widget_field()		defined in widget-fields.php
     */
    public function form($instance) {
        $widget_fields = $this->widget_fields();

        // Loop through fields
        foreach ($widget_fields as $widget_field) {

            // Make array elements available as variables
            extract($widget_field);
            $gaga_lite_widgets_field_value = !empty($instance[$gaga_lite_widgets_name]) ? esc_attr($instance[$gaga_lite_widgets_name]) : '';
            gaga_lite_widgets_show_widget_field($this, $widget_field, $gaga_lite_widgets_field_value);
        }
    }

}
}