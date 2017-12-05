<?php

function carolinaspa_styles(){
  wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
}

add_action('wp_enqueue_scripts', 'carolinaspa_styles');

