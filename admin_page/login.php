<?php

session_start();
// Include your database connection file here
include("db/conn.php");
$error_msg ='';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security (if needed, depending on your database storage)
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query to check if the username exists and get the user_id
    $sql_check_username = "SELECT * FROM admins WHERE username = '$username'";
    $result_check_username = mysqli_query($conn, $sql_check_username);

    if (mysqli_num_rows($result_check_username) > 0) {
        $row = mysqli_fetch_assoc($result_check_username);
        $user_id = $row['admins_id'];
        $stored_password = $row['password'];

        // Verify the password
        // Assuming passwords are hashed in the database, you would use password_verify
        // if (password_verify($password, $stored_password)) {
        if ($password === $stored_password) { // For demonstration purpose only; use password_verify in real scenarios
            // Redirect to products.php if username is user_id and password matches
            $_SESSION['user'] = $row;
            header("Location: index.php");
            exit();
        } else {
            echo "Password is incorrect.";
        }
    } else {
        echo "Username does not exist.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F19281 !important;
        }
        .center-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .bg-login-image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .bg-login-image img {
            max-width: 50%; /* Điều chỉnh kích thước của ảnh */
            height: auto;
        }
        .center-logo2 {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .card {
            background-color: #e7e7e7;
        }
        .form-control-user {
            border-radius: 25px; /* Adjust as needed */
            padding: 1rem 2rem; /* Adjust padding */
        }
        .btn-user {
            border-radius: 25px; /* Adjust as needed */
            padding: 1rem 2rem; /* Adjust padding */
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="img/logo.png" alt="Logo" class="center-logo2">
                                <img src="img/banner-img.png" alt="Banner" class="center-logo">
                            </div>
                            <div class="col-lg-6 col-md-8 col-sm-10">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login - Admin Panel</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <button type="submit" name="btSubmit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
