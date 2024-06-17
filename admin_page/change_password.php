<?php
session_start();
include("db/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_new_pass = $_POST['confirm_new_pass'];
    $admins_id = $_SESSION['user']['admins_id'];

    if ($new_pass !== $confirm_new_pass) {
        echo "<div class='alert alert-danger'>Mật khẩu mới không khớp. Vui lòng thử lại.</div>";
    } else {
        // Fetch the current password from the database
        $stmt = $conn->prepare("SELECT password FROM admins WHERE admins_id = ?");
        $stmt->bind_param("i", $admins_id);
        $stmt->execute();
        $stmt->bind_result($current_password);
        $stmt->fetch();
        $stmt->close();

        // Verify the old password (assuming passwords are stored in plain text - insecure)
        if ($old_pass === $current_password) {
            // Update the password in the database (plain text - insecure)
            $stmt = $conn->prepare("UPDATE admins SET password = ? WHERE admins_id = ?");
            $stmt->bind_param("si", $new_pass, $admins_id);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success'>Mật khẩu đã được thay đổi thành công.</div>";
                header("location: index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Đã xảy ra lỗi khi thay đổi mật khẩu. Vui lòng thử lại.</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Mật khẩu cũ không chính xác. Vui lòng thử lại.</div>";
        }
    }
}

$conn->close();
?>
