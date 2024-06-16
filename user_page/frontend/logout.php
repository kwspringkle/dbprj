<?php
session_start();

// Xóa tất cả các biến session
session_unset();

// Hủy session
session_destroy();

// Điều hướng người dùng về trang chủ hoặc trang login (tùy bạn lựa chọn)
header("Location: index.php"); // Ví dụ chuyển về trang chủ

exit();
?>
