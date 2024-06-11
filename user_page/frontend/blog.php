<?php include("header.php"); ?>
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
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="<?php echo $row['image']; ?>" ></div>
                        <h4><?php echo $row['title']; ?></h4>
                        <h4 class="prep_text"><?php echo $row['create_time']; ?></h4>
                     </div>
                     <div class="read_bt"><a href="blog_chitiet.php?id=<?php echo $row['id']; ?>">Read More</a></div>
                  </div>
                <?php
                    }
                ?>
               </div>
            </div>
         </div>
      </div>
<?php include("footer.php"); ?>
