 <footer class="site-footer pt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php 
            if (is_active_sidebar('footer_widget_1')):
              dynamic_sidebar('footer_widget_1');
            endif;
          ?>    
        </div>
        <div class="col-md-4 pb-4 pb-md-0">
          <h3 class="text-uppercase text-center pb-4">Open hours</h3> 
          <p class="text-center mb-0">Mon-Fri: 9 AM - 7 PM</p>
          <p class="text-center mb-0">Saturday: 10 AM - 2 PM</p>
          <p class="text-center mb-0">Sunday: Closed</p>
        </div>
        <div class="col-md-4 pb-4 pb-md-0">
          <h3 class="text-uppercase text-center pb-4">Contact</h3> 
          <p class="mb-0">66 East Sunnyslope Avenue</p>
          <p>Lansdowne, PA 19050</p>
          <div class="social-nav">
            
            <?php 
              $args = array(
                'container'       => 'nav',
                'container_class' => 'socials pt-3',
                'link_before'     => '<span class="sr-only">',
                'link_after'      => '</span>',
                'theme_location'  => 'social_menu'  
              );
              wp_nav_menu($args);
            ?>
          </div>
          
        </div>

        <div class="w-100"></div>
        <hr class="w-100" />
        <p class="copyright text-center w-100">
          <?php echo get_bloginfo('name') . ' ' . date('Y'); ?>
        </p>
      </div><!-- row -->
    </div><!-- container -->
  </footer>
  
  </body>
</html>
