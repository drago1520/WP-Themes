<?php

function wpdevs_load_scripts(){
    wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );


function tutor_config() {
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
            //'slug/ handle/ id' => 'how it appears in admin/ key'
        )
    );
    $args = [
        'height' => 225,
        'width' => 1920,
    ];
    add_theme_support( "custom-header", $args );
    add_theme_support('post-thumbnails');
    add_theme_support( "custom-logo", [
        'width' => 200,
        'height' => 110,
        // 'flex-height' => true,
        // 'flex-width' => true
    ] );
    add_theme_support( "title-tag" );
    add_theme_support( "automatic-feed-links" );
    add_theme_support( "html5", array( "comment-list", "comment-form", "search-form", "gallery", "caption", "style", "script" ) );
}

add_action( "after_setup_theme", "tutor_config", 0 );


add_action( "widgets_init", "wp_sidebars" );
function wp_sidebars() {
    register_sidebar( [
        'name' => 'Blog sidebar', //Как ще излиза в admin частта
        'id' => 'sidebar-blog', //admin частта
        'description' => 'Blog sidebar', //Пап в admin частта
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ] );
    register_sidebar( [
        'name' => 'Service1 ', //Как ще излиза в admin частта
        'id' => 'services-1', //admin частта
        'description' => 'First service area', //Пап в admin частта
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ] );
    register_sidebar( [
        'name' => 'Service2 ', //Как ще излиза в admin частта
        'id' => 'services-2', //admin частта
        'description' => 'Second service area', //Пап в admin частта
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ] );
    register_sidebar( [
        'name' => 'Service3 ', //Как ще излиза в admin частта
        'id' => 'services-3', //admin частта
        'description' => 'Third service area', //Пап в admin частта
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ] );
}

if( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}
