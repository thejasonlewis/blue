<?php
//    function bp_files() {
//        wp_enqueue_style('style', get_stylesheet_uri());
//    }
//
//    add_action('wp_enqueue_scripts', 'bp_files');

//navigation menu
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

//load css
/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array(), '1.0.0', true );

    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '1.0.0', true );
    //wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizer.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
    //wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/js/html5shiv.min.js', array( 'jquery' ), '3.7.2', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );