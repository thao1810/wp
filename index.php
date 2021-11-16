<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thao
 */

get_header();
?>

<div class="banner">
	<div class="banner-content">
		<div class="content-left">
			<img src="<?php  the_field('Content-left','option')  ?>">
			<img src="<?php echo get_template_directory_uri() . "/assets/images/Slider.png" ?>">
			<!-- <img src="wp-content/themes/thao/assets/images/Slider.png" alt=""> -->

		</div>
		<div class="content-right">
			<div class="content-right-top">
				<img class="banner-header-1" src="<?php  the_field('Content-right-top','option')  ?>" alt="">

				<div class="banner-box-button">
					<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">

						<span><?php  the_field('Content-right-top-text','option')  ?></span>

					</a>
				</div>
			</div>
			<div class="content-right-bottom">
				<img class="banner-header-2" src="<?php  the_field('Content-right-bottom','option')  ?>" alt="">
				<div class="banner-box-button">
					<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">

						<span><?php  the_field('Content-right-bottom-text','option')  ?></span>

					</a>
				</div>
			</div>
		</div>
	</div>
</div>
	

<div class="content" >
	<div class="container" style="background: url(wp-content/themes/thao/assets/images/background-step.jpg);" >
		<div class="box-title">
			<div class="arrow-left"></div>
			<div class="arrow-right"></div>
			<div class="box-title-heading">4 easy steps</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="box-item-image">
					<img src="wp-content/themes/thao/assets/images/step1.png" alt="">
				</div>
				<div class="box-item-textbox">
					<div class="box-item-textbox-heading">1. Select the product you want<br> to sell. Go to the cart</div>
					<p class="box-item-textbox-description">We purchase a wide range of products.<br> You can check the product list on each page.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="box-item-image">
					<img src="wp-content/themes/thao/assets/images/step2.png" alt="">
				</div>
				<div class="box-item-textbox">
					<div class="box-item-textbox-heading">2. Enter your customer information</div>
					<p class="box-item-textbox-description">Please enter your contact information.</p>
				</div>
				</div>
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="box-item-image">
					<img src="wp-content/themes/thao/assets/images/step3.png" alt="">
				</div>
				<div class="box-item-textbox">
					<div class="box-item-textbox-heading">3. Select a payment method</div>
					<p class="box-item-textbox-description">Purchased products will be paid according<br> to the customer's request.</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 box-item">
				<div class="box-item-image">
					<img src="wp-content/themes/thao/assets/images/step4.png" alt="">
				</div>
				<div class="box-item-textbox">
					<div class="box-item-textbox-heading">4. Confirm the request</div>
					<div class="box-item-textbox-description">We will get back to <br>you within 24 hours of confirming your order.</div>
				</div>
			</div>
		</div>
		
	</div>

	</div>


	<div class="product">
			<div class="tab-bar">
				<div class="ct-left">
					<i id = "fa" class="fas fa-dot-circle"></i>
					<h2>Strengthening purchase</h2>
				</div>
				<a href="https://74.arrowhitech.net/asia/kaitori/en/shop/" class="show-all">Show all<i class="fas fa-angle-double-right"></i></a>
			</div>
	<div class="product-item">
			
			

		<?php
		$vnkings = new WP_Query(array(
		'post_type'=>'product',
		'post_status'=>'publish',
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'id',
				'terms' => '25'
			)
		),
		'orderby' => 'ID',
		'order' => 'DESC'));
		?>
		<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
		
			<div class="product-item-inner">
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>
					</a> 
				<div class="product-item-inner__text">
					<div class="product-item-inner__text--name">
						<div class="code">
							<?php 
								global $product;
								if( $product->get_sku() ) {
									echo  $product->get_sku(); 
								}
							?>
						</div>
						
						
						<p class="name"><?php the_title(); ?></p>
						<p class="price"><?php echo $product->get_price_html(); ?></p>
						<!--<a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">Thêm vào giỏ</a> -->
					</div>
				</div>
			</div>	
			
		

		<?php endwhile ; wp_reset_query() ;?>
	</div>

	</div>

	<div class="banner-product">
		<div class="bn-product-left">
			<img class= "img1" src="<?php  the_field('image-left','option')  ?>"/>
			<div class="banner-box-button">
				<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">
					
					<span><?php  the_field('text-left','option')  ?></span> 
					
				</a>
			</div>
		</div>
		<div class="bn-product-between">
			<div class="top">
				<img class= "img1" src="<?php  the_field('image-between-top','option')  ?>"/>
				<div class="banner-box-button">
					<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">
						
						<span><?php  the_field('text-between-top','option')  ?></span> 
						
					</a>
				</div>
			</div>
			<div class="bottom">
				<img class= "img1" src="<?php  the_field('image-between-bottom-left','option')  ?>"/>
				<div class="banner-box-button">
					<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">
						
						<span><?php  the_field('text-between-bottom-left','option')  ?></span> 
						
					</a>
				</div>
				<img class= "img1" src="<?php  the_field('image-between-bottom-right','option')  ?>"/>
				<div class="banner-box">
					<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">
						
						<span><?php  the_field('text-between-bottom-right','option')  ?></span> 
						
					</a>
				</div>
			</div>
		</div>
		<div class="bn-product-right">
			<img class= "img1" src="<?php echo get_template_directory_uri()."/assets/images/Rectangle 16.png" ?>"/>
			<div class="banner-box">
				<a class="btn btn-banner" href="https://74.arrowhitech.net/asia/kaitori/en/product-category/cosmetics-cosmetics/">
					
					<span><?php  the_field('text-right','option')  ?></span> 
					
				</a>
			</div>
		</div>
	</div>
	
</div>





<?php
get_sidebar();
get_footer();
