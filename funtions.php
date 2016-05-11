<?php

function theme_styles(){
    wp_enqueue_style('bs_css',get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style_css',get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts','theme_styles');


define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('IMG', TEMPPATH. "/img");

    
register_nav_menus(array(
    'primary' =>   __('menu principal'),
));




function wpt_register_js() {
wp_enqueue_script("jquery", get_stylesheet_directory_uri().'jquery.min.js'); 
wp_enqueue_script("bootstrap-hover-dropdown", get_stylesheet_directory_uri().'bootstrap-hover-dropdown.min.js');    
wp_enqueue_script("bootstrap", get_stylesheet_directory_uri().'bootstrap.min.js');    
wp_enqueue_script("jcarousel", get_stylesheet_directory_uri().'jquery.jcarousel.min.js');    
wp_enqueue_script("bryan-body2", get_stylesheet_directory_uri().'bryan-body2.js');    
}

add_action("wp_enqueue_script", "jquery");
add_action("wp_enqueue_script", "bootstrap-hover-dropdown");
add_action("wp_enqueue_script", "bootstrap");
add_action("wp_enqueue_script", "jcarousel");
add_action("wp_enqueue_script", "bryan-body2");

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
    wp_register_style( 'style_footer', get_template_directory_uri() . '/css/style_footer.css' );
    wp_enqueue_style( 'style_footer' );
    wp_register_style( 'style_body2', get_template_directory_uri() . '/css/style_body2.css' );
    wp_enqueue_style( 'style_body2' );
    wp_register_style( 'style_body4', get_template_directory_uri() . '/css/style_body4.css' );
    wp_enqueue_style( 'style_body4' );
    wp_register_style( 'styles-navbar-principal', get_template_directory_uri() . '/css/styles-navbar-principal.css' );
    wp_enqueue_style( 'styles-navbar-principal' );
    wp_register_style( 'styles-header', get_template_directory_uri() . '/css/styles-header.css' );
    wp_enqueue_style( 'styles-header' );
    wp_register_style( 'styles_slider', get_template_directory_uri() . '/css/styles_slider.css' );
    wp_enqueue_style( 'styles_slider' );
    wp_register_style( 'styles-navbar-toggle', get_template_directory_uri() . '/css/styles-navbar-toggle.css' );
    wp_enqueue_style( 'styles-navbar-toggle' );
    
}
add_action("wp_enqueue_script", "bootstrap.min");
add_action("wp_enqueue_script", "style_footer");
add_action("wp_enqueue_script", "style_body2");
add_action("wp_enqueue_script", "style_body4");
add_action("wp_enqueue_script", "style-navbar-principal");
add_action("wp_enqueue_script", "styles-header");
add_action("wp_enqueue_script", "styles_slider");
add_action("wp_enqueue_script", "styles-navbar-toggle");




 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
add_theme_support("menus");
    add_theme_support("post-thumbnails");


    

?>