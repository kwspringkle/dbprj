<?php include("includes/header.php"); ?>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>
<div>
    <h3>Tất cả sản phẩm </h3>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="small-column">ID</th>
                            <th class="small-column">Tên</th>
                            <th class="small-column">Giá</th>
                            <th class="small-column">Mô tả</th>
                            <th class="small-column">Hình ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("db/conn.php");
                        $sql_str = "SELECT * FROM products ORDER BY products_id";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $row['products_id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $row['description'] ?></td>
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
