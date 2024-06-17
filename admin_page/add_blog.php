<?php
session_start();
include("db/conn.php"); // Kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $id = $_SESSION['user']['admins_id'];
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $created_at = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại
    $image = htmlspecialchars($_POST['image']); // Assuming image is a URL
    
    // Validate if image URL is valid (you can add more robust URL validation if needed)
    if (!filter_var($image, FILTER_VALIDATE_URL)) {
        echo "Đường dẫn ảnh không hợp lệ.";
        exit();
    }

    if (empty($title) || empty($content)) {
        echo "Điền đầy đủ thông tin.";
    } else {
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare("INSERT INTO blog_posts (admins_id, title, content, created_at, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $id, $title, $content, $created_at, $image);

        // Thực thi câu lệnh SQL
        if ($stmt->execute()) {
            echo "Thêm blog thành công";
            $stmt->close(); // Đóng statement sau khi thực thi

            // Điều hướng người dùng đến trang index.php sau khi thêm thành công
            header("Location: index.php");
            exit();
        } else {
            echo "Lỗi khi thêm blog: " . $stmt->error;
        }
    }
}
?>
