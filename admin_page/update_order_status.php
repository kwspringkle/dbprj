<?php
require("db/conn.php");

session_start();
$user_id = $_SESSION['user']['admins_id']; // Lấy id của người dùng hiện tại

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lặp qua các đơn hàng để xử lý cập nhật
    foreach ($_POST['status'] as $orders_id => $status) {
        // Kiểm tra xem người dùng có thay đổi trạng thái đơn hàng không
        $sql_check = "SELECT status FROM orders WHERE orders_id = ?";
        $stmt_check = mysqli_prepare($conn, $sql_check);
        mysqli_stmt_bind_param($stmt_check, "i", $orders_id);
        mysqli_stmt_execute($stmt_check);
        mysqli_stmt_bind_result($stmt_check, $current_status);
        mysqli_stmt_fetch($stmt_check);
        mysqli_stmt_close($stmt_check);

        // Nếu trạng thái hiện tại khác với trạng thái mới, thực hiện cập nhật
        if ($current_status != $status) {
            $sql_update = "UPDATE orders SET status = ?, admins_id = ? WHERE orders_id = ?";
            $stmt = mysqli_prepare($conn, $sql_update);
            mysqli_stmt_bind_param($stmt, "sii", $status, $user_id, $orders_id);
            
            if (mysqli_stmt_execute($stmt)) {
                // Thành công
                echo "Đã cập nhật đơn hàng #$orders_id thành công.";
            } else {
                // Xử lý lỗi
                echo "Lỗi khi cập nhật đơn hàng #$orders_id: " . mysqli_stmt_error($stmt);
            }
            
            mysqli_stmt_close($stmt);
        }
    }
}

mysqli_close($conn);
header("Location: lietkedonhang.php");
exit();
?>
