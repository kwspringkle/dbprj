<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Doze Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <style>
         #Login {
             color: black;
             background-color: white; 
             border: none; 
             padding: 10px 20px; 
             cursor: pointer; 
             border-radius: 15px; 
             width: auto;
         }
         #Login:hover {
             background-color: lightgray;
         }
         .navbar-nav .nav-item {
             display: flex;
             align-items: center;
         }
         .navbar-nav .nav-item #Login {
             margin-left: 15px; 
         }
      </style>
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <!-- products dropdown -->
                     <li class="nav-item">
                        <a class="nav-link" href="shop4.php">Product</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a id="Login" href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">coffee</h1>
                                 <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a href="about.php">About Us</a></div>
                                    <div class="callnow_bt active"><a href="contact.php">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Additional carousel items here -->
                  </div>
             
                 
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">OUR Coffee OFFER</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <!-- Coffee products loop here -->
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">product</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="shop4.php">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">product</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="shop4.php">Read More</a></div>
                           </div>
                           <!-- Repeat for other products -->
                        </div>
                     </div>
                  </div>
                  <!-- Additional carousel items here -->
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">About Our shop</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
            <div class="about_section_2 layout_padding">
               <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
               <div class="about_taital_box">
                  <h1 class="about_taital_1">Coffee distribution '</h1>
                  <p class="about_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editorhas a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editor</p>
                  <div class="read_bt"><a href="blog.php">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      </html>
    
   <?php include("footer.php")?>
