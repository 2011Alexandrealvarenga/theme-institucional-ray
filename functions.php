<?php 
function aa_casari_institucional() { 
    wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css', array(), '1.1', 'all');
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.1', 'all');
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.1', 'all');
    // wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array(), '1.1', 'all');

    // wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    // if(is_single()){
    //   wp_enqueue_style( 'single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.1', 'all');
    // }


    // if(is_home()){
    //   wp_enqueue_style( 'home_css', get_template_directory_uri() . '/assets/css/home.css', array(), '1.1', 'all');
    // }
    
  }
  add_action( 'wp_enqueue_scripts', 'aa_casari_institucional', 0);

  // menu
  if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'text_domain' ),
    'secondary_menu' => __('Secondary Menu', 'text_domain'),
    'footer_menu' => __( 'Footer Menu', 'text_domain' ),
    ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
    }
    
    function add_additional_class_on_li($classes, $item, $args) {
        if (isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    
    add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
    
    
    