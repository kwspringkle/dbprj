<?php
require("db/conn.php");

// Truy vấn để tính tổng doanh thu
$sql_str = "SELECT COUNT(*) as total_products FROM products";
$result = mysqli_query($conn, $sql_str);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_products = $row['total_products']; // Corrected variable assignment
}

echo number_format($total_products) . ' sản phẩm'; // Corrected variable name and added appropriate unit
?>
