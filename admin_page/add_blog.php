<?php
include("db/conn.php");
    $title = $_POST['title'];
    $content= $_POST['content'];

   $sql_str = "INSERT INTO blog_posts (title, content) VALUES ($title, $content);";
    mysqli_query($conn, $sql_str);
    header("location: index.php");
?>

/* Cần phải có user_id mới chạy được, mà cần phải có user_id từ acc đang đăng nhập ở trang admin.
Cần thêm ràng buộc để cho trong bảng users, những người có role là admin mới được đăng blog_posts,những
người có role user mới được gửi tin nhắn. Tạm thời phần này với phần thêm admin để lại, làm các phần chỉnh sửa products trước */
