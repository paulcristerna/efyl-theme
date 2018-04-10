<?php

register_nav_menus( array(
'menu-top' => 'Menu superior',
'menu-movil' => 'Menu Movil'
));

add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="abstract"', $excerpt);
}

add_theme_support( 'post-thumbnails' );

add_image_size( 'miniatura', 500, 500 ); 

//set_post_thumbnail_size( 50, 50 );
?>