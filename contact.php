<?php
  include 'templates/header.php';
  include 'templates/navigation.php';
  $title = 'Contact Us';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/contact_us.jpg" alt="" class="img-fluid"/>
      <h2 class="text-uppercase d-none d-md-block">Contact Us</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-12 col-md-10 offset-md-1 primary-content"> 
      <h2 class="d-block d-md-none text-uppercase text-center">Products</h2>
      
      <form id="contact_form" action="send.php" method="POST" class="p-5 mt-5 contact-form">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" />
          <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
          <small class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="6" class="form-control"></textarea>
          <small class="form-text text-muted"></small>
        </div>
        
        <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="Submit" />
        <div id="output" class="alert alert-success text-center mt-3"></div>
      </form>
    </main>  
  </div>
</div>



<?php 
  include 'templates/footer.php' 
?>