<?php
/*Funciones para cargar estilo y scripts */
function cargar_css_del_tema(){

    wp_enqueue_style("bootstrap", get_stylesheet_directory_uri(). "/css/bootstrap.min.css");
    wp_enqueue_style("style", get_stylesheet_directory_uri(). "/style.css");
    wp_enqueue_style( 'style_footer',get_stylesheet_directory_uri(). '/css/style_footer.css' );
    wp_enqueue_style( 'style_body2', get_stylesheet_directory_uri(). '/css/style_body2.css' );
    wp_enqueue_style( 'style_body4', get_stylesheet_directory_uri(). '/css/style_body4.css' );
    wp_enqueue_style( 'styles-navbar-principal', get_stylesheet_directory_uri(). '/css/styles-navbar-principal.css' );
    wp_enqueue_style( 'styles_slider', get_stylesheet_directory_uri(). '/css/styles_slider.css' );
    wp_enqueue_style( 'styles-navbar-toggle', get_stylesheet_directory_uri(). '/css/styles-navbar-toggle.css' );
    wp_enqueue_style( "styles-header", get_stylesheet_directory_uri(). "/css/styles-header.css" );
}

 function cargar_js_del_tema(){
   wp_enqueue_script("jquery", get_stylesheet_directory_uri()."/js/jquery.js");
   wp_enqueue_script("bootstrap", get_stylesheet_directory_uri()."/js/bootstrap.min.js");
    wp_enqueue_script("bootstrap-hover-dropdown", get_stylesheet_directory_uri()."/js/bootstrap-hover-dropdown.min.js");    
    wp_enqueue_script("jcarousel", get_stylesheet_directory_uri()."jquery.jcarousel.min.js");    
    wp_enqueue_script("bryan-body2", get_stylesheet_directory_uri()."bryan-body2.js");

 
 
 }
add_action("wp_enqueue_scripts","cargar_js_del_tema");
 add_action("wp_enqueue_scripts","cargar_css_del_tema");





    // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    add_theme_support("menus");
    add_theme_support("post-thumbnails");

    function registrar_menu(){
      register_nav_menus(array(

        'menu_principal' => 'menú principal'

      ));
    }
    add_action('init','registrar_menus');







