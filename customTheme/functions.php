<?php


if (!function_exists('logo_add')) {
    function logo_add() {

        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 100,
            'flex-height' => true,
            'flex-width' => true,
        ));
    }

    add_action('after_setup_theme', 'logo_add');
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'custom_theme_styles');

function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
