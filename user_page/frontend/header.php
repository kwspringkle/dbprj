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
      <title>Blog</title>
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
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
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
      <!--header section start-->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <!-- products dropdown -->
                     <li class="nav-item">
                        <a class="nav-link" href="shop4.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a id="Login" href="login.html"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                            <li class="nav-item"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
