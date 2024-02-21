<?php

require_once __DIR__ . '/../models/UserModel.php';

class RegisterController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Thực hiện đăng ký người dùng
            $success = $this->userModel->registerUser($name, $phone, $password);

            if ($success) {
                // Đăng ký thành công, chuyển hướng đến trang đăng nhập hoặc trang chính
                header('Location: ../views/home.php');
                exit();
            } else {
                // Đăng ký không thành công, hiển thị thông báo lỗi
                echo "<script>alert('Đăng ký không thành công!');</script>";
            }
        }
    }
}

// Tạo một thể hiện của RegisterController và gọi phương thức register()
$registerController = new RegisterController();
$registerController->register();
?>
