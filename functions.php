<?php


function timeout_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','timeout_theme_support');


function timeout_navbar(){

    $locations = array(
        'primary' => "Top Primary Navbar",
        'footer' => "Footer Items (Social)"
    );

    register_nav_menus($locations);
}

add_action('init', 'timeout_navbar');


/**
 * Setup the stylesheets
 */
function timeout_register_styles(){

    $version = wp_get_theme()->get('Version');
    // fill array with style id it is depending on
    wp_enqueue_style('timeout-stylesheet',get_template_directory_uri() . "/style.css", array('timeout-bootstrap'), time(), 'all');
    wp_enqueue_style('timeout-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('timeout-fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');

}

add_action('wp_enqueue_scripts', 'timeout_register_styles');


/**
 * Setup the scripts
 */
function timeout_register_scripts(){

    // true = loaded in footer section
    wp_enqueue_script('timeout-nav-js', get_template_directory_uri() . '/assets/js/nav.js', array(), '3', true);

}

add_action('wp_enqueue_scripts','timeout_register_scripts');

?>