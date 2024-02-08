<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animations', get_stylesheet_directory_uri() . '/sass/animations.scss' );
    wp_enqueue_style( 'swiper-style', get_stylesheet_directory_uri() . '/asset/swiper-bundle.min.css' );
    wp_enqueue_script( 'wp_swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '1.0', true);
    wp_enqueue_script( 'wp_custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0', true);
    wp_enqueue_script( 'wp_bundle_swiper', get_stylesheet_directory_uri() . '/asset/swiper-bundle.min.js', array(), '1.0', false);
    wp_enqueue_script( 'wp_Oscard', get_stylesheet_directory_uri() . '/Oscard.php' );
    
}

?>

