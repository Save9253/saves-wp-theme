<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="loopItm" style="background-image:url('<?php echo wp_get_attachment_url($product->image_id)?>)">
	<?php
		if($product->is_on_sale()){
			echo '<div class="slFlshS"><div class="cntr"><p>Sale!</p></div></div>';
		}
	?>
	<div class="loopItmCon">
		<a href="<?php echo get_permalink($product->id)?>">
			<h3><?php echo $product->name ?></h3>
			<p><?php
			if($product->price == $product->regular_price):
				echo '<span class="prc">$'.$product->regular_price.'</span>';
			else:
				echo '<span class="oldPrc">$'.$product->regular_price.'</span>'." ".'<span class="newPrc">$'.$product->sale_price.'</span>';
			endif;
			?></p>
			<p class="Dis"><?php echo $product->short_description ?></p>
		</a>
	</div>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	#do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	#do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	#do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	#do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	#do_action( 'woocommerce_after_shop_loop_item' );
	?>
	</a>
</div>
