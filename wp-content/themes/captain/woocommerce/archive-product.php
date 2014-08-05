<?php
    get_header();
global $wp_query;

$cat_obj = $wp_query->get_queried_object();



?>

    <div id="content" class="categories-content">
        <div class="categories">
            <?php woocommerce_subcats_from_parentcat_by_ID($cat_obj->term_id); ?>
            </div>
        <div class="products view-5" style="width:900px;">

            <?php  while ( have_posts() ) : the_post();

             get_template_part("woocommerce/content", "product");

            ?>

    <?php endwhile; ?>
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
        <div class="clear"></div>
    </div>

<?php
    get_footer();
?>
