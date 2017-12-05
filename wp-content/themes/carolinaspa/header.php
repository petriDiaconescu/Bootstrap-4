<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carolina Spa <?php echo $title; ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="site-header container">
      <div class="row justify-content-between">
        <div class="col-8 offset-2 col-lg-4 offset-lg-0">
          <a href="index.php">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="" class="img-fluid mx-auto d-block" />
          </a>
        </div> 
        <div class="col-12 col-lg-4">
          <?php 
            $args = array(
              'container'       => 'nav',
              'container_class' => 'socials text-center text-md-right pt-3',
              'link_before'     => '<span class="sr-only">',
              'link_after'      => '</span>',
              'theme_location'  => 'social_menu'  
            );
            wp_nav_menu($args);
          ?>
        </div>
        
      </div><!-- justify-content-between -->
      
      
    </header>



