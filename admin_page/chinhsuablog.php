<?php include("includes/header.php"); ?>

<?php require('db/conn.php'); 
$blog_id = $_GET['blog_id']; // ví dụ
$sql = "SELECT * FROM blog_posts WHERE blog_id = $blog_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<div>
    <h3>Chỉnh sửa blog</h3>   
</div>
<style>
    #content{
        height: 100px;
    }
</style>
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-2">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <div class="p-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Chỉnh sửa blog</h1>
                    </div>
                    <form class="user" method="post" action="edit_blog.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Tiêu đề" value="<?php echo $row['title']; ?>" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="content" name="content" placeholder="Nội dung" value ="<?php echo $row['content']; ?>"  required>
                             </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" id="image" name="image" value = "<?php echo $row['image']; ?>"  required>
                                </div>
                        </div>
    
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Chỉnh sửa
                        </button>
                </form>
                </div>
            </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>