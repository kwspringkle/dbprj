<?php 
include('db/conn.php');

// Lấy product_id từ hidden input
$product_id = $_POST['product_id'];

// Lấy dữ liệu từ form post
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];

// Câu lệnh SQL để cập nhật sản phẩm
$sql_update = "UPDATE products SET 
               name = '$name', 
               price = '$price', 
               description = '$description', 
               image = '$image'
               WHERE products_id = $product_id";

// Thực hiện câu lệnh SQL
if ($conn->query($sql_update) === TRUE) {
    header("location: lietkesanpham.php");
    exit();
} else {
    echo "Lỗi: " . $sql_update . "<br>" . $conn->error;
}
?>
