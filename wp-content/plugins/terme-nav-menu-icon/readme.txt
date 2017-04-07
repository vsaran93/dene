=== Terme Nav Menu Icon ===
Contributors: termetheme
Donate link: http://termetheme.com/
Tags: menu, icon, nav
Requires at least: 4.4.2
Tested up to: 3.4
Stable tag: 4.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Terme Nav Menu Icon let you set an icon for your menu's items.

== Description ==

With Terme Nav Menu Icon you can easily set Font Awesome icons for your menu items.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Appearance->Menus to add item into your menus with icon.
4. <strong>Important Step: </strong> To display icons in your theme you should add <strong><i>walker</i></strong> parameter into your theme's wp_nav_menu function. something like this: 
<code>
wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class'     => 'primary-menu',
    'walker'         => new Terme_Menu_Walker()
) );
</code>


== Frequently Asked Questions ==


== Screenshots ==

1. Admin panel options
2. Front-end displaying icons

== Changelog ==

= 1.0 =
* Use Font Awesome Icons
* Farsi language support

