<?php
include("db/conn.php");
    $title = $_POST['title'];
    $content= $_POST['content'];

   $sql_str = "INSERT INTO blog_posts (title, content) VALUES ($title, $content)";
    mysqli_query($conn, $sql_str);
    header("location: index.php");
?>
