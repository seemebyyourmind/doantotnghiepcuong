<?php
$servername = "localhost";  // Địa chỉ MySQL Server
$username = "root";         // Tên người dùng MySQL
$password = "";             // Mật khẩu MySQL
$database = "doan1"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
   
}

echo "Kết nối thành công";

// Các thao tác với cơ sở dữ liệu ở đây

// Đóng kết nối
// mysqli_close($conn);
?>