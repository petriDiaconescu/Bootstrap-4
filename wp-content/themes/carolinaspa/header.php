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
    
    <div class="navigation mt-4 py-1">
      <nav class="main-nav py-1 navbar navbar-toggleable-sm navbar-light bg-faded">
        <button type="button" 
          class="navbar-toggler navbar-toggler-right"
          data-toggle="collapse"
          data-target="#main-navigation"
          aria-expanded="false"
          aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand d-md-none">Carolina Spa</a>
        <div class="container">
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav nav-justified flex-column flex-sm-row">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="about.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="services.php" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="products.php" class="nav-link">Products</a>
              </li>
              <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>  
      </nav>
    </div>



