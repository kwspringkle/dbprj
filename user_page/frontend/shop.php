<?php include("header.php"); ?>


<div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">Coffees</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
      
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
              
                  <div class="carousel-item active">
              
                     <div class="container-fluid">
                        <div class="row">
                        <?php
                    require("connectdb.php");
                    $sql_str = "SELECT id, name, price, image FROM products";
                    $result = mysqli_query($conn, $sql_str);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                           <div class="col-lg-3 col-md-6">
                           <div class="coffee_img"><img src="<?php echo $row['image']; ?>" ></div>
                            <h3 class="types_text"><?php echo $row['name']; ?></h3>
                            <p class="looking_text"><?php echo $row['price']; ?></p>
                            <div class="read_bt"><a href="cart.php">Add to Cart</a></div>
                            </div>
<?php
                    }
                          
                         ?>

                           </div>

                    
                  </div>
                  <div>

                  
               
                              
                          
                           
                        </div>
                     </div>
                     
                </div>

               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>

         <?php include("footer.php"); ?>