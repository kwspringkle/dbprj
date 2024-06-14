<?php 
include("header.php");
include("connectdb.php");


$display_message = []; // Initialize display message array

if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    // Select cart data
    $select_cart = mysqli_query($conn, "SELECT name, price, quantity, image FROM `cart` WHERE name='$product_name'");
    if(mysqli_num_rows($select_cart) > 0){
        $row = mysqli_fetch_assoc($select_cart);
        $new_quantity = $row['quantity'] + 1;
        $update_quantity = mysqli_query($conn, "UPDATE `cart` SET quantity=$new_quantity WHERE name='$product_name'");
        // $display_message[] = "Product already added to cart";
    } else {
        $insert_products = mysqli_query($conn, "INSERT INTO `cart` (name, price, image, quantity) VALUES ('$product_name','$product_price','$product_image','$product_quantity')");
        if($insert_products){
            $display_message[] = "Product added to cart";
        } else {
            $display_message[] = "Error adding product to cart";
        }
    }
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<style>


.open-sans {
  font-family: "Open Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
  font-variation-settings: "wdth" 100;
  font-size: 1.5em; /* Tăng kích thước font cho tiêu đề */
  margin-bottom: 10px; /* Thêm khoảng cách dưới tiêu đề */
}

</style>

<div class="coffee_section layout_padding">

         <div class="container">

            <div class="row">
               <h1 class="coffee_taital">Coffees</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               <div class="icon-cart"><a href="cart.php" ><div>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z">
                     </a></svg>
                  </div>
</div>

            </div>
         </div>
         <div class="coffee_section_2">
      
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
              
                  <div class="carousel-item active">
              
                     <div class="container-fluid">
                     <div class="row">
    <?php
    $select_product = "SELECT products_id, name, price, image FROM products";
    $fetch_product_result = mysqli_query($conn, $select_product);
    
    if(mysqli_num_rows($fetch_product_result) > 0) {
        while($fetch_product = mysqli_fetch_assoc($fetch_product_result)) {
    ?>
    <div class="col-lg-3 col-md-6">
        <div class="coffee_img"><img src="<?php echo $fetch_product['image']; ?>" ></div>
        <h3 class="open-sans"><?php echo $fetch_product['name']; ?></h3>
        <p class="looking_text"><?php echo $fetch_product['price']; ?></p>
        <div class="read_bt"><a href="cart.php">Go to Shopping</a></div>
        <form method="post" action="">
            <!-- Pass product details as hidden inputs -->
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <!-- Submit button to add product to cart -->
            <input type="submit" class="read_bt" value="Add to Cart" name="add_to_cart">
            
        </form>
    </div>
    <?php
        }
    } else {
        echo "No products available";
    }
    ?>
</div>

<?php
                    
                          
                         ?>

                           </div>

                    
                  
   
                        
                     </div>
                     
                </div>

               </div>
               <a href="" class="cart">< <i class="fa-solid fa-cart-shopping"></i><span><sup>4</sup></span></a>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>

         <?php include("footer.php"); ?>