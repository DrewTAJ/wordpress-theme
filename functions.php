<?php
function add_theme_styles() {
    //echo get_template_directory_uri();

    // wp_register_style( 'style', get_stylesheet_uri());
    // wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/styles/bootstrap.min.css');
    // wp_register_style( 'bootstrap-theme.min', get_template_directory_uri() . '/styles/bootstrap-theme.min.css');
    // wp_register_style( 'index', get_template_directory_uri() . '/styles/index.css');

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/styles/bootstrap-theme.min.css', array('bootstrap'));
    wp_enqueue_style( 'index', get_template_directory_uri() . '/styles/index.css');

    wp_enqueue_script('jquery',get_template_directory_uri().'/scripts/jquery-1.12.2.min.js');
    wp_enqueue_script('bootstrap-script',get_template_directory_uri() . '/scripts/bootstrap.min.js');
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script('index-script',get_template_directory_uri() . '/scripts/index.js',array('style'));
}
add_action( 'wp_enqueue_scripts',add_theme_styles );

//add_action( 'wp_enqueue_scripts', add_theme_scripts );
?>