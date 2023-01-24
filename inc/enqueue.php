<?php 

 // produtos destaques
 function enqueue_magnificpopup_scripts() {
    wp_register_script('jquery-1-1', 'https://code.jquery.com/jquery-1.11.1.min.js', array('jquery'));
    wp_enqueue_script('jquery-1-1');

    wp_register_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script('bootstrap.min');



    // menu
    wp_register_script('menu-js', get_stylesheet_directory_uri().'/assets/js/menu.js', array('jquery'));
    wp_enqueue_script('menu-js');	
}
add_action('wp_enqueue_scripts', 'enqueue_magnificpopup_scripts');



function aa_casari_institucional() { 
    wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.1', 'all');
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.1', 'all');
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.1', 'all');

    // wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    // if(is_single()){
    //   wp_enqueue_style( 'single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.1', 'all');
    // }


    // if(is_home()){
    //   wp_enqueue_style( 'home_css', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    // }
    
  }
  add_action( 'wp_enqueue_scripts', 'aa_casari_institucional');