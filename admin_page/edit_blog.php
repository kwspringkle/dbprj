<?php
include("db/conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);

    // Get admins_id (assuming it's stored in session)
    session_start();
    $admins_id = $_SESSION['user']['admins_id']; // Ensure that you have started the session and admins_id is set

    // File upload handling
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    $upload_directory = '../uploads/';
    $upload_path = $upload_directory . basename($file_name);

    // Create uploads directory if it doesn't exist
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true); // Creates the directory recursively with full permissions
    }

    // Check if file was uploaded successfully
    if (move_uploaded_file($file_tmp, $upload_path)) {
        // File uploaded successfully, proceed with database insertion
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO blog_posts (title, content, image, admins_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $content, $upload_path, $admins_id);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "Sửa blog thành công";
            header("Location: lietkeblog.php");
            exit();
        } else {
            echo "Lỗi khi sửa blog: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Lỗi khi tải lên file ảnh";
    }
}
?>
