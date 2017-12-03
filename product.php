<?php
  include 'templates/header.php';
  include 'templates/navigation.php';
  
  
  $id = $_GET['product'];
  if(filter_var($id, FILTER_VALIDATE_INT) === FALSE){
    die('No valid id!');
  }
  
  try{
    require_once 'inc/db.php';
    $sql = 'SELECT `name`, `image_full`, `price`, `short_description`, `description` FROM `products` WHERE id = ' .$id . ' LIMIT 1';
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
    
    $title = $product['name'];  
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/<?php echo $product['image_full']; ?>" alt="" class="img-fluid"/>
      <h2 class="text-uppercase d-none d-md-block"><?php echo $product['name']; ?></h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-lg-8 primary-content"> 
      <h2 class="d-block d-md-none text-uppercase text-center"><?php echo $product['name']; ?></h2>
      <p> 
        <?php echo $product['description']; ?>
      </p>
    </main>
    
    <aside class="col-lg-4 pt-4 pt-lg-0" id="product_description">
      <h3 class="text-uppercase text-center mt-5">Description</h3>
      <p class="text-center lead p-3">
        <?php echo $product['short_description']; ?>
      </p>
      
      <h3 class="text-uppercase text-center mt-2">Price</h3>
      <p class="text-center lead p-3 display-4">$<?php echo $product['price']; ?></p>
    </aside>
  </div>
</div>

<?php 
    } //if top statement
  }// while top statement
  $db->close();
  include 'templates/footer.php' 
?>