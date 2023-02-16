<?php // Add scripts and stylesheets
function load_stylesheets() {
    wp_enqueue_style('style', get_stylesheet_uri()); 
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function samsTheme_setup() {
    // Add <title> tag support
    add_theme_support('title-tag');  

    // Add custom-logo support
    add_theme_support('custom-logo');

    // Add menu support
    register_nav_menus(array(
        'header'   => 'Header Menu',
        'footer'   => 'Footer menu',
    ));
}
add_action('after_setup_theme', 'samsTheme_setup');

