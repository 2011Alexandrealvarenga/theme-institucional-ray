<?php 
function aa_casari_institucional() { 
    // wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.1', 'all');

    // // home carousel vertical produtos destaque
    // if(is_home()){
      wp_enqueue_style( 'home-carousel-min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');    
      wp_enqueue_style( 'home-carousel-multi', 'https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/plugins/standard/multi-carousel.min.css');    
      wp_enqueue_style( 'home-carousel', 'https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/modules/06d3aecc98edbb4cb9566d03d551bbb6.min.css');    

    // }
    
}
add_action( 'wp_enqueue_scripts', 'aa_casari_institucional');


function enqueue_magnificpopup_scripts() {
  // wp_register_script('jquery-1-1', 'https://code.jquery.com/jquery-1.11.1.min.js', array('jquery'));
  // wp_enqueue_script('jquery-1-1');

  // wp_register_script('bootstrap.min', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'));
  // wp_enqueue_script('bootstrap.min');

  // // menu
  // wp_register_script('menu-js', get_stylesheet_directory_uri().'/assets/js/menu.js', array('jquery'));
  // wp_enqueue_script('menu-js');	
  
  // home carousel vertical produtos destaque
  // if(is_home()){
    wp_register_script('home-carousel-horizontal', get_stylesheet_directory_uri().'/assets/js/carousel-vertical.js', array('jquery'));
    wp_enqueue_script('home-carousel-horizontal');
  // }

}
add_action('wp_enqueue_scripts', 'enqueue_magnificpopup_scripts');
