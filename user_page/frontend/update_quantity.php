<?php
// Kết nối với cơ sở dữ liệu và kiểm tra kết nối
include ("connectdb.php");

// Lấy dữ liệu từ yêu cầu POST
$itemId = $_POST['itemId'];
$quantity = $_POST['quantity'];

// Lấy thông tin sản phẩm từ cơ sở dữ liệu
$sql_select = "SELECT price FROM cart WHERE id = $itemId";
$result_select = mysqli_query($conn, $sql_select);
if (mysqli_num_rows($result_select) > 0) {
    $row = mysqli_fetch_assoc($result_select);
    $price = $row['price'];
} else {
    echo 'error';
    exit(); // Thoát khỏi script nếu không tìm thấy sản phẩm
}

// Cập nhật số lượng trong cơ sở dữ liệu
$sql_update = "UPDATE cart SET quantity = $quantity WHERE id = $itemId";
$result_update = mysqli_query($conn, $sql_update);

// Tính toán lại tổng giá
$total_price = $price * $quantity;

// Cập nhật tổng giá trong cơ sở dữ liệu
$sql_update_total = "UPDATE cart SET total_price = $total_price WHERE id = $itemId";
$result_update_total = mysqli_query($conn, $sql_update_total);

// Kiểm tra và trả về kết quả
if ($result_update && $result_update_total) {
    echo 'success';
} else {
    echo 'error';
}

// Đóng kết nối
mysqli_close($conn);
?>
