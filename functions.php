<?php 

function millerpto_files() {
    wp_enqueue_script('alpine', '//cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', NULL, '2.0', true);
    wp_enqueue_style('nunito', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;900&display=swap');
    wp_enqueue_style('millerpto_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'millerpto_files');

function millerpto_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 300, 175, true );


add_action('after_setup_theme', 'millerpto_features');
add_action('init', 'miller_post_types');



?>