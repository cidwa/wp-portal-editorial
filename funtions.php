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
wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'null', true );
wp_enqueue_script('jquery.bootstrap.min');
}

add_action( 'init', 'wpt_register_js' );

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );


 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
add_theme_support("menus");
    add_theme_support("post-thumbnails");


    

?>