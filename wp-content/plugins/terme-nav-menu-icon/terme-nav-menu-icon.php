<?php
/*
Plugin Name: Terme Nav Menu Icon
Plugin URI: http://termetheme.com
Description: Add icon into wordpress nav menu
Version: 1.0
Author: TermeTheme
Author URI: http://termetheme.com
License: GPL2
*/
add_action( 'plugins_loaded', 'terme_nmi_load_textdomain' );
function terme_nmi_load_textdomain() {
	load_plugin_textdomain( 'terme_nmi', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'wp_enqueue_scripts', 'terme_nav_menu_icon_assets' );
function terme_nav_menu_icon_assets() {
	wp_enqueue_style( 'font-awesome', PLUGIN_URL . 'assets/font-awesome/css/font-awesome.min.css', array(), '4.5.0' );
}
defined('PLUGIN_DIR') or define('PLUGIN_DIR',  dirname(__FILE__).DIRECTORY_SEPARATOR);
define('PLUGIN_URL', plugin_dir_url(__FILE__));
require_once PLUGIN_DIR . '/inc/menu-item-icon-class.php';
include (PLUGIN_DIR . '/inc/menu-item-icon-field.php');
include (PLUGIN_DIR . '/inc/nav-menu-walker.php');
