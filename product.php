<?php
  include 'templates/header.php';
  include 'templates/navigation.php';
  $title = 'Services';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/product_large_01.jpg" alt="" class="img-fluid"/>
      <h2 class="text-uppercase d-none d-md-block">Name of Product</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-lg-8 primary-content"> 
      <h2 class="d-block d-md-none text-uppercase text-center">Name of Product</h2>
      
      <p>
        Mauris id felis interdum, consectetur elit ac, imperdiet nisl. Cras laoreet 
        purus vestibulum, rhoncus sapien non, pellentesque ligula. Sed at dui et eros 
        molestie sollicitudin. Sed efficitur, est rhoncus luctus auctor, augue enim 
        fermentum nibh, sit amet tempus orci neque ut leo. Integer vitae vestibulum urna. 
        Nunc vulputate, libero non tempus cursus, sem ligula dignissim augue, quis 
        molestie urna eros sed enim. Nam feugiat condimentum nunc, id aliquam tortor 
        rutrum eget. Duis eu lobortis ipsum. Donec ullamcorper, turpis in posuere 
        lobortis, lorem nibh bibendum magna, ac molestie nisi lacus at est. Quisque 
        ultricies scelerisque metus, ut commodo mauris maximus non. Mauris consequat 
        feugiat elementum. Ut dictum tristique metus vel aliquam. Suspendisse placerat 
        vel mi vitae auctor.
      </p>
      
      <p>
        Maecenas blandit in nisl id dictum. Donec efficitur 
        eu nulla vel elementum. Phasellus tincidunt mollis 
        sem ac sollicitudin. Duis finibus diam sit amet 
        vulputate sagittis. Etiam sed viverra magna, sed 
        laoreet ligula. Curabitur vitae nulla sit amet eros 
        ornare semper id sit amet odio. Mauris rhoncus porta 
        sem a ornare. In feugiat est arcu, et feugiat est 
        lacinia quis. Cras quis laoreet lacus.
      </p>
    </main>
    
    <aside class="col-lg-4 pt-4 pt-lg-0" id="product_description">
      <h3 class="text-uppercase text-center mt-5">Description</h3>
      <p class="text-center lead p-3">
        In feugiat est arcu, et feugiat est 
        lacinia quis. Cras quis laoreet lacus.
      </p>
      
      <h3 class="text-uppercase text-center mt-2">Price</h3>
      <p class="text-center lead p-3 display-4">$25</p>
    </aside>
  </div>
</div>

<?php 
  include 'templates/footer.php' 
?>