<?php
 get_header();

global   $product;
?>


    <div id="content" class="product-page">
        <div class="breadcrumb">
           <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }
            ?>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>


                <?php wc_get_template_part( 'content', 'single-product' ); ?>

        <?php endwhile; // end of the loop. ?>
        <div class="clear"></div>
    </div>
<?php
    get_footer();
?>