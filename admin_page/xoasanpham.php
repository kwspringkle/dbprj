<?php
// Check if 'products_id' is provided in the URL
if (!isset($_GET['products_id'])) {
    // Handle the case where 'products_id' is not provided in the URL
    exit('Product ID is missing');
}

$del_id = $_GET['products_id'];

require('db/conn.php'); // Adjust the path as necessary

// Use prepared statement to delete the product
$sql_str = "DELETE FROM products WHERE products_id = ?";
$stmt = $conn->prepare($sql_str);

if ($stmt === false) {
    // Handle error
    exit('Prepare statement failed: ' . $conn->error);
}

$stmt->bind_param("i", $del_id); // Assuming 'products_id' is an integer

if ($stmt->execute() === false) {
    // Handle execution error
    exit('Execute failed: ' . $stmt->error);
}

$stmt->close();

// Redirect to list products page
header('Location: lietkesanpham.php');
exit;
?>
