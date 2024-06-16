<?php
// Include necessary files
include("header.php");
include("connectdb.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve address, phone number, and payment method from the form
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['paymentMethod']);

    // Check if the phone number exists in the users table
    $check_query = "SELECT users_id FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $check_query);

    // If the phone number exists, retrieve user_id
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['users_id'];

        // Insert the order details into the order table
        $insert_order_query = "INSERT INTO orders (users_id, address, payment_method) 
                               VALUES ('$user_id', '$address', '$payment_method')";
        mysqli_query($conn, $insert_order_query);

        // Retrieve the auto-generated order_id
        $order_id = mysqli_insert_id($conn);

        // Select items from cart with product details using product name
        $cart_query = "SELECT c.id AS cart_id, c.quantity, p.products_id AS product_id, p.name, p.price 
                       FROM cart c
                       JOIN products p ON c.name = p.name";
        $cart_result = mysqli_query($conn, $cart_query);

        // Insert each product into order_detail table
        while ($cart_row = mysqli_fetch_assoc($cart_result)) {
            $cart_id = $cart_row['cart_id']; // Optional: If you need cart_id for further processing

            $product_id = $cart_row['product_id'];
            $quantity = $cart_row['quantity'];

            $insert_detail_query = "INSERT INTO order_detail (orders_id, products_id, quantity) 
                                    VALUES ('$order_id', '$product_id', '$quantity')";
            mysqli_query($conn, $insert_detail_query);
        }

        // Clear the cart after placing order (optional step)
        // Example: You might have a delete_product.php script to handle this

        // Output a success message
        echo "Order placed successfully.";

        // Optionally redirect after successful order placement
        echo "<script>window.location.href='success.php';</script>";
         exit();
    } else {
        // If the phone number does not exist, redirect to login page or show a message
        echo "Phone number not found in the users table. <a href='login.php'>Click here to login</a>.";
    }
}
?>

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
                                    </div>
                                    <hr class="my-4">

                                    <?php
                                    // Display items from cart with product details using product name
                                    $cart_query = "SELECT c.id AS cart_id, p.name, p.price, p.image, c.quantity 
                                                   FROM cart c
                                                   JOIN products p ON c.name = p.name";
                                    $cart_result = mysqli_query($conn, $cart_query);
                                    $total_price = 0; // Initialize total price variable
                                    while ($cart_row = mysqli_fetch_assoc($cart_result)) {
                                        ?>
                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2"><img src="<?php echo $cart_row['image']; ?>"></div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted"><?php echo $cart_row['name']; ?></h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                <h6 class="text-muted"><?php echo $cart_row['quantity']; ?></h6>
                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0"><?php echo $cart_row['price']; ?></h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="delete_product.php?id=<?php echo $cart_row['cart_id']; ?>">
                                                    <img src="images/trash-can.jpg" style="width: 50px; height: 30px;">
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                        // Calculate total price
                                        $total_price += $cart_row['price'] * $cart_row['quantity'];
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
                                        <h5 class="text-uppercase">Items <?php echo mysqli_num_rows($cart_result); ?></h5>
                                        <h5>€ <?php echo number_format($total_price, 2); ?></h5>
                                    </div>

                                    <h5 class="text-uppercase mb-3">Shipping</h5>

                                    <form role="form" method="POST">
                                        <h5 class="text-uppercase mb-3">Address</h5>
                                        <div class="mb-5">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" name="address" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Phone</h5>
                                        <div class="mb-5">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" name="phone" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-6">
                                                <h4 class="text-uppercase mb-3">Payment Method</h4>
                                                <div id="paymentForm" method="POST" action="process_payment.php">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentCash" value="cash" checked>
                                                        <label class="form-check-label" for="paymentCash">Cash</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paymentQR" value="qr">
                                                        <label class="form-check-label" for="paymentQR">QR Code</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>€ <?php echo number_format($total_price, 2); ?></h5>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-dark btn-block btn-lg"
                                                data-mdb-ripple-init data-mdb-ripple-color="dark">Buy
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
