<?php 
  get_header(); 
?> 

<?php while(have_posts()): the_post() ?>
  <div class="container pt-4">
    <div class="row no-gutters">
      <div class="col-12 hero">
        <?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
        <h2 class="text-uppercase d-none d-md-block"><?php the_title() ?></h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <main class="col-lg-8 primary-content">
        <h2 class="d-block d-md-none text-center text-uppercase"><?php the_title() ?></h2>
        <?php the_content() ?>

        <div class="facilities-gallery">

          <h3 class="text-center text-uppercase p-4">
            <span class="text-lowercase">Checkout our</span>facilities
          </h3>

          <a href="" data-target="#image_1" data-toggle="modal">
            <img src="img/gallery_thumb_01.jpg" alt="" class="rounded" />
          </a>
          <a href="" data-target="#image_2" data-toggle="modal">
            <img src="img/gallery_thumb_02.jpg" alt="" class="rounded" />
          </a>
          <a href="" data-target="#image_3" data-toggle="modal">
            <img src="img/gallery_thumb_03.jpg" alt="" class="rounded" />
          </a>

          <div class="modal fade" id="image_1" tabindex="-1" 
            role="dialog" aria-labelledby="image_1" 
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/gallery_large_01.jpg" alt="" class="img-fluid"/>
                </div>
              </div>
            </div><!-- modal-content -->
          </div><!-- modal -->
          <div class="modal fade" id="image_2" tabindex="-1" 
            role="dialog" aria-labelledby="image_2" 
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/gallery_large_02.jpg" alt="" class="img-fluid"/>
                </div>
              </div>
            </div><!-- modal-content -->
          </div><!-- modal -->
          <div class="modal fade" id="image_3" tabindex="-1" 
            role="dialog" aria-labelledby="image_3" 
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <img src="img/gallery_large_03.jpg" alt="" class="img-fluid"/>
                </div>
              </div>
            </div><!-- modal-content -->
          </div><!-- modal -->
        </div><!-- facilities-gallery -->

      </main>

      <aside class="col-lg-4 pt-4 pt-lg-0">
        <div class="sidebar business-hours p-3">
          <?php include 'templates/business_hours.php' ?>
        </div>
      </aside>
    </div>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>