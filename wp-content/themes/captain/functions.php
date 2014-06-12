<?php

function captain_setup(){

    register_nav_menus( array(
        'left'   => "Left menu top",
        'right' => 'Right menu top' ,
        'footer' => 'Footer menu top' ,
    ) );

}

function woocommerce_subcats_from_parentcat_by_ID($parent_cat_ID) {
    $args = array(
        'hierarchical' => 1,
        'show_option_none' => '',
        'hide_empty' => 0,
        'parent' => $parent_cat_ID,
        'taxonomy' => 'product_cat'
    );
    $subcats = get_categories($args);
    echo '<ul class="wooc_sclist">';
    foreach ($subcats as $sc) {
        $link = get_term_link( $sc->slug, $sc->taxonomy );
        echo '<li><a href="'. $link .'">'.$sc->name.'</a></li>';
    }
    echo '</ul>';
}
/**
 * Register widgetized area and update sidebar with default widgets
 */
function magazino_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer Sidebar', 'magazino' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ) );

}
add_action( 'widgets_init', 'magazino_widgets_init' );



add_action( 'after_setup_theme', 'captain_setup' );
