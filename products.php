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
      
      <div class="row products">
        <?php 
          try{
            require_once 'inc/db.php';
            $sql = 'SELECT `id`, `name`, `image_thumb`, `price`, `short_description` FROM `products`';
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
                  <a href="product.php?<?php echo $product['id']; ?>">
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
      </div><!--row products -->
    </main>  
  </div>
</div>



<?php 
  include 'templates/footer.php' 
?>