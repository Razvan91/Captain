<?php get_header(); ?>
<div id="content">
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
</div>
<?php get_footer(); ?>