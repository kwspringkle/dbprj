# Project Thực hành CSDL - IT3290 - Mã lớp: 147785

## Chủ đề: Website cửa hàng bán cafe

### Nhóm 2_Thành viên nhóm:
- Trương Ngọc Mai
- Trần Khánh Quỳnh
- Bùi Ý Nhi
- Hà Trung Chiến

### Cách chạy:
-Sử dụng XAMPP

Cài xampp, clone repo và đưa project vào folder htdocs. Start Apache và MySQL
-->Mở web browser: `http://localhost`

Thêm database (lưu trong thư mục database) vào phpmyadmin, đặt tên database là coffeeshop để có thể kết nối với web.

### Clone repo về máy:
```sh
git clone https://github.com/kwspringkle/dbprj
```

### Commit:
```sh
git add .
git commit -m "message"
git push
```

### Đồng bộ về máy:
```sh
git pull
```

### Trang admin:
Đăng nhập trang login, đăng nhập thành công thì sẽ chuyển đến trang index
```sh
http://localhost/dbprj/admin_page/login.php
```
Tài khoản superadmin:
```sh
username: superadmin;
password: 1234567
```
Tài khoản admin:
```sh
username: admin@dozecafe.com;
password: 123456
```

### Trang user:
index:
```sh
http://localhost/dbprj/user_page/frontend/index.php
```

Tài khoản user demo: 
```sh
username: customer1@gmail.com;
password: 12345678;
phone: 0912345678;
```
