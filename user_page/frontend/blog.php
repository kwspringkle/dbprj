<?php include("header.php"); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

<style>
.blog_img {
  width: 100%;
  height: 200px; /* Chiều cao cố định, có thể điều chỉnh theo nhu cầu */
  overflow: hidden; /* Ẩn phần hình ảnh vượt ra ngoài */
}

.blog_img img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Đảm bảo hình ảnh được căn chỉnh và bao phủ toàn bộ khung */
}

.bold-title {
  font-family: 'Roboto', sans-serif; /* Đặt font chữ cho tiêu đề */
  font-weight: bold; /* Làm chữ in đậm */
}

.open-sans {
  font-family: "Open Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
  font-variation-settings: "wdth" 100;
  font-size: 1.5em; /* Tăng kích thước font cho tiêu đề */
  margin-bottom: 10px; /* Thêm khoảng cách dưới tiêu đề */
}

.prep_text {
  font-size: 0.9em; /* Giảm kích thước font cho ngày tạo */
  color: #666; /* Màu chữ nhẹ hơn cho ngày tạo */
  margin-top: -5px; /* Giảm khoảng cách trên cho ngày tạo */
}

.blog_box {
  padding: 15px; /* Thêm padding vào blog box */
  border-radius: 5px; /* Thêm bo góc */
}

.blog_content {
  padding: 10px; /* Thêm padding vào phần nội dung */
}

.read_bt {
  margin-top: 15px; /* Thêm khoảng cách phía trên cho nút đọc thêm */
}
</style>

<!-- blog section start -->
<div class="blog_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="about_taital">Our Blog</h1>
        <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
      </div>
    </div>
    <div class="blog_section_2">
      <div class="row">
        <?php
        require("connectdb.php");
        $sql_str = "SELECT * FROM blog_posts";
        $result = mysqli_query($conn, $sql_str);
        ?>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-6 mb-4">
          <div class="blog_box">
            <div class="blog_img">
              <img src="<?php echo $row['image']; ?>" class="img-fixed" alt="<?php echo $row['title']; ?>">
            </div>
            <div class="blog_content">
              <h4 class="open-sans"><?php echo $row['title']; ?></h4>
              <h6 class="prep_text"><?php echo $row['created_at']; ?></h6>
            </div>
            <div class="read_bt"><a href="blog_chitiet.php?blog_id=<?php echo $row['blog_id']; ?>">Read More</a></div>

          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>
