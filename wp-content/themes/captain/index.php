<?php get_header(); ?>
<div id="content" class="content-home categories-content">
    <div class="slider">
        <div class="arrows">
            <a href="#" class="arrow prev" id="slider-prev"></a>
            <a href="#" class="arrow next" id="slider-next"></a>
        </div>


        <?php if(get_field('slider_images', 'option')): ?>

        <div id="slider">

                <?php while(has_sub_field('slider_images', 'option')): ?>

                    <img src="<?php the_sub_field('slider'); ?>"/>

                <?php endwhile; ?>

                </div>

        <?php endif; ?>

    </div>

    <div id="product-wrapper">

        <div class="products view-5" >

            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                    get_template_part("woocommerce/content", "product");
                endwhile;
            }
            wp_reset_postdata();
             ?>
        </div>



        <div class="clear"></div></div>
</div>
    <div class="filters">
        <span class="title">Filter</span>

        <?php get_sidebar(); ?>
        <div class="view">
            <span>View</span>
            <ul>
                <li class="view-3 active-view" data-id=".view-3" data-product="small"></li>
                <li class="view-5"  data-id=".view-5" data-product="medium"></li>
                <li class="view-7"  data-id=".view-7" data-product="large"></li>
            </ul>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/js/archive-product.js"></script>
<?php get_footer(); ?>