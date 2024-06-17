<?php
// Include your database connection file here
 include("header.php"); 
include("connectdb.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, password, full name, and phone number from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];

    // Check if the phone number already exists in the database
    $sql_check = "SELECT * FROM users WHERE phone = '$phone'";
    $result_check = mysqli_query($conn, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo "Phone number already exists. Please use a different phone number.";
    } else {
        // Prepare and execute the SQL query to update the user table
        $sql_update = "UPDATE users SET password = '$password' WHERE username = '$username'";
        if (mysqli_query($conn, $sql_update)) {
            echo "Username and password updated successfully.";
        } else {
            echo "Error updating username and password: " . mysqli_error($conn);
        }

        // Prepare and execute the SQL query to insert a new user into the users table
        $sql_insert = "INSERT INTO users (username, password, fullname, phone) VALUES ('$username', '$password', '$fullname', '$phone')";
        if (mysqli_query($conn, $sql_insert)) {
            echo "New user inserted successfully.";
        } else {
            echo "Error inserting new user: " . mysqli_error($conn);
        }
    }
}
?>


<!-- Your HTML and CSS code for the login form -->
<!-- Make sure to set the form method to POST -->
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
            <div class="panel-body">
                <form role="form" method="POST">
                    <hr />
                    <h1 class="open-sans">Enter Detail</h1> <!-- Corrected class name -->
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
                        <input type="text" name="fullname" class="form-control" placeholder="Your fullname"> <!-- Added name attribute -->
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Your Password"> <!-- Added name attribute -->
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="phone" name="phone" class="form-control" placeholder="Your phone"> <!-- Added name attribute -->
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login Now</button> <!-- Changed anchor tag to button -->
                    <hr />
                    Not registered? <a href="login.php">Click here</a> or go to <a href="index.html">Home</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
