<?php include("includes/header.php"); ?>
<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>

<div>
    <?php
    require("db/conn.php");
    
    // Validate and sanitize input
    if (isset($_GET['admins_id'])) {
        $id = intval($_GET['admins_id']); // Convert to integer to avoid SQL injection
        $sql_str = "SELECT admins_id, username, fullname FROM admins WHERE admins_id = ?";
        
        // Prepare statement
        $stmt = mysqli_prepare($conn, $sql_str);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        
        // Bind result variables
        mysqli_stmt_bind_result($stmt, $admins_id, $username, $fullname);
        
        // Fetch values
        mysqli_stmt_fetch($stmt);
        
        if ($admins_id) {
            // Display admin details
            echo "<h3>Chi tiết người duyệt</h3>";
            echo '<div class="card shadow mb-4">';
            echo ' <div class="card-header py-3">';
            echo '   </div>';
            echo '  <div class="card-body">';
            echo '    <div class="table-responsive">';
            echo '           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
            echo '               <thead>';
            echo '                   <tr>';
            echo '                       <th>ID</th>';
            echo '                       <th>Username</th>';
            echo '                       <th>Tên</th>';
            echo '                   </tr>';
            echo '               </thead>';
            echo '               <tbody>';
            
            echo '                   <tr>';
            echo '                       <td>' . htmlspecialchars($admins_id) . '</td>';
            echo '                       <td>' . htmlspecialchars($username) . '</td>';
            echo '                       <td>' . htmlspecialchars($fullname) . '</td>';
            echo '                   </tr>';
            
            echo '               </tbody>';
            echo '           </table>';
            echo '       </div>';
            echo '   </div>';
            echo '</div>';
        } else {
            echo "<p>Không tìm thấy thông tin người duyệt.</p>";
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
    } else {
        echo "<p>Không có mã người duyệt được cung cấp.</p>";
    }
    
    // Close connection
    mysqli_close($conn);
    ?>
</div>

<?php include("includes/footer.php"); ?>
