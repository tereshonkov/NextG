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

function register_menus() {
    $locations = array(
        'header-menu' => __('Header Menu', 'theme-custom'),
    );
    register_nav_menus($locations);
}

add_action('after_setup_theme', 'register_menus');

add_filter('nav_menu_css_class', function($classes, $item, $args, $depth){
    if($args->theme_location == 'header-menu'){
        return ['header__nav-item'];
    }
    return $classes;
}, 10, 4);

add_filter('nav_menu_link_attributes', function($atts, $item, $args, $depth){
    if($args->theme_location == 'header-menu'){
        $atts['class'] = 'header__item';
    }
    return $atts;
}, 10, 4);

add_action('wp_enqueue_scripts', 'custom_theme_styles');

function custom_theme_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
