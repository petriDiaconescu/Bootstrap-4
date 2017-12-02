<?php
  include 'templates/header.php';
  include 'templates/navigation.php';
  $title = 'Products / Store';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/store.jpg" alt="" class="img-fluid"/>
      <h2 class="text-uppercase d-none d-md-block">Products</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-12 primary-content"> 
      <h2 class="d-block d-md-none text-uppercase text-center">Products</h2>
      
      <div class="col-6 col-md-3 mb-5 mb-md-0">
        <div class="card">
          <a href="">
            <img src="img/product_thumb_01.jpg" alt="" class="card-img-top img-fluid" />
            <div class="card-block">
              <h3 class="card-title text-center text-uppercase mb-0">Product 1</h3>
              <p class="card-text text-uppercase">Vivamus auctor, velit ut tincidunt 
                molestie, elit metus iaculis sapien
              </p>
              <p class="price text-center mb-0">$ 25</p>
            </div>
          </a>
        </div>
      </div><!-- col-6 col-md-3   -->
      <div class="col-6 col-md-3">
        <div class="card">
          <a href="">
            <img src="img/product_thumb_02.jpg" alt="" class="card-img-top img-fluid" />
            <div class="card-block">
              <h3 class="card-title text-center text-uppercase mb-0">Product 2</h3>
              <p class="card-text text-uppercase">Vivamus auctor, velit ut tincidunt 
                molestie, elit metus iaculis sapien
              </p>
              <p class="price text-center mb-0">$ 25</p>
            </div>
          </a>
        </div>
      </div><!-- col-6 col-md-3   -->
      <div class="col-6 col-md-3">
        <div class="card">
          <a href="">
            <img src="img/product_thumb_03.jpg" alt="" class="card-img-top img-fluid" />
            <div class="card-block">
              <h3 class="card-title text-center text-uppercase mb-0">Product 3</h3>
              <p class="card-text text-uppercase">Vivamus auctor, velit ut tincidunt 
                molestie, elit metus iaculis sapien
              </p>
              <p class="price text-center mb-0">$ 25</p>
            </div>
          </a>
        </div>
      </div><!-- col-6 col-md-3   -->
      <div class="col-6 col-md-3">
        <div class="card">
          <a href="">
            <img src="img/product_thumb_04.jpg" alt="" class="card-img-top img-fluid" />
            <div class="card-block">
              <h3 class="card-title text-center text-uppercase mb-0">Product 4</h3>
              <p class="card-text text-uppercase">Vivamus auctor, velit ut tincidunt 
                molestie, elit metus iaculis sapien
              </p>
              <p class="price text-center mb-0">$ 25</p>
            </div>
          </a>
        </div>
      </div><!-- col-6 col-md-3   -->
    </main>  
  </div>
</div>



<?php 
  include 'templates/footer.php' 
?>