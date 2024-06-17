<?php
require("db/conn.php");

// Truy vấn để tính tổng doanh thu
$sql_str = "SELECT SUM(products.price * order_detail.quantity) AS total_revenue
            FROM order_detail 
            JOIN products ON order_detail.products_id = products.products_id";
$result = mysqli_query($conn, $sql_str);
$total_revenue = 0;

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_revenue = $row['total_revenue'];
}

echo number_format($total_revenue, 0, ',', '.') . ' VND';
?>
