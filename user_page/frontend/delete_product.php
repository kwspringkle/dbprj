<?php
include("connectdb.php");

// Check if product ID is provided
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // SQL to delete the product from cart
    $sql = "DELETE FROM cart WHERE id = $product_id";
    
    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the shopping cart page after successful deletion
        header("Location: cart.php");
        exit();
    } else {
        // Handle error if deletion fails
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    // Handle case where product ID is not provided
    echo "Product ID not provided.";
}
?>
