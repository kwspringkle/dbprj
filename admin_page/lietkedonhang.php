<?php include("includes/header.php"); ?>
<style>
    .table-responsive {
        overflow-x: auto;
    }
    .btn-margin {
        margin-top: 10px; /* Khoảng cách dưới nút Update */
        margin-bottom: 20px;
    }
    .order-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div>
    <h3>Danh sách đơn hàng</h3>   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
        </div>
        <div class="card-body">
            <form action="update_order_status.php" method="POST">
            <button type="submit" class="btn btn-danger btn-margin">Update All</button>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Mã khách hàng</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Thời gian</th>
                                <th>Hình thức thanh toán</th>
                                <th>Mã địa chỉ</th>
                                <th>Người duyệt</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require("db/conn.php");
                            $sql_str = "SELECT * from orders";
                            $result = mysqli_query($conn, $sql_str);
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td>
                                    <a href='orders_info.php?orders_id=<?= htmlspecialchars($row['orders_id']) ?>'>
                                        <?= htmlspecialchars($row['orders_id']) ?>
                                    </a>
                                </td>
                                <td>
                                    <a href='users_info.php?users_id=<?= htmlspecialchars($row['users_id']) ?>'>
                                        <?= htmlspecialchars($row['users_id']) ?>
                                    </a>
                                </td>
                                <td>
                                    <select name="status[<?= $row['orders_id'] ?>]" class="form-control">
                                        <option value="processing" <?= ($row['status'] == 'processing') ? 'selected' : '' ?>>Processing</option>
                                        <option value="finished" <?= ($row['status'] == 'finished') ? 'selected' : '' ?>>Finished</option>
                                        <option value="delivered" <?= ($row['status'] == 'delivered') ? 'selected' : '' ?>>Delivered</option>
                                    </select>
                                </td>
                                <td><?= htmlspecialchars($row['created_at']) ?></td>
                                <td><?= htmlspecialchars($row['payment_method']) ?></td>
                                <td><?= htmlspecialchars($row['address']) ?></td>
                                <td>
                                    <a href='nguoiduyet.php?admins_id=<?= htmlspecialchars($row['admins_id']) ?>'>
                                        <?= htmlspecialchars($row['admins_id']) ?>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?> 
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>
