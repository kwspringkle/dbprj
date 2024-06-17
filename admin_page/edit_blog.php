<?php 
include('db/conn.php');
session_start();
// Lấy product_id từ hidden input
$blog_id = $_POST['blog_id'];

// Lấy dữ liệu từ form post
$title = $_POST['title'];
$content = $_POST['content'];
$admins_id = $_SESSION['user']['admins_id'];
$image = $_POST['image'];

// Câu lệnh SQL để cập nhật sản phẩm
$sql_update = "UPDATE blog_posts SET 
               title = '$title', 
               content = '$content', 
               admins_id = '$admins_id', 
               image = '$image' 
               WHERE blog_id = $blog_id";

// Thực hiện câu lệnh SQL
if ($conn->query($sql_update) === TRUE) {
    header("location: lietkeblog.php");
    exit();
} else {
    echo "Lỗi: " . $sql_update . "<br>" . $conn->error;
}
?>
