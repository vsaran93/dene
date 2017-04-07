<?php
/**
 * gaga lite functions and definitions
 *
 * @package gaga lite
 */

if ( ! function_exists( 'gaga_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gaga_lite_setup() {
/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on gaga lite, use a find and replace
 * to change 'gaga-lite' to the name of your theme in all the template files
 */
load_theme_textdomain( 'gaga-lite', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => esc_html__( 'Primary Menu', 'gaga-lite' ),
) );



// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'gaga_lite_custom_background_args', array(
	'default-color' => 'ffffff',
	'default-image' => '',
) ) );
if ( ! isset( $content_width ) ) $content_width = 900;

add_image_size( 'gaga_lite_slider_image', 1600, 800, true );
add_image_size('gaga_lite_blog_main_img',600,206,true);
add_image_size('gaga_lite_blog_sub_img',230,121,true);
add_image_size('gaga_lite_portfolio_image',364,314,true);
add_image_size('gaga_lite_team_image',440,420,true);
add_image_size('gaga_lite_portfolio_slider_image',1170,600,true);
add_image_size('gaga_lite_service_image',86,86,true);

}
endif; // gaga_lite_setup

add_action( 'after_setup_theme', 'gaga_lite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gaga_lite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gaga_lite_content_width', 640 );
}
add_action( 'after_setup_theme', 'gaga_lite_content_width', 0 );
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gaga_lite_widgets_init() {
register_sidebar( array(
	'name'          => esc_html__( 'Right Sidebar', 'gaga-lite' ),
	'id'            => 'gaga_lite_sidebar-1',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
) );
register_sidebar(array(
    'name'=>esc_html__('Left Sidebar','gaga-lite'),
    'id'=>'gaga_lite_left-sidebar',
    'description'=>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
));
register_sidebar( array(
	'name'          => esc_html__( 'Footer Social Links', 'gaga-lite' ),
	'id'            => 'gaga_lite_footer_social_links',
	'description'   => '',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
) );

register_sidebar(array(
    'name'          =>esc_html__('Gaga Pricing Table','gaga-lite'),
    'id'            =>'gaga_lite_pricing_table_widget',
    'description'   =>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
));
register_sidebar(array(
    'name'=>esc_html__('Footer 1','gaga-lite'),
    'id'=>'gaga_lite_footer1',
    'description'=>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
    
));
register_sidebar(array(
    'name'=>esc_html__('Footer 2','gaga-lite'),
    'id'=>'gaga_lite_footer2',
    'description'=>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
));
register_sidebar(array(
    'name'=>esc_html__('Footer 3','gaga-lite'),
    'id'=>'gaga_lite_footer3',
    'description'=>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
));
register_sidebar(array(
    'name'=>esc_html__('Woocommerce Left Sidebar','gaga-lite'),
    'id'=>'woocommerce_left_sidebar',
    'description'=>'',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
));
}
add_action( 'widgets_init', 'gaga_lite_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function gaga_lite_scripts() {
	wp_enqueue_style( 'gaga-lite-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    wp_enqueue_style('woocommerce-css',get_template_directory_uri().'/woocommerce/gaga-woocommerce.css');
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.js', array('jquery'), '1.8.2', true );
    wp_enqueue_script( 'one-pager-jquery-nav', get_template_directory_uri(). '/js/jquery.nav.js',array('jquery') );
    wp_enqueue_script('mixitup',get_template_directory_uri().'/js/mixitup/jquery.mixitup.js',array('jquery'));
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'bxslider', 'mixitup','progress-main','waypoint-js','maximage','cycle','wow','parallax','localScroll','scrollTo','flexisel-master'));
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/css/font-awesome.min.css');
    wp_enqueue_style('maximage',get_template_directory_uri().'/js/fullscreenslider/jquery.maximage.css');
    wp_enqueue_script( 'progress-main', get_template_directory_uri(). '/js/Circular-Percentage-Loader/js/jquery.classyloader.min.js', array('jquery') );
    wp_enqueue_script( 'waypoint-js', get_template_directory_uri() . '/js/jquery.waypoints.js',array('jquery'));
    wp_enqueue_script('maximage',get_template_directory_uri().'/js/fullscreenslider/jquery.maximage.js',array('jquery'));
    wp_enqueue_script('cycle',get_template_directory_uri().'/js/fullscreenslider/jquery.cycle.all.js',array('jquery'));
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js');
    
    wp_enqueue_style( 'wow-animate',get_template_directory_uri().'/js/animate.css');
    wp_enqueue_script( 'parallax',get_template_directory_uri().'/js/parallax.js',array('jquery'));
    wp_enqueue_script( 'localScroll',get_template_directory_uri().'/js/jquery.localScroll.min.js',array('jquery'));
    wp_enqueue_script( 'scrollTo',get_template_directory_uri().'/js/jquery.scrollTo.min.js',array('jquery'));
    wp_enqueue_style( 'flexisel-master',get_template_directory_uri().'/js/flexisel-master/css/style.css');
    wp_enqueue_script( 'flexisel-master',get_template_directory_uri().'/js/flexisel-master/js/jquery.flexisel.js',array('jquery'));
}

add_action( 'wp_enqueue_scripts', 'gaga_lite_scripts' );

