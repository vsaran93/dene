<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package gaga lite
 */

if ( ! is_active_sidebar( 'gaga_lite_sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'gaga_lite_sidebar-1' ); ?>
</div><!-- #secondary -->