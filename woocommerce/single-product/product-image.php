<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<div class="woocommerce-img-main">
	<?php
		global $product;
		echo '<div id="woocommerce-qwerty" ><img src="'. wp_get_attachment_url( $product->get_image_id() ).'"></div>';

		$attachment_ids = $product->get_gallery_image_ids();

		foreach( $attachment_ids as $attachment_id ) {
			echo '<div id="woocommerce-qwerty" ><img src="'. $image_link = wp_get_attachment_url( $attachment_id ).'"></div>';
		}
	?>
	</div>
	<div class="woocommerce-img-sub">
	<?php
		global $product;
		echo '<img style="width:55px; height:150px;" class="woocommerce-img-sub" src="'. wp_get_attachment_url( $product->get_image_id() ).'">';
		
		$attachment_ids = $product->get_gallery_image_ids();

		foreach( $attachment_ids as $attachment_id ) {
			echo '<img style="width:55px; height:150px;" class="woocommerce-img-sub" src="'. $image_link = wp_get_attachment_url( $attachment_id ).'">';
		}
	?>
	</div>
</div>

<div class="inner1">
	<h2 class="title">4 easy steps</h2>
	<div class="woocommerce_buy_step step_1">
		<div class="step_image_re"> 
			<img class="step_image" src="..\..\wp-content\themes\thao\assets\images\step1.png" alt="">
			<div class="number">1</div>
		</div>
		<div class="step_title_description">
				<h3 class="step_title">Select the product you want to sell ・ Go to the cart</h3>
				<p class="step_description">We purchase a wide range of products. You can check the product list on each page.</p>
			
		</div>
	</div>
	<div class="woocommerce_buy_step step_2">
		<div class="step_image_re"> 
			<img class="step_image" src="..\..\wp-content/themes/thao/assets/images/step2.png" alt="">
			<div class="number">2</div>
		</div>
		<div class="step_title_description">
			<h3 class="step_title">Enter customer information</h3>
			<p class="step_description">Please enter your contact information.</p>
		</div>
	</div>
	<div class="woocommerce_buy_step step_3">
		<div class="step_image_re"> 
			<img class="step_image" src="..\..\wp-content/themes/thao/assets/images/step3.png" alt="">
			<div class="number">3</div>
		</div>
		<div class="step_title_description">
			<h3 class="step_title">Select payment method</h3>
			<p class="step_description">Purchased products will be paid according to the customer's request.</p>
		</div>
	</div>
	<div class="woocommerce_buy_step step_4">
		<div class="step_image_re"> 
			<img class="step_image" src="..\..\wp-content/themes/thao/assets/images/step4.png" alt="">
			<div class="number">4</div>
		</div>
		<div class="step_title_description">
			<h3 class="step_title">confirm for request</h3>
			<p class="step_description">We will get back to you within 24 hours of confirming your order.</p>
		</div>
	</div>
</div>



