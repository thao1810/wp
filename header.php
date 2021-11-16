<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thao
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="rown">
				<div class="right">
					<h3>LANGUAGE</h3>
					<img class="img2" src="wp-content/themes/thao/assets/images/cờ.png" />
					<div class="language-dropdown">
						<svg class="btn" width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.49983 4.20711L8.70694 0L0.292725 1.00338e-07L4.49983 4.20711Z" fill="#707070"></path>
						</svg>
						<ul id="add_class_active" class="dropdown-content">
							<li>
								<img class="img1" src="wp-content/themes/thao/assets/images/lg1.png" />
								<a href="https://74.arrowhitech.net/asia/kaitori/">日本語</a>
							</li>
							<li>
								<img class="img1" src="wp-content/themes/thao/assets/images/cờ.png" />
								<a href="">English</a>
							</li>
							<li>
								<img class="img1" src="wp-content/themes/thao/assets/images/co2.png" />
								<a href="">中文 (中国)</a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</header>
	<div class="container">
		<div class="header-main">
			<div class="header-main__top ">
				<div class="col-md-2">
					<div class="text-logo-top">

					</div>
					<div class="header-main-logo">
						<div class="site-logo">
							<a href="http://localhost:8888/thaoo/">
								<?php
								$custom_logo_id = get_theme_mod('custom_logo');
								$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
								if (has_custom_logo()) {
									echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
								} else {
									echo '<h1>' . get_bloginfo('name') . '</h1>';
								}
								?>
							</a>

						</div>
					</div>
					<div class="text-logo-bottom">

					</div>
				</div>
				<div class="col-md-5">
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
						<div class="row">
							<div class="col-4 border-select">
								<!-- <select id="carte" name="product_cat" value="">
									<option value=""> All categories</option>
									<option value="strengthening-purchase">Strengthening purchase</option>
									<option value="other">Other</option>
									<option value="cosmetics-cosmetics">Cosmetics</option>
									<option value="baby-products">Baby products</option>
									<option value="daily-necessities">Daily necessities</option>
									<option value="healthy-food">Healthy food</option>
									<option value="beverage">Beverage</option>
									<option value="food">Food</option>
								</select> -->
								<?php
								$pro = $_GET['s_cat'] ?? null;
								wp_dropdown_categories(array(
									'show_option_all' => 'All categorys',
									'orderby' => 'name',
									'echo' => 1,
									'name' => 's_cat',
									'selected' => $pro,
									'hierarchical' => true,
									'value_field' => 'slug',
									'taxonomy' => 'product_cat',
								));
								?>

							</div>
							<div class="col-8 input-group ">
								<label class="screen-reader-text" for="s"> Search for: </label>
								<input type="text" value="" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Enter a search keyword">
								<button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
								<input type="hidden" name="post_type" value="product">
								<!-- <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Enter a seach keyword">
								<input type="hidden" name="post_type" value="product">
								<button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button> -->
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<div class="left">
						<div class="icon">
							<img class="img1" src="<?php echo get_template_directory_uri() . "/assets/images/icon.png" ?>" />
							<!-- <img class= "img1" src="wp-content/themes/thao/assets/images/icon.png"/> -->
						</div>
						<div class="title">
							<p> Isesaki Main Store:</p>
							<h5>0270-61-9899</h5>
							<!-- <p class="text-mail">Reception hours: 9: 00-17: 00 (weekdays)</p> -->
						</div>
					</div>
					<div class="right1">
						<div class="icon">
							<img class="img1" src="<?php echo get_template_directory_uri() . "/assets/images/icon1.png" ?>" />
						</div>
						<div class="title">
							<p> Reception time:</p>
							<h5> 9:00-17:00</h5>
						</div>
					</div>
					<div class="update-day">
						<!-- <span>Updated: 2021-29-01</span> -->
					</div>
				</div>
				<div class="col-md-1 ">
					<div class="header-main-optional">
						<div class="header-cart">
							<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>">
								<div class="border">
									<i class="fas fa-shopping-basket"></i>

								</div>
								<div class="total1"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
								<p class="total">
									<span class="woocommerce-Price-amount amount">
										<bdi><?php echo WC()->cart->get_cart_total(); ?><span class="woocommerce-Price-currencySymbol">¥</span></bdi>
									</span>
								</p>
							</a>

						</div>

					</div>
				</div>
			</div>

		</div>


	</div>
	<div class="header-main">

		<div class="header-main-bottom">
			<div class="menu-row">
				<div class="header-cate-menu">
					<svg class="cate-down" width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 1.59998H24M0 14.4H14.4M0 7.99998H9.6" stroke="white" stroke-width="2"></path>
					</svg>
					<p>All categories</p>
					<ul class="show-cate-main-custom">
						<?php
						// Get the taxonomy's terms
						$terms = get_terms(
							array(
								'taxonomy'   => 'product_cat',
								'hide_empty' => false,
							)
						);
						// Check if any term exists
						if (!empty($terms) && is_array($terms)) {
							// Run a loop and print them all
							foreach ($terms as $term) { ?>
								<?php $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
								if (intval($thumbnail_id) > 0) {
									echo '<img src="' . wp_get_attachment_url("$thumbnail_id") . '"/>';
								}
								?>
								<li><a href="<?php echo esc_url(get_term_link($term)) ?>">
										<?php echo $term->name; ?>
									</a></li><?php
											}
										}
												?>
					</ul>
				</div>
				<div class="cate-down">

					<?php wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => 'false',
							'menu_id' => 'header-menu',
							'menu_class' => 'menu'
						)
					); ?>

				</div>
			</div>
		</div>

	</div>
</body>


 