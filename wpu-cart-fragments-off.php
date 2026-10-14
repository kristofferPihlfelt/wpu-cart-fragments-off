<?php
/**
 * Plugin Name:       WPU Cart Fragments Off
 * Plugin URI:        https://wordpressutveckling.se/varfor-ar-min-woocommerce-butik-langsam/
 * Description:       Tar bort skriptet wc-cart-fragments utanför varukorg och kassa. Gäller den klassiska varukorgswidgeten och minivarukorgen; minivarukorgsblocket använder inte skriptet.
 * Version:           1.0.0
 * Requires at least: 6.7
 * Requires PHP:      8.2
 * Requires Plugins:  woocommerce
 * Author:            Pihlfelt & Vänner
 * Author URI:        https://pihlfelt.se
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || exit;

// Priority 20: WooCommerce registers its scripts at 10 on the same hook, and classic themes enqueue the handle at 10 as well.
add_action( 'wp_enqueue_scripts', 'wpu_cart_fragments_off', 20 );
function wpu_cart_fragments_off() {
	if ( ! function_exists( 'is_cart' ) || is_cart() || is_checkout() ) {
		return;
	}

	// Deregister as well, so a late enqueue from the cart widget (which renders after wp_enqueue_scripts) has nothing to print.
	wp_dequeue_script( 'wc-cart-fragments' );
	wp_deregister_script( 'wc-cart-fragments' );
}
