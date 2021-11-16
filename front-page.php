<!-- <h1>dkdldjaldfjiọvfhda</h1> -->
<?php
get_header();
?>
<!-- <div class="contaier">
    <h1>dffjịkf</h1> -->

    <?php //if( have_rows('content') ): ?>

        
            <?php //while(have_rows('page_builder') ) : the_row() ?>
                <?php //if( get_row_layout() == 'column-section' ): ?>
                    <!-- Yes it work -->

                <?php //  endif;?>
            <?php // endwhile; ?>  
    <?php // endif;?>         

        
    
    
<!-- </div> -->


<?php
    // Check value exists.
if( have_rows('content') ):

    // Loop through rows.
    while ( have_rows('content') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'column-section' ):
            
            get_template_part('template-parts/flexible-content/home/module', 'columsection');
        endif;    
            // Do something...
        // Case: Paragraph layout.
        if( get_row_layout() == 'product' ):
            
            get_template_part('template-parts/flexible-content/home/module', 'product');    
        // Case: Download layout.
        // elseif( get_row_layout() == 'module_follow' ): 
        //     $file = get_sub_field('module_follow');
    

        endif;
        if( get_row_layout() == 'product-main' ):
            
            get_template_part('template-parts/flexible-content/home/module', 'productMain');    
        // Case: Download layout.
        // elseif( get_row_layout() == 'module_follow' ): 
        //     $file = get_sub_field('module_follow');
    

        endif;
        if( get_row_layout() == 'column-section' ):
            
            get_template_part('template-parts/flexible-content/home/module', 'productMain');
        endif;  

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


$a = 2;

echo ++$a;
$b = $a+3;
echo "</br>";
echo $b;
?>

<?php
get_sidebar();
get_footer();
?>