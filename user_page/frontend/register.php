<?php
include("header.php");
include("connectdb.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, password, full name, and phone number from the form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];

    // Check if both username and phone number already exist
    $sql_check = "SELECT * FROM users WHERE username = '$username' OR phone = '$phone'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Check which field caused the conflict
        while ($row = mysqli_fetch_assoc($result_check)) {
            if ($row['username'] === $username) {
                echo "Username already exists. Please choose a different username.";
                break;
            } elseif ($row['phone'] === $phone) {
                echo "Phone number already exists. Please use a different phone number.";
                break;
            }
        }
    } else {
        // Insert new user
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
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
            <div class="panel-body">
                <form role="form" method="POST">
                    <hr />
                    <h1 class="open-sans">Enter Detail</h1>
                    <br />
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="Your Username">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="text" name="fullname" class="form-control" placeholder="Your fullname">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="password" name="password" class="form-control" placeholder="Your Password">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-addon"></span>
                        </div>
                        <input type="text" name="phone" class="form-control" placeholder="Your phone">
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login Now</button>
                    <hr />
                    Not registered? <a href="login.php">Click here</a> or go to <a href="index.html">Home</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
