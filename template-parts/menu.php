<?php
/**
 * Template part for displaying the main menu
 *
 * @package wpboilerplate
 */
$menu_name = 'main-menu';
$menu = wp_get_nav_menu_object( $menu_name );

if ( $menu ) {
	$menu_items = wp_get_nav_menu_items( $menu->term_id );
	
	if ( $menu_items ) {
		echo '<ul>';
		foreach ( $menu_items as $item ) {
			echo '<li><a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a></li>';
		}
		echo '</ul>';
	}
}
?>
