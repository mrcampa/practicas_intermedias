<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'style1', get_template_directory_uri() . '/css/banner.css');
    wp_enqueue_style( 'style2', get_template_directory_uri() . '/css/keyframes.css');
    wp_enqueue_style( 'style3', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style( 'style4', get_template_directory_uri() . '/css/carlos.css');
    wp_enqueue_style( 'style5', get_template_directory_uri() . '/css/herbert.css');
    wp_enqueue_style( 'style6', get_template_directory_uri() . '/css/herbert2.css');
    wp_enqueue_style( 'style7', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'style8', get_template_directory_uri() . '/css/dedev.css');
    
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array ( 'jquery' ), 1.16, true);
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ( 'popper' ), 4.3, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
