<?php $product = get_sub_field('product');?>
<h1><?php echo $product?></h1>

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



	<div class="about-us">
    <div class="about-us-left">
        <img class= "img1" src="<?php  the_field('about_us_image','option')  ?>"/>
    </div>
    <div class="about-us-right">
        <h2 class="text"><?php the_field('title','option') ?></h2>

            <p class="text1">
				<br>
				<?php echo esc_html(' “I want a reliable shop to buy it at a high price.” “For the time being, just an assessment.”
                    Are you in trouble because you don’t know which store is the best among the many purchasers? ??')?>
                
                   
                <br>
                <br>	
				<?php echo esc_html(' “Please choose for me!')?>
                    
                <br>
                <br>
					<?php echo esc_html(' “If you want to buy expensive housing equipment, specialize in WEB,
                    Please experience the expensive purchase that can be done because our shop has thoroughly cut costs.
                    We purchase from all over the country every day.')?>
                    
                <br>
            </p>
        </h2>
        <a href="" class="btn1" role="button"> 
            <span class="elementor-button-content-wrapper"> 
                <span class="button-text">Contact Us</span> 
            </span>
        </a>	
    </div>
</div>
