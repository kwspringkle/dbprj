<?php
require("db/conn.php");

// Truy vấn để tính tổng doanh thu
$sql_str = "SELECT COUNT(*) as total_customers FROM users";
$result = mysqli_query($conn, $sql_str);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_customers = $row['total_customers']; // Corrected variable assignment
}

echo number_format($total_customers) . ' khách hàng'; // Corrected variable name and added appropriate unit
?>
