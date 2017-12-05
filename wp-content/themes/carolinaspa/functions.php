<?php
/** add javascripts and stylesheets */
function carolinaspa_styles(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Raleway:400,700,900');
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
}

add_action('wp_enqueue_scripts', 'carolinaspa_styles');

//Setup theme
function carolinaspa_setup(){
  register_nav_menus(array(
    'social_menu' =>  esc_html__('Social', 'carolinaspa')    
  ));
}

add_action('after_setup_theme', 'carolinaspa_setup');
