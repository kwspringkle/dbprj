<?php include("includes/header.php"); ?>

<style>
    .table-responsive {
    overflow-x: auto;
}

</style>
<div>
    <h3>Danh sách tin nhắn</h3>   
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách tin nhắn</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã tin nhắn</th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Nội dung</th>
                            <th>Thời gian gửi</th>
                        </tr>
                    <tbody>
                    <?php
                        require("db/conn.php");
                        $sql_str = "SELECT messages.id AS message_id, users.id AS user_id, users.fullname, messages.content, messages.sent_at 
                                    FROM messages 
                                    JOIN users ON users.id = messages.users_id 
                                    ORDER BY messages.id";
                        $result = mysqli_query($conn, $sql_str);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($row['message_id']) ?></td>
                        <td><?= htmlspecialchars($row['user_id']) ?></td>
                        <td><?= htmlspecialchars($row['fullname']) ?></td>
                        <td><?= htmlspecialchars($row['content']) ?></td>
                        <td><?= htmlspecialchars($row['sent_at']) ?></td>
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