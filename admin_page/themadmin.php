<?php include("includes/header.php"); ?>

<div>
    <h3>Thêm admin</h3>   
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
                        <h1 class="h4 text-gray-900 mb-4">Thêm admin</h1>
                    </div>
                    <form class="user" method="post" action="add_admin.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ tên" required>
                             </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="password" name="password" placeholder = "Mật khẩu" required>
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