<?php
include("db/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);

    // File upload handling
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $upload_directory = '../uploads/';
    $upload_path = $upload_directory . $file_name;

    // Create uploads directory if it doesn't exist
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true); // Creates the directory recursively with full permissions
    }

    // Check if file was uploaded successfully
    if (move_uploaded_file($file_tmp, $upload_path)) {
        // File uploaded successfully, proceed with database insertion
        if (empty($name) || empty($description) || $price === false) {
            echo "Điền đầy đủ thông tin và giá phải là số.";
        } else {
            // Prepare SQL statement
            $stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssds", $name, $description, $price, $upload_path);

            // Execute SQL statement
            if ($stmt->execute()) {
                echo "Thêm sản phẩm thành công";
                header("Location: index.php");
                exit();
            } else {
                echo "Lỗi khi thêm sản phẩm: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        }
    } else {
        echo "Lỗi khi tải lên file ảnh";
    }
}
?>
