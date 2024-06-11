<?php include("includes/header.php"); ?>

<div>
    <h3>Thêm mới sản phẩm</h3>   
</div>

<style>
    #description{
        height:100px;
    }
</style>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-2">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <div class="p-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm</h1>
                    </div>
                    <form class="user" method="post" action="add_product.php">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="description" name="description" placeholder="Mô tả sản phẩm" required>
                             </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="price" name="price" placeholder="Giá" required>
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

</div>
<?php include("includes/footer.php"); ?>
