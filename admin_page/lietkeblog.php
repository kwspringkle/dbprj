<?php include("includes/header.php"); ?>

<style>
    .table-responsive {
    overflow-x: auto;
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require("db/conn.php");
                        $sql_str = "select b.*
                        from blog_posts b";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($row['blog_id']) ?></td>
                            <td><?= htmlspecialchars($row['title']) ?></td>
                            <td><?= htmlspecialchars($row['content']) ?></td>
                            <td><?= htmlspecialchars($row['created_at']) ?></td>
                            <td><img src="<?= $row['image'] ?>" width="100" height="100"></td>
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