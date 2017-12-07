<?php 
   get_header();
 ?> 
    <div class="container">
      <div id="main-slider" class="carousel slide mt-4" data-ride="carousel">
        <?php 
          $args = array(
            'posts_per_page' => 5,
            'tag'            => 'slider'    
          );
          $slider = new WP_Query($args);
          
          if($slider->have_posts()):
            $count = $slider->found_posts;
            
        ?>
        <ol class="carousel-indicators">
        <?php for($i=0; $i<$count; $i++){ ?>  
          <li data-target="#main-slider" 
              data-slide-to="<?php echo $i; ?>" 
              class="<?php echo ($i==0) ? 'active' : '' ?>">      
          </li> 
        <?php } ?>  
        </ol>
        
        <div class="carousel-inner" role="listbox">
        <?php 
          $i=0;
          while($slider->have_posts()): $slider->the_post(); 
        ?>
          <div class="carousel-item <?php echo ($i==0) ? 'active' : '' ?>">  
            <?php 
              the_post_thumbnail('slider', array(
                'class' => 'd-block img-fluid',
                'alt'   => get_the_title()  
              )); 
              ?>
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-uppercase"><?php the_title(); ?></h3>
            </div>
          </div><!-- carousel-item  -->
        <?php
          $i++;
          endwhile; 
        ?>
        </div><!-- carousel-inner -->
        
        <a href="#main-slider" class="carousel-control-prev" 
          data-slide="prev">
            <span class="carousel-control-prev-icon" 
                  aria-hidden="true">  
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#main-slider" class="carousel-control-next" 
          data-slide="next">
            <span class="carousel-control-next-icon" 
                  aria-hidden="true">  
            </span>
            <span class="sr-only">Next</span>
        </a>
        <?php endif;wp_reset_postdata(); ?>
      </div>
    </div>
    
    <section class="new-website py-5">
      <h2 class="text-center text-uppercase"><span class="text-lowercase">Welcome to our new</span> website</h2>
      <p class="text-center mt-4">Feel like new with our massages and professional <br/>therapists!</p>
    </section>
    
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_01.jpg" alt="" class="img-fluid" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">learn more</span>About Us</h3>
                <a href="" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
              </div>
            </div>  
          </div>
        </div><!-- col-md-4 -->
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_02.jpg" alt="" class="img-fluid" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span>services</h3>
                <a href="" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
              </div>
            </div>  
          </div>
        </div><!-- col-md-4 -->
        <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <div class="image-links">
            <img src="img/service_03.jpg" alt="" class="img-fluid" />
            <div class="row no-gutters">
              <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-4">
                <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span>store</h3>
                <a href="" class="btn btn-success text-uppercase btn-block mt-4 py-3">read more</a>
              </div>
            </div>  
          </div>
        </div><!-- col-md-4 -->
      </div>
    </div>
    
    <div class="business-hours py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php include 'templates/business_hours.php' ?>
          </div>
          <div class="col-md-6 bg-hours"></div>
        </div>
      </div>
    </div>
    
    <div class="container products py-5">
      <h2 class="text-center text-uppercase">
        <span class="text-lowercase">checkout our</span>products
      </h2>
      
      <div class="row my-4">
        
        <?php 
          try{
            require_once 'inc/db.php';
            $sql = 'SELECT `id`, `name`, `image_thumb`, `price`, `short_description` FROM `products` LIMIT 4';
            $results = $db->query($sql);
          } catch (Exception $e) {
            $error = $e->getMessage();
            echo $error;
          }
 
          $rows =  $results->num_rows;
          
          if(!$rows){
            echo 'No results found';
          } else {
            while($product = $results->fetch_assoc()){ 
            ?>
              <div class="col-6 col-md-3 mb-5 mb-md-0">
                <div class="card">
                  <a href="product.php?product=<?php echo $product['id']; ?>">
                    <img src="img/<?php echo $product['image_thumb']?>" alt="" class="card-img-top img-fluid" />
                    <div class="card-block">
                      <h3 class="card-title text-center text-uppercase mb-0"><?php echo $product['name']?></h3>
                      <p class="card-text text-uppercase">
                        <?php echo $product['short_description']?>
                      </p>
                      <p class="price text-center mb-0">$ <?php echo $product['price']?></p>
                    </div>
                  </a>
                </div>
              </div><!-- col-6 col-md-3   -->
            <?php
            }
          }
        ?>
        
      
        <?php  $db->close(); ?>
      </div>
    </div>
    
  <?php 
    include 'templates/appointment.php';
    get_footer();
  ?>  
    
