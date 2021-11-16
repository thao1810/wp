<?php
/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<?php
global $product; 
$numleft  = $product->get_stock_quantity(); 
echo $product;
if($numleft==0) {
   // out of stock
	echo "There are no items available at this time."; 
}
// else if($numleft==1) {
// 	echo $numleft ." boxes per box.";
// }
else {
	echo '<p class="quantity">'.$numleft ." boxes per box.</p>";
}
global $post;
$total = get_post_meta($post->ID, 'total_sales', true) + $numleft;
echo '<p class="progress-product"><progress value="'. get_post_meta($post->ID, 'total_sales', true) .'" max="'.$total.'"></progress></p>';

?>

