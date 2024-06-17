<?php 
include("includes/header.php");?>


<div>
    <h3>Đổi mật khẩu</h3>   
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
                        <h1 class="h4 text-gray-900 mb-4">Đổi mật khẩu</h1>
                    </div>
                    <form class="user" method="post" action="change_password.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="old_pass" name="old_pass" placeholder="Nhập mật khẩu cũ" required>
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="new_pass" name="new_pass" placeholder="Nhập mật khẩu mới" required>
                             </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="confirm_new_pass" name="confirm_new_pass" placeholder="Nhập lại mật khẩu mới" required>
                             </div>
                        </div>
    
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Đổi mật khẩu
                        </button>
                </form>
                </div>
            </div>
    </div>
</div>

<?php include("includes/footer.php") ?>