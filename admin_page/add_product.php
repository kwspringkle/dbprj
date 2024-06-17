<?php
include("db/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
    $image = htmlspecialchars($_POST['image']);
    
    // Validate if image URL is valid
    if (!filter_var($image, FILTER_VALIDATE_URL)) {
        echo "Đường dẫn ảnh không hợp lệ.";
        exit();
    }

    if (empty($name) || empty($description) || $price === false) {
        echo "Điền đầy đủ thông tin và giá tiền phải là một số hợp lệ.";
    } else {
        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssds", $name, $description, $price, $image);

        // Thực thi câu lệnh SQL
        if ($stmt->execute()) {
            echo "Thêm sản phẩm thành công";
            $stmt->close(); // Đóng statement sau khi thực thi

            // Điều hướng người dùng đến trang index.php sau khi thêm thành công
            header("Location: index.php");
            exit();
        } else {
            echo "Lỗi khi thêm sản phẩm: " . $stmt->error;
        }
    }
}
?>
