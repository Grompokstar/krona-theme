<?php

function main_scripts_styles(){
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.css',  'screen');
  wp_enqueue_style( 'bootstrap');

  wp_register_style( 'main', get_template_directory_uri() . '/style.css',  'screen');
  wp_enqueue_style( 'main');


  //wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.0.min.js', array(), false);
  wp_enqueue_script( 'jquery');

  wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), false);
  wp_enqueue_script( 'bootstrap');

  wp_register_script( 'my_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), false);
  wp_enqueue_script( 'my_scripts');
}

add_action( 'wp_enqueue_scripts', 'main_scripts_styles', 1 );
