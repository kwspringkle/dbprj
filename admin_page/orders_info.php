<?php include("includes/header.php"); ?>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>

<div>
    <?php
    require("db/conn.php");
    if (isset($_GET['orders_id'])) {
        $id = $_GET['orders_id'];
        $sql_str = "SELECT order_detail.*, products.name, products.price FROM order_detail 
                    JOIN products ON order_detail.products_id = products.products_id
                    WHERE order_detail.orders_id = $id";
        $result = mysqli_query($conn, $sql_str);
        if ($result && mysqli_num_rows($result) > 0) {
            $total_price = 0;
            echo "<h3>Chi tiết đơn hàng</h3>";   
            echo '<div class="card shadow mb-4">';
            echo ' <div class="card-header py-3">';
            echo '      <h6 class="m-0 font-weight-bold text-primary">Chi tiết đơn hàng</h6>';
            echo '   </div>';
            echo '  <div class="card-body">';
            echo '    <div class="table-responsive">';
            echo '           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
            echo '               <thead>';
            echo '                   <tr>';
            echo '                       <th>Mã sản phẩm</th>';
            echo '                       <th>Tên sản phẩm</th>';
            echo '                       <th>Giá</th>';
            echo '                       <th>Số lượng</th>';
            echo '                   </tr>';
            echo '               </thead>';
            echo '               <tbody>';
            
            while ($row = mysqli_fetch_assoc($result)) {
                $item_total = $row['price'] * $row['quantity'];
                $total_price += $item_total;
                echo '                   <tr>';
                echo '                       <td>' . htmlspecialchars($row['products_id']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['name']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['price']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['quantity']) . '</td>';
                echo '                   </tr>';
            }

            echo '               </tbody>';
            echo '           </table>';
            echo '           <h6>Tổng giá trị đơn hàng: ' . htmlspecialchars($total_price) . ' VND</h6>';
            echo '       </div>';
            echo '   </div>';
            echo '</div>';
        } else {
            echo "<p>Orders' details not found.</p>";
        }
    } else {
        echo "<p>No orders ID provided.</p>";
    }
    ?>
</div>

<?php include("includes/footer.php"); ?>
