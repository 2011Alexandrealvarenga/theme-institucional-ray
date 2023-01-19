<?php 
function aa_casari_institucional() { 
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
    wp_enqueue_style( 'header_css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/mobile.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    // if(is_single()){
    //   wp_enqueue_style( 'single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.1', 'all');
    // }


    // if(is_home()){
    //   wp_enqueue_style( 'home_css', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    // }
    
  }
  add_action( 'wp_enqueue_scripts', 'aa_casari_institucional', 0);