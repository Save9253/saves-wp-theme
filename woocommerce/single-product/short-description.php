<?php
/**
 * Single product short description
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

#if ( ! $short_description ) {
#	return;
#}

global $product;

$dmnUn = get_option('woocommerce_dimension_unit');
$wghtUn = get_option('woocommerce_weight_unit');
$prdWh = $product->weight;
$prdHg = $product->height;
$prdWd = $product->width;

$prdWdUn = $prdWd.' '.$dmnUn;
$prdHgUn = $prdHg.' '.$dmnUn;
if ($prdWd){$prdWdUn = $prdWd.' '.$dmnUn;} else {$prdWdUn = "?";}
if ($prdHg){$prdHgUn = $prdHg.' '.$dmnUn;} else {$prdHgUn = "?";}
$prdWdLng = (strlen($prdWdUn)+2)*6.25;
$prdHgLng = strlen($prdHgUn);

$recWd = 100;
$recHg = 100;
if($prdWd || $prdHg){
	if($prdWd<$prdHg){$recWd = ($prdWd/$prdHg)*100;} else {$recHg = ($prdHg/$prdWd)*100;}
}

$recWdx = (($recWd/2) - ($prdWdLng/2)) + 10;
$recHgy = ($recHg/2) - 2.5;

?>

<div class="shrtDis" style="grid-template-columns: auto <?php echo $recWd+70; ?>px;">
	<div>
		<?php if($short_description){echo $short_description;} elseif($product->description){echo '<p>'.$product->description.'</p>';} else {echo "<p>No description available</p>";}// WPCS: XSS ok.	?>
	</div>
	<svg width="<?php echo $recWd+70; ?>" height="<?php echo $recHg+50; ?>" fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
		<rect x="10" y="10" width="<?php echo $recWd ?>" height="<?php echo $recHg ?>" stroke-width="1.5"/>
		<line x1="10" y1="<?php echo $recHg+25 ?>" x2="<?php echo $recWd+10 ?>" y2="<?php echo $recHg+25 ?>" stroke-width="1" marker-start="url(#ar)" marker-end="url(#ar)"/>
		<rect x="<?php echo $recWdx?>" y="<?php echo $recHg+20 ?>" width="<?php echo $prdWdLng?>" height="10" stroke="none" fill="var(--blk)"/>
		<text x="<?php echo $recWdx+5?>" y="<?php echo $recHg+30 ?>" stroke="none" fill="white"><?php echo $prdWdUn; ?></text>
		<line x1="<?php echo $recWd+25 ?>" y1="10" x2="<?php echo $recWd+25 ?>" y2="<?php echo $recHg+10 ?>" stroke-width="1" marker-start="url(#ar)" marker-end="url(#ar)"/>
		<rect x="<?php echo $recWd+20 ?>" y="<?php echo $recHgy?>" width="10" height="25" stroke="none" fill="var(--blk)"/>
		<text x="<?php echo $recWd+21 ?>" y="<?php echo $recHgy+17?>" stroke="none" fill="white"><?php echo $prdHgUn;?></text>
		<defs>
			<marker id="ar" viewBox="0 0 7 12" refX="5" refY="6" markerWidth="6" markerHeight="12" orient="auto-start-reverse">
				<path d="M1 1L6 6L1 11"/>
			</marker>
		</defs>
	</svg>
</div>
