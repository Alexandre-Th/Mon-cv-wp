<?php

function cv_Alex_style() {
    wp_enqueue_style('theme-css', get_theme_file_uri('public/css/style.css'), [], '20200614', 'all');
}

add_action('wp_enqueue_scripts', 'cv_Alex_style');

if (!function_exists('cv_Alex_setup')) :
    
    function cv_Alex_setup() {
        
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
}
endif;

add_action( 'after_setup_theme', 'cv_Alex_setup',);