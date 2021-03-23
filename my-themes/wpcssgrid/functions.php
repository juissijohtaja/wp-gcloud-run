<?php

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
      $classes[] = 'nav-item mr-md-3 my-2';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function atg_menu_classes2($classes, $item, $args) {
    if($args->theme_location == 'footer') {
      $classes[] = 'nav-item mr-md-3 my-1';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes2', 1, 3);


function jk_menus() {
    $locations = array(
        'primary' => 'main menu',
        'footer' => 'footer menu'
    );
    register_nav_menus( $locations );
}
add_action( 'init', 'jk_menus' );

function jk_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'blog-thumb', 9999, 400 );
}
add_action('after_setup_theme', 'jk_theme_support');

function jk_register_styles(){
    $version = wp_get_theme() -> get('Version');
    #wp_enqueue_style( 'jk-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
    #wp_enqueue_style( 'jk-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all');
    wp_enqueue_style( 'jk-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css', array(), '4.7.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'jk_register_styles');


function jk_register_scripts(){
    wp_enqueue_script( 'jk-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1', true );
    wp_enqueue_script( 'jk-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array(), '4.5.2', true );
}
add_action( 'wp_enqueue_scripts', 'jk_register_scripts');

function jk_widget_areas() {
    register_sidebar( 
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar( 
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'name' => 'Footer',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );

    register_sidebar( array(
		'name'          => 'Home promo',
		'id'            => 'home_promo',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jk_widget_areas' );


function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

?>