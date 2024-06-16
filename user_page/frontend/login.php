<?php
// Include your database connection file here
include("connectdb.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security (if needed, depending on your database storage)
    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query to check if the username exists and get the user_id
    $sql_check_username = "SELECT users_id, password FROM users WHERE username = '$username'";
    $result_check_username = mysqli_query($conn, $sql_check_username);

    if (mysqli_num_rows($result_check_username) > 0) {
        $row = mysqli_fetch_assoc($result_check_username);
        $user_id = $row['users_id'];
        $stored_password = $row['password'];

        // Verify the password
        // Assuming passwords are hashed in the database, you would use password_verify
        // if (password_verify($password, $stored_password)) {
        if ($password === $stored_password) { // For demonstration purpose only; use password_verify in real scenarios
            // Redirect to products.php if username is user_id and password matches
            header("Location: shop4.php");
            exit();
        } else {
            echo "Password is incorrect.";
        }
    } else {
        echo "Username does not exist.";
    }
}
?>


<?php include("header.php"); ?>
<!-- Your HTML and CSS code for the login form -->
<!-- Make sure to set the form method to POST -->
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
            <div class="panel-body">
                <form role="form" method="POST">
                    <hr />
                    <h1 class="open-sans">Enter Details to Login</h1> <!-- Corrected class name -->
                    <br />
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Your Username"> <!-- Added name attribute -->
                    </div>
                  
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Your Password"> <!-- Added name attribute -->
                    </div>
                    
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login Now</button> <!-- Changed anchor tag to button -->
                    <hr />
                    registered? <a href="register.php">Click here</a> or go to <a href="index.html">Home</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
