<?php
session_start();
include("db/conn.php"); // Kết nối đến cơ sở dữ liệu


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate form inputs
    $id = $_SESSION['user']['admins_id'];
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $fullname = htmlspecialchars($_POST['fullname']);

    if (empty($username) || empty($password) || empty($fullname)) {
        echo "Điền đầy đủ thông tin.";
    } else {
        if ($_SESSION['user']['role'] !== 'superadmin') {
            echo "<h1>Chỉ superadmin mới được thực hiện quyền này </h1>";
            echo "Quay trở lại <a href= 'index.php'>Trang chủ</a>";
            exit();
        }

        // Chuẩn bị câu lệnh SQL
        $stmt = $conn->prepare("INSERT INTO admins (username, password, fullname, role) VALUES (?, ?, ?, 'admin')");
        $stmt->bind_param("sss", $username, $password, $fullname);

        // Thực thi câu lệnh SQL
        if ($stmt->execute()) {
            echo "Thêm admin thành công";
            $stmt->close(); // Đóng statement sau khi thực thi

            // Điều hướng người dùng đến trang index.php sau khi thêm thành công
            header("Location: index.php");
            exit();
        } else {
            echo "Lỗi khi thêm admin: " . $stmt->error;
        }
    }
}
?>
