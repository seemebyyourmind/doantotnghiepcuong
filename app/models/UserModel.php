<?php

class UserModel {
    private $db;

    public function __construct() {
        // Kết nối đến cơ sở dữ liệu ở đây
        require_once __DIR__ . '/../db_connect.php';
        $this->db = new Database();
    }

    public function checkLogin($phone, $password) {
        $sql = "SELECT * FROM users WHERE phone = :phone AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function registerUser($name, $phone, $password) {
        $sql = "INSERT INTO users (name, phone, password) VALUES (:name, :phone, :password)";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return true; // Đăng ký thành công
        } catch (PDOException $e) {
            // Xử lý lỗi
            echo "Đăng ký không thành công: " . $e->getMessage();
            return false; // Đăng ký không thành công
        }
    }
}

?>
