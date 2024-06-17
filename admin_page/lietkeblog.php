<?php include("includes/header.php"); ?>

<style>
    .table-responsive {
        overflow-x: auto;
    }
    .btn-margin {
        display: inline-block; /* Hiển thị thành phần trên cùng một dòng */
        margin-bottom: 10px; /* Khoảng cách dọc giữa các nút */
    }
</style>

<div>
    <h3>Danh sách blog</h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách blog</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã blog</th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Thời gian tạo</th>
                            <th>Hình ảnh</th>
                            <th>Người tạo/sửa blog</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("db/conn.php");
                        $sql_str = "SELECT b.*, a.fullname AS creator_name
                                    FROM blog_posts b
                                    INNER JOIN admins a ON b.admins_id = a.admins_id";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?= htmlspecialchars($row['blog_id']) ?></td>
                                <td><?= htmlspecialchars($row['title']) ?></td>
                                <td><?= htmlspecialchars($row['content']) ?></td>
                                <td><?= htmlspecialchars($row['created_at']) ?></td>
                                <td><img src="<?= htmlspecialchars($row['image']) ?>" width="100" height="100"></td>
                                <td>
                                        <?= htmlspecialchars($row['creator_name']) ?>
                                </td>

                                <td>
                                    <a href="chinhsuablog.php?blog_id=<?= $row['blog_id'] ?>" class="btn btn-warning btn-margin">Edit</a>
                    
                                    <a href="xoablog.php?blog_id=<?= $row['blog_id'] ?>" class="btn btn-danger btn-margin">Del</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
