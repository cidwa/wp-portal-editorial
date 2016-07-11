<?php

function cargar_css_del_tema(){

    wp_enqueue_style("bootstrap", get_stylesheet_directory_uri(). "/css/bootstrap.min.css");

    wp_enqueue_style("style_footer",get_stylesheet_directory_uri(). '/css/style_footer.css' );
    wp_enqueue_style("style_body2", get_stylesheet_directory_uri(). '/css/style_body2.css' );
    wp_enqueue_style("style_body4", get_stylesheet_directory_uri(). '/css/style_body4.css' );
    wp_enqueue_style("styles-navbar-principal", get_stylesheet_directory_uri(). '/css/styles-navbar-principal.css' );
    wp_enqueue_style("styles_slider", get_stylesheet_directory_uri(). '/css/styles_slider.css' );
    wp_enqueue_style("styles-header", get_stylesheet_directory_uri(). "/css/styles-header.css" );
    wp_enqueue_style("light", get_stylesheet_directory_uri(). "/css/light.css" );
        wp_enqueue_style("style",get_stylesheet_directory_uri(). '/css/style.css' );

}

add_action('wp_enqueue_scripts','cargar_css_del_tema');

function cargar_js_del_tema(){
    wp_enqueue_script("jquery", get_stylesheet_directory_uri()."/js/jquery.js");
    wp_enqueue_script("bootstrap", get_stylesheet_directory_uri()."/js/bootstrap.min.js");
    wp_enqueue_script("jcarousel", get_stylesheet_directory_uri()."/js/jquery.jcarousel.min.js");    
    wp_enqueue_script("bryan-body2", get_stylesheet_directory_uri()."/js/bryan-body2.js");
    wp_enqueue_script("mityped", get_stylesheet_directory_uri()."/js/mityped.js");
    wp_enqueue_script("npm", get_stylesheet_directory_uri()."/js/npm.js");
    wp_enqueue_script("pdfobject", get_stylesheet_directory_uri()."/js/pdfobject.js");
    wp_enqueue_script("pdfobject1", get_stylesheet_directory_uri()."/js/pdfobject.min.js");
    wp_enqueue_script("typed", get_stylesheet_directory_uri()."/js/typed.js");
    
    wp_enqueue_script("pdfobject", get_stylesheet_directory_uri()."/js/pdfobject.min.js");
    wp_register_script("pdf-portal", get_stylesheet_directory_uri()."/js/pdf-portal.js");
    wp_register_script("pdf-portal-2", get_stylesheet_directory_uri()."/js/pdf-portal-2.js");

    if( is_page( 'comite-editorial-interno') ){
            wp_enqueue_script("pdf-portal");
    }
    else
        if( is_page('comite-editorial') ){

            wp_enqueue_script("pdf-portal-2");

        }

    
        

}
add_action("wp_enqueue_scripts","cargar_js_del_tema");






add_theme_support("menus");
add_theme_support("post-thumbnails");

 // Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');


function registrar_mis_menus(){
      register_nav_menus(array(
        'menu_principal' => 'menú principal'
      ));
    }
add_action('init','registrar_mis_menus');


    




add_theme_support("menus");


function my_theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

add_image_size( 'imagen-libro', 192.5, 265, true );

add_image_size( 'imagen-pdf', 30,30, true );

    



// Register Custom Post Type
function crear_eventos() {

	$labels = array(
		'name'                  => _x( 'evento', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'evento', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'evento', 'text_domain' ),
		'name_admin_bar'        => __( 'eventos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Evento superior', 'text_domain' ),
		'all_items'             => __( 'Todos los eventos', 'text_domain' ),
		'add_new_item'          => __( 'nuevo', 'text_domain' ),
		'add_new'               => __( 'nuevo', 'text_domain' ),
		'new_item'              => __( 'nuevo', 'text_domain' ),
		'edit_item'             => __( 'Editar', 'text_domain' ),
		'update_item'           => __( 'actualizar', 'text_domain' ),
		'view_item'             => __( 'ver', 'text_domain' ),
		'search_items'          => __( 'Buscar', 'text_domain' ),
		'not_found'             => __( 'no se encuentra', 'text_domain' ),
		'not_found_in_trash'    => __( 'no se encuentra', 'text_domain' ),
		
	);
	$args = array(
		'label'                 => __( 'evento', 'text_domain' ),
		'description'           => __( 'Eventos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor','thumbnail','slug','custom-fields' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'evento', $args );

}
add_action( 'init', 'crear_eventos', 0 );









// Register Custom Taxonomy
function crear_tipo_de_evento() {

	$labels = array(
		'name'                       => _x( 'Tipo de evento', 'Post Type', 'text_domain' ),
		'singular_name'              => _x( 'Tipo de evento', 'Post Type', 'text_domain' ),
		'menu_name'                  => __( 'Tipo de evento', 'text_domain' ),
		'all_items'                  => __( 'Todos', 'text_domain' ),
		'parent_item'                => __( 'Superior', 'text_domain' ),
		'parent_item_colon'          => __( 'Superior', 'text_domain' ),
		'new_item_name'              => __( 'Nuevo', 'text_domain' ),
		'add_new_item'               => __( 'Nuevo', 'text_domain' ),
		'edit_item'                  => __( 'Editar', 'text_domain' ),
		'update_item'                => __( 'Actualizar', 'text_domain' ),
		'view_item'                  => __( 'Ver', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separar por comas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Modificar', 'text_domain' ),
		'choose_from_most_used'      => __( 'Elegir de los más usados', 'text_domain' ),
		'popular_items'              => __( 'Popular', 'text_domain' ),
		'search_items'               => __( 'Buscar', 'text_domain' ),
		'not_found'                  => __( 'No se ha encontrado', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'rewrite'                    => array('alug'=>'tipo_de_evento')
	);
	register_taxonomy( 'tipo_de_evento', array( 'evento' ), $args );

}
add_action( 'init', 'crear_tipo_de_evento');






 $vector = array(
	'type'            => 'monthly',
	'limit'           => '12',
	'format'          => 'custom',
	'before'          => '<ul class="list-group" style="margin-bottom: 0px ;"><li class="list-group-item">',
	'after'           => '</li></ul>',
	'show_post_count' => true,
	'echo'            => 1,
	'order'           => 'DESC',
    'post_type'       => 'evento'

); 
















    

?>