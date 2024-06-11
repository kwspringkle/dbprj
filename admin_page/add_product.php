<?php
include("db/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if (empty($name) || empty($description) || empty($price)) {
        echo "Điền tất cả thông tin";
    } else {
        $name = htmlspecialchars($name);
        $description = htmlspecialchars($description);
        $price = filter_var($price, FILTER_VALIDATE_FLOAT);

        if ($price === false) {
            echo "Giá không hợp lệ";
        } else {
            $stmt = $conn->prepare("INSERT INTO products (name, description, price) VALUES (?, ?, ?)");
            $stmt->bind_param("ssd", $name, $description, $price);

            if ($stmt->execute()) {
                echo "Thêm sản phẩm thành công";
                header("Location: index.php");
                exit();
            } else {
                echo "Lỗi: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}
?>
