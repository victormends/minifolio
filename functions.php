<?php

function load_scripts(){
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

    wp_register_script('jquery-two', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', true);

    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), null, true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery-two'), null, true);
    wp_enqueue_script('waypoints-min', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery-two'), null, true);
    wp_enqueue_script('retina-min', get_template_directory_uri() . '/js/retina.min.js', array('jquery-two'), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', array('jquery-two'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery-two'), null, true);

}
add_action('wp_enqueue_scripts','load_scripts');

add_action('widgets_init', 'minifolio_sidebars');
function minifolio_sidebars(){
    register_sidebar(
        array(
            'name' => 'Banner',
            'id' => 'banner',
            'description' => 'Type any text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'About Me',
            'id' => 'about-me',
            'description' => 'Type any text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
            )
        );
        register_sidebar(
            array(
                'name' => 'About Me - Second Area',
                'id' => 'about-me2',
                'description' => 'Type any text here',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
    register_sidebar(
        array(
            'name' => 'Hire Me',
            'id' => 'hire-me',
            'description' => 'Type any text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Contact',
            'id' => 'contact',
            'description' => 'Type any text here',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_nav_menus(
        array(
            'primary' => 'Primary Menu',
            'social' => 'Social Menu'

        )
    );

    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}