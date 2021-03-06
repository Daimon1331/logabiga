<?php

add_action( 'wp_enqueue_scripts', 'style_logabiga');

function style_logabiga(){
    wp_enqueue_script( 'popper', 'https://unpkg.com/@popperjs/core@2');
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script( 'inputmask', get_template_directory_uri() . '/assets/js/jquery.inputmask.js');
    wp_enqueue_style( 'style_bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_script( 'style_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_style( 'style_slick_css', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_script( 'style_slick_js', get_template_directory_uri() . '/assets/js/slick.min.js');
    wp_enqueue_script( 'style_logabiga_js', get_template_directory_uri() . '/assets/js/logabiga.js');
    wp_enqueue_style('style', get_stylesheet_uri());

}
