<?php

function captain_setup(){

    register_nav_menus( array(
        'left'   => "Left menu top",
        'right' => 'Right menu top' ,
        'footer' => 'Footer menu top' ,
    ) );

}



add_action( 'after_setup_theme', 'captain_setup' );
