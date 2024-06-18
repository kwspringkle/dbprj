<?php
include("header.php");
include("connectdb.php");

// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $name = $_POST['Your_Name'];
    $email = $_POST['Your_Email'];
    $phone = $_POST['Your_Phone'];
    $message = $_POST['Message'];

    // Kiểm tra xem email và phone có tồn tại trong bảng user không
    $sql_check_user = "SELECT users_id FROM users WHERE username = '$email' AND phone = '$phone' AND fullname='$name'";
    $result_check_user = $conn->query($sql_check_user);

    if ($result_check_user->num_rows > 0) {
        // Nếu tồn tại user, lấy users_id
        $row = $result_check_user->fetch_assoc();
        $users_id = $row['users_id'];

        // Chuẩn bị câu lệnh SQL để chèn dữ liệu vào bảng messages
        $sql_insert_message = "INSERT INTO messages (users_id, content, created_at) VALUES ('$users_id', '$message', NOW())";

        // Thực thi câu lệnh SQL và kiểm tra
        if ($conn->query($sql_insert_message) === TRUE) {
            echo "Feedback sent successfully";
        } else {
            echo "Lỗi: " . $sql_insert_message . "<br>" . $conn->error;
        }
    } else {
        echo "User information not found with the provided email and phone ";
    }
}
?>

<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">Get In Touch</h1>
                <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="mail_section_1">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="text" class="mail_text" placeholder="Your Name" name="Your_Name">
                            <input type="text" class="mail_text" placeholder="Your Email" name="Your_Email">
                            <input type="text" class="mail_text" placeholder="Your Phone" name="Your_Phone">
                            <textarea class="massage-bt" placeholder="Message" rows="5" name="Message"></textarea>
                            <div class="send_bt"><input type="submit" value="SEND"></div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
