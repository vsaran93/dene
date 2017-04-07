<div class="sidebar_background clearfix">
    <?php
    /**
     * The sidebar containing the main widget area.
     *
     * @package gaga lite
     */
    if (!is_active_sidebar('gaga_lite_sidebar-1')) {
        return;
    }
    dynamic_sidebar('gaga_lite_sidebar-1');
    ?>
</div>