<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/asset/swiper-bundle.min.css' );
    wp_enqueue_script( 'wp_swiper', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0', true);
    wp_enqueue_script( 'wp_bundle_swiper', get_stylesheet_directory_uri() . '/asset/swiper-bundle.min.js', array(), '1.0', false);

}

?>