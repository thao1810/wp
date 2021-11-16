<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thao
 */

?>

	

<?php wp_footer(); ?>
<div class="footer">
    <div class="footer-top">
        <div class="row">
            <div class=" icon-phone">
                <div class="border-icon">
                    <img src="<?php echo get_template_directory_uri()."/assets/images/Vector-3.png" ?>" alt="">
                    <div class="text-right">
                        <p> Isesaki Main Store:</p>
                        <h4>0270-61-9899</h4>
                    </div>
                </div>
            </div>
            <div class="icon-time">
                <div class="border-icon">
                    <img src="<?php echo get_template_directory_uri()."/assets/images/Frame-1.png" ?>" alt="">
                </div>
                <div class="text-right">
                    <p> Reception time:</p>
                    <h4> 9:00-17:00</h4>
                </div>
            </div>
        
            <div class="icon-mail">
                <div class="border-icon">
                    <img src="<?php echo get_template_directory_uri()."/assets/images/Frame-7.png" ?>" alt="">
                </div>
                <div class="text-right">
                    <p> Receive e-mail newsletter</p>
                    <div class="form">
                        <input type="text"  class = "form1" name= "your-email" placeholder="Email address" class="ip"/>
                        <input type="submit" class = "form2" value="➜" class="ip1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-main">
            <div class="row">
                <div class="col-md-3 shop-post">
                    <div class="inner">
                        <div class="title1">
                            <h4> <?php the_field('col1','option') ?></h4>
                        </div> 

                        <div class="content">
                            <li>
                                <p> Location:</p>
                                <div class="p-right">
                                    <p> 〒372-0827</p>
                                    <p> 1597-2 Yatsutajimamachi, Isesaki City, Gunma Prefecture</p>
                                </div>
                            </li>
                            <li>
                                <p> Phone:</p>
                                <div class="p-right">
                                    <p> 0270-61-9899</p>
                                </div>
                            </li>
                            <li>
                                <p> Email:</p>
                                <div class="p-right">
                                    <p> info@st​​arshop-kaitori.email</p>
                                </div>
                            </li>
                        </div> 
                        <div class="flow-us">
                            <p> Follow us</p> 
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>   
                                  
                        </div>
                    </div>
                    
                   
                </div>

                <div class="col-md-3 menu-post">
                    <div class="inner">
                        <div class="title1">
                            <h4> MENU</h4>
                        </div>
                        <nav class="footer-link" data-columns="2">
                            <div class="menu-menu-home-en-container">
                                <ul id="menu-menu-home-en-1" class="columns">
                                <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container' => 'false',
                                'menu_id' => 'menu-1',
                                'menu_class' => 'menu'
                            )
                        ); ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3 category-post">
                    <div class="title1 title2">
                        <h4> All categories</h4>
                    </div>
                    <div class="text-post">
                        <ul>
                            <?php
                                // Get the taxonomy's terms
                                $terms = get_terms(
                                    array(
                                        'taxonomy'   => 'product_cat',
                                        'hide_empty' => false,
                                    )
                                );
                                // Check if any term exists
                                if ( ! empty( $terms ) && is_array( $terms ) ) {
                                    // Run a loop and print them all
                                    foreach ( $terms as $term ) { ?>
                                    <?php $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true ); 
                                        if(intval($thumbnail_id) > 0){
                                            //echo '<img src="'.wp_get_attachment_url("$thumbnail_id").'"/>';
                                        }
                                    ?>
                                        <li><a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                                            <?php echo $term->name; ?>
                                        </a></li><?php
                                    }
                                } 
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 information-post">
                    <div class="title1">
                        <h4> Information</h4>
                    </div>
                    <div class="link-information"> 
                    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'container' => 'false',
                                'menu_id' => 'menu-2',
                                'menu_class' => 'menu'
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        
        </div>

        <div class="footer-absolute">
            <div class="container">
                <div class="inner">
                    <p>Gunma Prefecture Public Safety Commission antique dealer permit No. 421090324400</p>
                    <p>Copyright © STARSHOP Isesaki Main Store All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>   
</div>

</body>
</html>
