<?php

function my_theme_enqueue_styles()
{

    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap4.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap4.js');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(280, 210, true); // Normal post thumbnails
    add_image_size('screen-shot', 720, 540); // Full size screen
}

add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length)
{

    return 25;

}

add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_more($text)
{

    return ' ';

}
