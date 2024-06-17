<?php
include("includes/header.php");
require('db/conn.php');

// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem các trường cần thiết đã được điền đầy đủ hay chưa
    if (isset($_POST['title']) && isset($_POST['content'])) {
        $blog_id = $_GET['blog_id']; // Lấy blog_id từ tham số GET
        $title = $_POST['title'];
        $content = $_POST['content'];
        
        // Xử lý file ảnh nếu có
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image']['name'];
            $target_dir = "uploads/"; // Thư mục lưu trữ file ảnh
            $target_file = $target_dir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        } else {
            // Nếu không có file ảnh mới, giữ nguyên ảnh cũ
            $sql_image = "SELECT image FROM blog_posts WHERE blog_id = ?";
            $stmt_image = $conn->prepare($sql_image);
            $stmt_image->bind_param('i', $blog_id);
            $stmt_image->execute();
            $result_image = $stmt_image->get_result();
            $row_image = $result_image->fetch_assoc();
            $image = $row_image['image'];
            $stmt_image->close();
        }

        // Cập nhật dữ liệu vào bảng blog_posts
        $sql_update = "UPDATE blog_posts SET title = ?, content = ?, image = ? WHERE blog_id = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param('sssi', $title, $content, $image, $blog_id);
        
        if ($stmt_update->execute()) {
            echo "<div class='alert alert-success' role='alert'>Cập nhật thành công!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Cập nhật thất bại. Vui lòng thử lại sau.</div>";
        }
        
        $stmt_update->close();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Vui lòng điền đầy đủ các trường bắt buộc.</div>";
    }
}

// Lấy dữ liệu blog hiện tại để hiển thị trong form
if (isset($_GET['blog_id'])) {
    $blog_id = $_GET['blog_id'];

    $sql = "SELECT * FROM blog_posts WHERE blog_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div class='alert alert-danger' role='alert'>Không tìm thấy bài viết.</div>";
    }
    $stmt->close();
}
?>

<div>
    <h3>Chỉnh sửa blog</h3>
</div>

<style>
    #content {
        height: 100px; /* Example height; adjust as needed */
    }
</style>

<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-2">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="p-4">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Chỉnh sửa blog</h1>
                        </div>
                        <form class="user" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . "?blog_id=" . $blog_id; ?>" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề" value="<?php echo isset($row['title']) ? htmlspecialchars($row['title']) : ''; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="content" name="content" placeholder="Nội dung" required><?php echo isset($row['content']) ? htmlspecialchars($row['content']) : ''; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="file" class="form-control-file" id="image" name="image">
                                    <small class="form-text text-muted">Chọn file ảnh mới nếu muốn thay đổi.</small>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Cập nhật
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
