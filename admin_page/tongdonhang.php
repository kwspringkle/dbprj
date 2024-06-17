<?php
require("db/conn.php");

// Truy vấn để tính tổng số đơn hàng
$sql_str = "SELECT COUNT(*) as total_orders FROM orders";
$result = mysqli_query($conn, $sql_str);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_orders = $row['total_orders']; // Corrected variable assignment to 'total_orders'
}

echo number_format($total_orders, 0, ',', '.') . ' đơn hàng'; // Corrected output formatting
?>
