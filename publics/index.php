<?php
include '../app/config/database.php';
// Đóng kết nối

$request_uri = $_SERVER['REQUEST_URI'];

// Tách lấy phần path từ đường dẫn yêu cầu
$path = parse_url($request_uri, PHP_URL_PATH);
$trimmed_uri = str_replace('/doantotnghiepcuong/publics', '', $request_uri);

// Tách lấy phần path từ đường dẫn yêu cầu
$newpath = parse_url($trimmed_uri, PHP_URL_PATH);

// Xử lý đường dẫn và định tuyến đến trang tương ứng
switch ($newpath) {
    case '/':
        include '../app/views/home.php';
        break;
    case '/login':
        include '../app/views/login.php';
        break;
    case '/signup':
            include '../app/views/register.php';
            break;
    case '/cart':
        include '../app/views/CartController.php';
        break;
    case '/login':
        include '../app/views/AuthController.php';
        break;
    case '/admin/dashboard':
        include '../app/views/Admin/DashboardController.php';
        break;
    // Thêm các trang và xử lý đường dẫn khác tùy theo ứng dụng của bạn
    default:
        // Xử lý khi không có đường dẫn nào phù hợp
        echo '404 Not Found';
        break;
}

// Đóng kết nối cơ sở dữ liệu (nếu cần thiết)

mysqli_close($conn);
?>