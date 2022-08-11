<?php
function add_css()
{
    wp_register_style('first', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', false, '1.1', 'all');
    wp_enqueue_style('first');

    wp_register_style('second', get_template_directory_uri() . '/assets/vendors/animate/animate.css', false, '1.1', 'all');
    wp_enqueue_style('second');

    wp_register_style('third', get_template_directory_uri() . '/assets/css/foodhut.css', false, '1.1', 'all');
    wp_enqueue_style('third');

}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
    wp_register_script('js-script', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', array('jquery'), 1.1, true);
    wp_enqueue_script('js-script');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array('jquery'), 1.1, true);
    wp_enqueue_script('wow');

    wp_register_script('foodhut', get_template_directory_uri() . '/assets/js/foodhut.js', array('jquery'), 1.1, true);
    wp_enqueue_script('foodhut');
}
add_action('wp_enqueue_scripts', 'add_script');
