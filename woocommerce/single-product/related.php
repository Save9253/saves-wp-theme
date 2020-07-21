<?php
/**
 * Related Products
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<div class="related products RelD">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<div class="Gridi RelT"><h2><?php echo esc_html( $heading ); ?></h2></div>
		<?php endif; ?>

		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $related_product ) : ?>

				<div class="Gridi RelP" style="background-image:url('<?php echo wp_get_attachment_url($related_product->image_id)?>)">
					<?php
						if($related_product->is_on_sale()){
							echo '<div class="slFlshS"><div class="cntr"><p>Sale!</p></div></div>';
						}
					?>
					<div class="RelPCon">
						<a href="<?php echo get_permalink($related_product->id)?>">
							<h3><?php echo $related_product->name ?></h3>
							<p><?php
							if($related_product->price == $related_product->regular_price):
								echo '<span class="prc">$'.$related_product->regular_price.'</span>';
							else:
								echo '<span class="oldPrc">$'.$related_product->regular_price.'</span>'." ".'<span class="newPrc">$'.$related_product->sale_price.'</span>';
							endif;
							?></p>
							<p class="Dis"><?php echo $related_product->short_description ?></p>
						</a>
					</div>
				</div>
			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

	</div>
	<?php
endif;

wp_reset_postdata();
