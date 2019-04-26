<?php

function main_scripts_styles(){
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.css',  'screen');
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'main', get_template_directory_uri() . '/style.css',  'screen');
    wp_enqueue_style( 'main');


    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), false);
    wp_enqueue_script( 'jquery');

    wp_register_script( 'bootstrap', '/js/bootstrap.js', array(), false);
    wp_enqueue_script( 'bootstrap');
}

add_action( 'wp_enqueue_scripts', 'main_scripts_styles', 1 );
