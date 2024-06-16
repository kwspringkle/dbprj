<?php
require("includes/header.php"); ?>

<style>
    .table-responsive {
    overflow-x: auto;
}

</style>
<div>
    <h3>Thông tin đăng nhập</h3>   
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID admin</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?php echo $_SESSION['user']['admins_id']; ?></td>
                            <td><?php echo $_SESSION['user']['username']; ?></td>
                            <td><?php echo $_SESSION['user']['fullname']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php require("includes/footer.php");?>
