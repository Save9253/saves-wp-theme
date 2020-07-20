<?php
/**
 * Single Product stock.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<p class="stck <?php echo esc_attr( $class ); ?>"><?php echo wp_kses_post( $availability ); ?></p>
