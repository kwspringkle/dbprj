   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <img src = "img/logo.png" class="img-fluid" alt="Responsive image">
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <span>Trang chủ</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="../user_page/frontend/index.php">
        <span>Trang users</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Quản lý
</div>

<!-- Mục Sản phẩm -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
        aria-expanded="false" aria-controls="collapseProduct">
        <span>Sản phẩm</span>
    </a>
    <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Các chức năng:</h6>
            <a class="collapse-item" href="lietkesanpham.php">Chỉnh sửa</a>
            <a class="collapse-item" href="themmoisanpham.php">Thêm mới</a>
        </div>
    </div>
</li>

<!-- Mục Đơn hàng -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
        aria-expanded="false" aria-controls="collapseOrders">
        <span>Đơn hàng</span>
    </a>
    <div id="collapseOrders" class="collapse" aria-labelledby="headingOrders" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Các chức năng:</h6>
            <a class="collapse-item" href="lietkedonhang.php">Duyệt đơn hàng</a>
        </div>
    </div>
</li>

<!-- Mục Blog -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
        aria-expanded="false" aria-controls="collapseBlog">
        <span>Blog</span>
    </a>
    <div id="collapseBlog" class="collapse" aria-labelledby="headingBlog" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Các chức năng:</h6>
            <a class="collapse-item" href="lietkeblog.php">Chỉnh sửa</a>
            <a class="collapse-item" href="themmoiblog.php">Thêm blog</a>
        </div>
    </div>
</li>

<!-- Mục Người dùng -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
        aria-expanded="false" aria-controls="collapseUsers">
        <span>Người dùng</span>
    </a>
    <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Các chức năng:</h6>
            <a class="collapse-item" href="lietkeadmin.php">Danh sách admin</a>
            <a class="collapse-item" href="lietkeusers.php">Danh sách users</a>
            <a class="collapse-item" href="themadmin.php">Thêm admin</a>
        </div>
    </div>
</li>

<!-- Mục Tin nhắn -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMessages"
        aria-expanded="false" aria-controls="collapseMessages">
        <span>Tin nhắn</span>
    </a>
    <div id="collapseMessages" class="collapse" aria-labelledby="headingMessages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Các chức năng:</h6>
            <a class="collapse-item" href="lietketinnhan.php">Xem tin nhắn</a>
        </div>
    </div>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->