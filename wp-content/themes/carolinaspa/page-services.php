<?php get_header(); ?>
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
      <div class="row  mt-lg-4">
        <main class="col-lg-8 primary-content">
          <h2 class="d-block d-md-none text-center text-uppercase"><?php the_title() ?></h2>
          <div id="services" role="tablist" 
            aria-multiselectable="true">
            <div class="card">
              <div class="card-header py-2" 
                role="tab" id="service_1">
                <h3 class="mb-0">
                  <a data-toggle="collapse" 
                    data-parent="#services" 
                    href="#service1_desc"
                    aria-expanded="true"
                    aria-controls="service1_desc">
                      <?php the_field('service_1_title') ?>
                  </a>
                </h3>
              </div><!-- card-header -->

              <div id="service1_desc" class="collapse show" 
                role="tabpanel" aria-labelledby="service_1">
                  <div class="card-block">
                    <?php the_field('service_1_description') ?>
                  </div><!-- card-block   -->
              </div><!--#service1_desc -->
            </div><!-- card -->

            <div class="card">
              <div class="card-header py-2" 
                role="tab" id="service_2">
                <h3 class="mb-0">
                  <a class="collapsed"
                    data-toggle="collapse" 
                    data-parent="#services" 
                    href="#service2_desc"
                    aria-expanded="false"
                    aria-controls="service2_desc">
                      <?php the_field('service_2_title') ?>
                  </a>
                </h3>
              </div><!-- card-header -->

              <div id="service2_desc" class="collapse" 
                role="tabpanel" aria-labelledby="service_2">
                  <div class="card-block">
                    <?php the_field('service_1_description') ?>
                  </div><!-- card-block   -->
              </div><!--#service1_desc -->
            </div><!-- card -->

            <div class="card">
              <div class="card-header py-2" 
                role="tab" id="service_3">
                <h3 class="mb-0">
                  <a class="collapsed"
                    data-toggle="collapse" 
                    data-parent="#services" 
                    href="#service3_desc"
                    aria-expanded="false"
                    aria-controls="service3_desc">
                      <?php the_field('service_3_title') ?>
                  </a>
                </h3>
              </div><!-- card-header -->

              <div id="service3_desc" class="collapse" 
                role="tabpanel" aria-labelledby="service_3">
                  <div class="card-block">
                    <?php the_field('service_1_description') ?>
                  </div><!-- card-block   -->
              </div><!--#service1_desc -->
            </div><!-- card -->
          </div><!--#services  -->
        </main>

        <?php get_sidebar() ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php get_footer(); ?>
