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
        'taxonomy' => 'product_cat',
        "title_li" =>""
    );
    wp_list_categories($args);

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