function gaga_lite_customizer_live_preview(){
    wp_enqueue_script( 'gaga-lite-google_font-js','https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js');    
    wp_enqueue_script( 'gaga-lite-themecustomizer',get_template_directory_uri().'/js/gaga-lite-theme-customizer.js',array( 'jquery','customize-preview' ),true);   
}
add_action( 'customize_preview_init', 'gaga_lite_customizer_live_preview' );    

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load More Theme file.
 */
require get_template_directory() . '/inc/more-themes.php';

require get_template_directory() . '/inc/gaga-lite-class-tgm-plugin-activation.php';
require get_template_directory().'/inc/gaga-lite-function.php';
require get_template_directory().'/inc/admin-panel/gaga-lite-customizer.php';
require get_template_directory().'/inc/gaga-lite_widget.php';
require get_template_directory().'/css/gaga_lite-custom-css.php';
require get_template_directory().'/inc/gaga-lite-custom-meta-box.php';
require get_template_directory().'/woocommerce/woocommerce_function.php';
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

add_filter( 'body_class', 'gaga_lite_my_class_names' );

function gaga_lite_my_class_names( $classes ) {
	// add 'class-name' to the $classes array
    if(is_home()){
	$classes[] = 'my_class_pages';
	// return the $classes array
    }
    else{
        $header_menu = get_theme_mod('header_menu_position');
        if(!$header_menu == '1'){
            $classes[]='';
            }
            else{
       $classes[] = 'my_class'; 
       }
    }
	return $classes;
}
add_filter( 'widget_text', 'do_shortcode', 11);

function gaga_lite_register_required_plugins() {

$plugins = array(
    array(
        'name'      => 'AccessPress Custom CSS',
        'slug'      => 'accesspress-custom-css',
        'required'  => false,
    ),
    array(
        'name'      => 'AccessPress Twitter Feed',
        'slug'      => 'accesspress-twitter-feed',
        'required'  => false,
    ),
    array(
        'name'      => 'AccessPress Social Icons',
        'slug'      => 'accesspress-social-icons',
        'required'  => false,
    ),
    array(
        'name'      => 'AccessPress Social Share',
        'slug'      => 'accesspress-social-share',
        'required'  => false,
    ),
    array(
        'name'      => 'AccessPress Social Counter',
        'slug'      => 'accesspress-social-counter',
        'required'  => false,
    ),
    array(
            'name'      => 'Ultimate Form Builder Lite',
            'slug'      => 'ultimate-form-builder-lite',
            'required'  => false,
        ),
);

$config = array(
    'id'           => 'gaga-lite',                 // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to pre-packaged plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => true,                   // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
    'strings'      => array(
        'page_title'                      => __( 'Install Required Plugins', 'gaga-lite' ),
        'menu_title'                      => __( 'Install Plugins', 'gaga-lite' ),
        'installing'                      => __( 'Installing Plugin: %s', 'gaga-lite' ), // %s = plugin name.
        'oops'                            => __( 'Something went wrong with the plugin API.', 'gaga-lite' ),
        'notice_can_install_required'     => _n_noop(
            'This theme requires the following plugin: %1$s.',
            'This theme requires the following plugins: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_can_install_recommended'  => _n_noop(
            'This theme recommends the following plugin: %1$s.',
            'This theme recommends the following plugins: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_cannot_install'           => _n_noop(
            'Sorry, but you do not have the correct permissions to install the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to install the %1$s plugins.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update'            => _n_noop(
            'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
            'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_ask_to_update_maybe'      => _n_noop(
            'There is an update available for: %1$s.',
            'There are updates available for the following plugins: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_cannot_update'            => _n_noop(
            'Sorry, but you do not have the correct permissions to update the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to update the %1$s plugins.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_can_activate_required'    => _n_noop(
            'The following required plugin is currently inactive: %1$s.',
            'The following required plugins are currently inactive: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop(
            'The following recommended plugin is currently inactive: %1$s.',
            'The following recommended plugins are currently inactive: %1$s.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'notice_cannot_activate'          => _n_noop(
            'Sorry, but you do not have the correct permissions to activate the %1$s plugin.',
            'Sorry, but you do not have the correct permissions to activate the %1$s plugins.',
            'gaga-lite'
        ), // %1$s = plugin name(s).
        'install_link'                    => _n_noop(
            'Begin installing plugin',
            'Begin installing plugins',
            'gaga-lite'
        ),
        'update_link'                     => _n_noop(
            'Begin updating plugin',
            'Begin updating plugins',
            'gaga-lite'
        ),
        'activate_link'                   => _n_noop(
            'Begin activating plugin',
            'Begin activating plugins',
            'gaga-lite'
        ),
        'return'                          => __( 'Return to Required Plugins Installer', 'gaga-lite' ),
        'plugin_activated'                => __( 'Plugin activated successfully.', 'gaga-lite' ),
        'activated_successfully'          => __( 'The following plugin was activated successfully:', 'gaga-lite' ),
        'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'gaga-lite' ),  // %1$s = plugin name(s).
        'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'gaga-lite' ),  // %1$s = plugin name(s).
        'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'gaga-lite' ), // %s = dashboard link.
        'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'gaga-lite' ),

        'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
    )
);

tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'gaga_lite_register_required_plugins' );
?>