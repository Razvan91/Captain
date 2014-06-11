<?php
    get_header();
?>
<div id="content"> <div id="page-content">
<?php

    while(have_posts()):
        the_post();

  ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="content">
        <?php the_content(); ?>

    </div>

<?php
    endwhile;

?>
    </div></div>
<?php get_footer(); ?>