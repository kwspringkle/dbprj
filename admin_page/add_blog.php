<?php

//Chưa xác định được admin_id



include("db/conn.php"); // Kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra xem có tệp đã được gửi lên không
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Sanitize and validate form inputs
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $created_at = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại

        // File upload handling
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        $upload_directory = 'uploads/';
        $upload_path = $upload_directory . $file_name;

        // Tạo thư mục uploads nếu nó chưa tồn tại
        if (!file_exists($upload_directory)) {
            mkdir($upload_directory, 0777, true); // Tạo thư mục đệ quy với quyền truy cập đầy đủ
        }

        // Kiểm tra xem tệp đã được tải lên thành công chưa
        if (move_uploaded_file($file_tmp, $upload_path)) {
            // Tệp đã được tải lên thành công, tiến hành chèn vào cơ sở dữ liệu
            if (empty($title) || empty($content)) {
                echo "Điền đầy đủ thông tin.";
            } else {
                // Chuẩn bị câu lệnh SQL
                $stmt = $conn->prepare("INSERT INTO blog_posts (title, content, created_at, image) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $title, $content, $created_at, $upload_path);

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
        } else {
            echo "Lỗi khi tải lên file ảnh";
        }
    } else {
        echo "Không có tệp được tải lên hoặc có lỗi khi tải lên";
    }
}
?>
