<?php include("header.php"); ?>

<div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Blog Details</h1>
                  <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
               </div>
            </div>
            <?php
                    require("connectdb.php");
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $sql_str = "SELECT * FROM blog_posts WHERE id=$id";
                        $result = mysqli_query($conn, $sql_str);
                        if ($row = mysqli_fetch_assoc($result)) {
                            echo "<h1>" . $row['title'] . "</h1>";
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
