<?php
  include 'templates/header.php';
  include 'templates/navigation.php';
  $title = 'Services';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/services.jpg" alt="" class="img-fluid"/>
      <h2 class="text-uppercase d-none d-md-block">Services</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-lg-8 primary-content"> 
      <h2 class="d-block d-md-none text-uppercase text-center">Services</h2>
      
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
                  Service 1
              </a>
            </h3>
          </div><!-- card-header -->
          
          <div id="service1_desc" class="collapse show" 
            role="tabpanel" aria-labelledby="service_1">
              <div class="card-block">
                In a purus eget arcu tempor pharetra. In hac habitasse 
                platea dictumst. Donec eget odio et magna mollis faucibus. 
                Morbi non euismod magna, non pharetra metus. Pellentesque 
                mattis tempor tortor, et faucibus libero consectetur sit amet. 
                Fusce eu augue accumsan, pulvinar justo quis, egestas odio. 
                Morbi maximus, risus non sagittis porta, magna nibh lacinia 
                velit, nec malesuada orci nisl et dolor. Proin scelerisque 
                justo non arcu porttitor, sed tempor eros viverra. Sed laoreet 
                tortor vitae odio suscipit, in mollis libero tristique. 
                Suspendisse vitae maximus ligula.
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
                  Service 2
              </a>
            </h3>
          </div><!-- card-header -->
          
          <div id="service2_desc" class="collapse show" 
            role="tabpanel" aria-labelledby="service_2">
              <div class="card-block">
                In a purus eget arcu tempor pharetra. In hac habitasse 
                platea dictumst. Donec eget odio et magna mollis faucibus. 
                Morbi non euismod magna, non pharetra metus. Pellentesque 
                mattis tempor tortor, et faucibus libero consectetur sit amet. 
                Fusce eu augue accumsan, pulvinar justo quis, egestas odio. 
                Morbi maximus, risus non sagittis porta, magna nibh lacinia 
                velit, nec malesuada orci nisl et dolor. Proin scelerisque 
                justo non arcu porttitor, sed tempor eros viverra. Sed laoreet 
                tortor vitae odio suscipit, in mollis libero tristique. 
                Suspendisse vitae maximus ligula.
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
                  Service 3
              </a>
            </h3>
          </div><!-- card-header -->
          
          <div id="service3_desc" class="collapse show" 
            role="tabpanel" aria-labelledby="service_3">
              <div class="card-block">
                In a purus eget arcu tempor pharetra. In hac habitasse 
                platea dictumst. Donec eget odio et magna mollis faucibus. 
                Morbi non euismod magna, non pharetra metus. Pellentesque 
                mattis tempor tortor, et faucibus libero consectetur sit amet. 
                Fusce eu augue accumsan, pulvinar justo quis, egestas odio. 
                Morbi maximus, risus non sagittis porta, magna nibh lacinia 
                velit, nec malesuada orci nisl et dolor. Proin scelerisque 
                justo non arcu porttitor, sed tempor eros viverra. Sed laoreet 
                tortor vitae odio suscipit, in mollis libero tristique. 
                Suspendisse vitae maximus ligula.
              </div><!-- card-block   -->
          </div><!--#service1_desc -->
        </div><!-- card -->
      </div><!--#services  -->
    </main>
    
    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar business-hours p-3">
        
      </div>
    </aside>
  </div>
</div>

<?php include 'templates/footer.php' ?>