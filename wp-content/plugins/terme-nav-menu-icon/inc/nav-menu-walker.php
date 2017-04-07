<?php
class Terme_Menu_Walker extends Walker_Nav_Menu {

    /**
     * Start the element output.
     *
     * We're injecting our custom fields after the div.submitbox
     *
     * @see Walker_Nav_Menu::start_el()
     * @since 0.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   Menu item args.
     * @param int    $id     Nav menu ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $icon = get_post_meta( $item->ID, 'menu-item-icon', true );

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // add span with number here
        // if ( $depth == 0 ) { // remove if statement if depth check is not required
        //     $output .= sprintf( '<span>%02s.</span>', $this->number++ );
        // }

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        if (isset($icon) && !empty($icon)) {
            $item_output .= '<i class="fa '.$icon.'"></i> ';
        }
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }


    /**
     * Get custom fields
     *
     * @access protected
     * @since 0.1.0
     * @uses add_action() Calls 'menu_item_custom_fields' hook
     *
     * @param object $item  Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args  Menu item args.
     * @param int    $id    Nav menu ID.
     *
     * @return string Form fields
     */
    protected function get_fields( $item, $depth, $args = array(), $id = 0 ) {
        ob_start();

        /**
         * Get menu item custom fields from plugins/themes
         *
         * @since 0.1.0
         *
         * @param object $item  Menu item data object.
         * @param int    $depth  Depth of menu item. Used for padding.
         * @param array  $args  Menu item args.
         * @param int    $id    Nav menu ID.
         *
         * @return string Custom fields
         */
        do_action( 'wp_nav_menu_item_custom_fields', $id, $item, $depth, $args );

        return ob_get_clean();
    }
}