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
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        require("db/conn.php");
                        $sql_str = "select admins_id, username, fullname from admins ;";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= htmlspecialchars($row['admins_id']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['fullname']) ?></td>
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