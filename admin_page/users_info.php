<?php include("includes/header.php"); ?>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>

<div>
    <?php
    require("db/conn.php");
    if (isset($_GET['users_id'])) {
        $id = $_GET['users_id'];
        $sql_str = "SELECT users_id, username, fullname, phone 
                    FROM users
                    WHERE users_id = $id";
        $result = mysqli_query($conn, $sql_str);
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<h3>Thông tin khách hàng</h3>";   
            echo '<div class="card shadow mb-4">';
            echo ' <div class="card-header py-3">';
            echo '      <h6 class="m-0 font-weight-bold text-primary">Thông tin chi tiết khách hàng</h6>';
            echo '   </div>';
            echo '  <div class="card-body">';
            echo '    <div class="table-responsive">';
            echo '           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
            echo '               <thead>';
            echo '                   <tr>';
            echo '                       <th>Mã khách hàng</th>';
            echo '                       <th>Username</th>';
            echo '                       <th>Fullname</th>';
            echo '                       <th>Số điện thoại</th>';
            echo '                   </tr>';
            echo '               </thead>';
            echo '               <tbody>';
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo '                   <tr>';
                echo '                       <td>' . htmlspecialchars($row['users_id']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['username']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['fullname']) . '</td>';
                echo '                       <td>' . htmlspecialchars($row['phone']) . '</td>';
                echo '                   </tr>';
            }

            echo '               </tbody>';
            echo '           </table>';
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
