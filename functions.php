<?php

die("asd");
function add_theme_scripts()
{
    // style.css
    wp_enqueue_style('style', get_stylesheet_uri());
    // main-css
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/codebase.min.css', array(), false, 'all');

    // main.js
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/codebase.app.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');


function register_my_menus()
{
    register_nav_menus(
        array(
            'sidebar-menu' => __('Sidebar Menu'),
            'header-menu' => __('Header Menu'),
        )
    );
}
add_action('init', 'register_my_menus');
