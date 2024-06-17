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
                            <th class="small-column">Xóa/sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("db/conn.php");
                        $sql_str = "SELECT * FROM products";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?= $row['products_id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td><img src="<?= $row['image'] ?>" width="100" height="100"></td>
                                <td>
                                <a href="xoasanpham.php?products_id=<?= $row['products_id'] ?>" 
                                class="btn btn-danger btn-margin" onclick="return confirm('Do you want to delete this product?');">Del</a>

                                <a href="chinhsuasanpham.php?products_id=<?= $row['products_id'] ?>" class="btn btn-warning btn-margin">Edit</a>

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
