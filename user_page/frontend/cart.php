<?php include("header.php");
include ("connectdb.php") ?>


      
<section class="h-100 h-custom" style="background-color: white;">
   <div class="container py-5 h-100">
     <div class="row d-flex justify-content-center align-items-center h-100">
       <div class="col-12">
         <div class="card card-registration card-registration-2" style="border-radius: 15px;">
           <div class="card-body p-0">
             <div class="row g-0">
               <div class="col-lg-8">
                 <div class="p-5">
                
                   <div class="d-flex justify-content-between align-items-center mb-5">
                     <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                     <h6 class="mb-0 text-muted">3 items</h6>
                   </div>
                   <?php
                   
                    $sql_str = "SELECT  name, price, image FROM cart";
                    $result = mysqli_query($conn, $sql_str);
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                   <hr class="my-4">

                   <div class="row mb-4 d-flex justify-content-between align-items-center">
                     <div class="col-md-2 col-lg-2 col-xl-2"><img src="<?php echo $row['image']; ?>"></div>
                         
                   
                     <div class="col-md-3 col-lg-3 col-xl-3">
                       <h6 class="text-muted"><?php echo $row['name']; ?></h6>
                       
                     </div>
                     <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                       <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                         onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                         <i class="fas fa-minus"></i>
                       </button>

                       <input id="form1" min="0" name="quantity" value="1" type="number"
                         class="form-control form-control-sm" />

                       <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link px-2"
                         onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                         <i class="fas fa-plus"></i>
                       </button>
                     </div>
                     <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                       <h6 class="mb-0"><?php echo $row['price']; ?></h6>
                     </div>
                     <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                       <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                     </div>
                   </div>
                    <?php
                    }
                    ?>
                  
                   <hr class="my-4">

                   <div class="pt-5">
                     <h6 class="mb-0"><a href="shop4.php" class="text-body"><i
                           class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4 bg-grey">
                 <div class="p-5">
                   <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                   <hr class="my-4">

                   <div class="d-flex justify-content-between mb-4">
                     <h5 class="text-uppercase">items 3</h5>
                     <h5>€ 132.00</h5>
                   </div>

                   <h5 class="text-uppercase mb-3">Shipping</h5>

                   <div class="mb-4 pb-2">
                     <select data-mdb-select-init>
                       <option value="1">Standard-Delivery- €5.00</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                       <option value="4">Four</option>
                     </select>
                   </div>

                 
                   <h5 class="text-uppercase mb-3">Name</h5>
    
                   <div class="mb-5">
                     <div data-mdb-input-init class="form-outline">
                       <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                       <!-- <label class="form-label" for="form3Examplea2">Enter your code</label> -->
                     </div>
                   </div>


                   <h5 class="text-uppercase mb-3">Address</h5>
 
                   <div class="mb-5">
                     <div data-mdb-input-init class="form-outline">
                       <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                       <!-- <label class="form-label" for="form3Examplea2">Enter your address</label> -->
                     </div>
                   </div>

                   <h5 class="text-uppercase mb-3">Phone</h5>
 
                   <div class="mb-5">
                     <div data-mdb-input-init class="form-outline">
                       <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                       <!-- <label class="form-label" for="form3Examplea2">Enter your address</label> -->
                     </div>
                   </div>

                   <div class="row mb-5">
                    <div class="col-md-6">

                     
                      <h4 class="text-uppercase mb-3">Payment Method</h>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name=" paymentMethod" id="paymentCash" value="cash" checked>
                        <label class="form-check-label" for="paymentCash">Cash</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name=" paymentMethod" id="paymentQR" value="qr">
                        <label class="form-check-label" for="paymentQR">QR Code</label>
                      </div>
                    </div>
                  </div>

                  

                 

              
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
                       <!-- "contact_taital" -->
                      <hr class="my-4">
    
                      <div class="d-flex justify-content-between mb-5">
                        <h5 class="text-uppercase">Total price</h5>
                        <h5>€ 137.00</h5>
                      </div>
                     
                      
    
                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-block btn-lg"
                        data-mdb-ripple-color="dark">Buy</button>
    
                    </div>
                  </div>
                </div>
                
      </label>


    </section>
<?php include("footer.php"); ?>
