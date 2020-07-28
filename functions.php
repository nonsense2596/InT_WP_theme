<?php

function theme_scripts_styles() {

    wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js', null, null, true );
    wp_enqueue_script('jQuery');

    wp_register_script('jqui','https://code.jquery.com/ui/1.12.1/jquery-ui.min.js',null,null,true);
    wp_enqueue_script('jqui');

    wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('bootstrap-js');

    wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style('bootstrap-css');

    wp_register_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');

    wp_enqueue_style( 'default-stylesheet', get_stylesheet_directory_uri() . '/style.css',false,null,'ALL');
    wp_enqueue_style('default-stylesheet');

    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/scripts.js',false,null,'ALL');
    wp_enqueue_script('scripts');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );


function theme_support(){
    register_nav_menus(array(
        'primary'   =>  __('Primary Menu')
    ));
}
add_action('after_setup_theme','theme_support');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );