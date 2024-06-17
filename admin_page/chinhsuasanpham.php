<?php include("includes/header.php"); ?>

<?php require('db/conn.php'); 
$product_id = $_GET['products_id']; // ví dụ
$sql = "SELECT * FROM products WHERE products_id = $product_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<div>
    <h3>Chỉnh sửa sản phẩm</h3>   
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
                        <h1 class="h4 text-gray-900 mb-4">Chỉnh sửa sản phảm</h1>
                    </div>
                    <form class="user" method="post" action="edit_product.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm" value="<?php echo $row['name']; ?>" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="price" name="price" placeholder="Giá" value ="<?php echo $row['price']; ?>"  required>
                             </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="description" name="description" placeholder = "Mô tả" value = "<?php echo $row['description']; ?>" required>
                             </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" id="image" name="image" value = "<?php echo $row['image']; ?>"  required>
                                </div>
                        </div>
    
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Tạo mới
                        </button>
                </form>
                </div>
            </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>