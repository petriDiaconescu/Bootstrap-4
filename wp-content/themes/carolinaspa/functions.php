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
    'main_menu' =>  esc_html__('Main_Menu', 'carolinaspa'),   
    'social_menu' =>  esc_html__('Social', 'carolinaspa')    
  ));
}

add_action('after_setup_theme', 'carolinaspa_setup');

//Add bootstrap nav-item class to the <li> of the Main menu
function carolinaspa_custom_li_class($classes, $item, $args){
  if($args->theme_location == 'main_menu'){
    $classes[] = 'nav-item';
  }
  
  return $classes;
}

add_filter('nav_menu_css_class', 'carolinaspa_custom_li_class', 1, 3);

//Add bootstrap nav-link class to the <a> of the Main menu
function carolinaspa_custom_anchor_class($atts, $item, $args){
  if($args->theme_location == 'main_menu'){
    $class = 'class';
    $atts[$class] = 'nav-link';
  }
  
  return $atts;
}

add_filter('nav_menu_link_attributes', 'carolinaspa_custom_anchor_class', 10, 3);

//widgets
function carolinaspa_widgets(){
  register_sidebar(array(
    'name'            => 'Footer Widget 1',
    'id'              => 'footer_widget_1',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  
  register_sidebar(array(
    'name'            => 'Footer Widget 2',
    'id'              => 'footer_widget_2',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
  
  register_sidebar(array(
    'name'            => 'Footer Widget 3',
    'id'              => 'footer_widget_3',
    'before_widget'   => '<div id="%1$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h3 class="text-uppercase text-center pb-4">',
    'after_title'     => '</h3>'  
  ));
}


add_action('widgets_init', 'carolinaspa_widgets');