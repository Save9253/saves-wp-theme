<?php

#Gets the pictures from poruct's id
/*$product_id = '31';
$product = new WC_Product($product_id);
$attachment_ids = $product->get_gallery_image_ids();

foreach( $attachment_ids as $attachment_id )
    {
      // Display the image URL
      #echo $Original_image_url = wp_get_attachment_url( $attachment_id );

      // Display Image instead of URL
      echo wp_get_attachment_image($attachment_id, 'full');

    };
*/

#Gets all the products as array
$products = wc_get_products( $args );

#Gets products id
#$products[1]->id

echo "<h2>Page</h2>";
print_r($products[0]->id);#shows what it does
echo "<hr/>";

#Page Conetent
if ( have_posts() ) {
    while ( have_posts() ) : the_post();
        echo "<h1>";
        the_title();
        echo "</h1>";
        the_content();
    endwhile;
};

#Products
$products = array(
    'post_type' => 'product',
    'orderby' => $orderby,
);
$pord_loop = new WP_Query( $products );
		if ( $pord_loop->have_posts() ) {
			while ( $pord_loop->have_posts() ) : $pord_loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
wp_reset_postdata();

get_footer();

?>
