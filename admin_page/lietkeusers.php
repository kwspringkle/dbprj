<?php include("includes/header.php"); ?>

<style>
    .table-responsive {
    overflow-x: auto;
}

</style>
<div>
    <h3>Danh sách admin</h3>   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách admin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID người dùng</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                            <th>Số điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require("db/conn.php");
                        $sql_str = "SELECT users_id, username, fullname, phone FROM users;";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($row['users_id']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['fullname']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
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