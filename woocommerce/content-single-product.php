<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="SnglPrdG" <?php wc_product_class( '', $product ); ?>>
	<div class="PrdImgs Gridi">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>

	<div class="summary entry-summary Smr Gridi">
		<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );

		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );

		global $product;
		$dmnUn = get_option('woocommerce_dimension_unit');
		$wghtUn = get_option('woocommerce_weight_unit');
		$prdWh = $product->weight;
		$prdHg = $product->height;
		$prdWd = $product->width;

		?>
		<svg width="170" height="150" viewBox="0 0 170 150" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
			<rect x="10" y="10" width="100" height="100" stroke-width="1.5"/>
			<line x1="10" y1="125" x2="110" y2="125" stroke-width="1" marker-start="url(#ar)" marker-end="url(#ar)"/>
			<rect x="40" y="120" width="50" height="10" stroke="none" fill="var(--blk)"/>
			<text x="45" y="130" stroke="none" fill="white"><?php if($prdWd){echo $prdWd.' '.$dmnUn;} else {echo "?";} ?></text>
			<line x1="125" y1="10" x2="125" y2="110" stroke-width="1" marker-start="url(#ar)" marker-end="url(#ar)"/>
			<rect x="120" y="46" width="10" height="25" stroke="none" fill="var(--blk)"/>
			<text x="120" y="63" stroke="none" fill="white"><?php if($prdHg){echo $prdHg.' '.$dmnUn;} else {echo "?";} ?></text>
			<defs>
				<marker id="ar" viewBox="0 0 7 12" refX="5" refY="6" markerWidth="6" markerHeight="12" orient="auto-start-reverse">
				   <path d="M1 1L6 6L1 11"/>
				</marker>
			</defs>
		</svg>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
