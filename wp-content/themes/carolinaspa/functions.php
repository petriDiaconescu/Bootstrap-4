<?php

function carolinaspa_styles(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/styles.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'carolinaspa_styles');

