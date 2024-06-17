<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doze Cafe</title>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive styles -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/gif">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        /* Custom styles here */
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

        .about_taital_box {
            width: 500px;
            float: left;
            background-color: #ffffff;
            height: auto;
            padding: 40px 20px 30px 20px;
            box-shadow: 0px 0px 30px 0px;
            position: absolute;
            top: 1000px;
        }
        .navbar-light.bg-light {
            background-color: lightgray;
        }
        
    </style>
</head>
<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Doze Cafe Logo"></a>
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
                                <?php
                                session_start();
                                if (isset($_SESSION['fullname'])) {
                                    $fullname = $_SESSION['fullname'];
                                    echo '<li class="nav-item">
                                            <a id="Login" href="logout.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>' . $fullname . ' (Logout)</a>
                                          </li>';
                                } else {
                                    echo '<li class="nav-item">
                                            <a id="Login" href="login.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a>
                                          </li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- banner section start --> 
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="banner_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner_img"><img src="images/banner-img.png" alt="Banner Image"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner_taital_main">
                                    <h1 class="banner_taital">Coffee</h1>
                                    <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                    <p class="banner_text">More-or-less normal distribution of letters, as opposed to using </p>
                                    <div class="btn_main">
                                        <div class="about_bt"><a href="about.php">About Us</a></div>
                                        <div class="callnow_bt active"><a href="contact.php">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional carousel items here -->
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->



<!--about section start-->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital" style="margin-bottom: 20px;">About Us</h1>
                <div class="bulit_icon"><img src="images/bulit-icon.png" alt="Bullet Icon"></div>
            </div>
        </div>

                <!-- Original position of image and about_text -->
        <div class="about_section_2 layout_padding">
            <div class="image_iman"><img src="images/about-img.png" class="about_img" alt="About Image"></div>
        </div>

        <!-- Move the about_taital_box here -->
        <div class="about_taital_box">
            <h3 class="about_taital">Doze Cafe</h3>
            <h2 class="about_text page-center">Project cuối kì học phần thực hành cơ sở dữ liệu.</h2>
            <p class="about_text page-center">Chủ đề: Website cửa hàng bán cafe</p>
            <p class="about_text page-center">Thành viên nhóm:</p>
            <p class="about_text page-center">Trương Ngọc Mai</p>
            <p class="about_text page-center">Trần Khánh Quỳnh</p>
            <p class="about_text page-center">Bùi Ý Nhi</p>
            <p class="about_text page-center">Hà Trung Chiến</p>
        </div>


        
    </div>
</div>
<!--about section end-->

<?php include('footer.php'); ?>



                   
