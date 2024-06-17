<?php
// Include your database connection file here
include("connectdb.php");

// Initialize session
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    session_start();
    // Query to check if the username exists and get the user_id, password, and full name
    $sql_check_user = "SELECT users_id, password, fullname FROM users WHERE username = ?";
    
    // Prepare statement
    $stmt = $conn->prepare($sql_check_user);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['users_id'];
        $stored_password = $row['password'];
        $fullname = $row['fullname'];

        // Verify the password (assuming passwords are stored as plain text for this example)
        if ($password === $stored_password) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $fullname; // Store full name in session

            // Redirect to indexx.php after successful login
            header("Location: blog.php");
            exit();
        } else {
            // Password is incorrect
            echo "Password is incorrect.";
        }
    } else {
        // Username does not exist
        echo "Username does not exist.";
    }

    $stmt->close();
}

$conn->close();
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
                    <h1 class="open-sans">Enter Details to Login</h1>
                    <br />
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Your Username" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login Now</button>
                    <hr />
                    Not registered? <a href="register.php">Click here</a> or go to <a href="index.html">Home</a>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
