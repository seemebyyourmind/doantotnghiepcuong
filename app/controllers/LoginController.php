<?php

require_once __DIR__ . '/../models/UserModel.php';



class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Kiểm tra thông tin đăng nhập của người dùng
            $user = $this->userModel->checkLogin($phone, $password);

            if ($user) {
                // Đăng nhập thành công, chuyển hướng đến trang chủ
                header('Location: ../views/home.php');
                exit();
            } else {
                // Đăng nhập không thành công, hiển thị thông báo lỗi trên cùng trang
                echo "<script>alert('Số điện thoại hoặc mật khẩu không đúng!');</script>";
            }
        }
    }
}

// Tạo một thể hiện của LoginController và gọi phương thức login()
$loginController = new LoginController();
$loginController->login();
?>
