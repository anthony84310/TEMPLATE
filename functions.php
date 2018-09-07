<?php

function custom_front_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() ,false,'1.2','all');

    wp_enqueue_style( 'main', get_template_directory_uri() . '/style/./main.3f6952e4.css',false,'1.2','all');

    wp_enqueue_script( 'monjquerry', get_template_directory_uri() . '/style/./main.70a66962.js',false,'1.2',true);
    
    wp_enqueue_style( 'images', get_template_directory_uri() . '/style/./assets/images',false,'1.2','all');
}

add_action('wp_enqueue_scripts', 'custom_front_scripts' );
  
//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu header' ));
}
add_action( 'init', 'register_my_menu' );


?>  