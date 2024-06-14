<?php include("header.php"); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
<style>
   .blog_section {
      font-family: 'Poppins', sans-serif; /* Đặt font chữ chung cho trang */
   }
   .open-sans {
      font-family: "Open Sans", sans-serif;
      font-weight: 700;
      font-style: normal;
      font-size: 2em; /* Tăng kích thước font cho tiêu đề */
      margin-bottom: 10px; /* Thêm khoảng cách dưới tiêu đề */
   }
   .bulit_icon img {
      width: 50px; /* Đặt kích thước cho biểu tượng */
      height: auto; /* Đảm bảo chiều cao tự động điều chỉnh */
   }
</style>

<div class="blog_section layout_padding">
   <div class="container">
      <?php
         require("connectdb.php");
         if (isset($_GET['blog_id'])) {
            $id = $_GET['blog_id'];
            $sql_str = "SELECT * FROM blog_posts WHERE blog_id = $id";
            $result = mysqli_query($conn, $sql_str);
            if ($row = mysqli_fetch_assoc($result)) {
               echo '<div class = "col-md-12">';
               echo "<h1 class='open-sans'>" . $row['title'] . "</h1>";
               echo "<div class='bulit_icon'><img src='images/bulit-icon.png'></div>";
               echo '</div>';
               echo "<img src='" . $row['image'] . "' alt='" . $row['title'] . "'>";
               echo "<p>" . $row['content'] . "</p>";
            } else {
               echo "<p>Post not found.</p>";
            }
         } else {
            echo "<p>No post ID provided.</p>";
         }
      ?>
   </div>
</div>

<?php include("footer.php"); ?>
