<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'doan1';
    private $pdo;

    public function __construct() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }

    // Thêm các phương thức khác của lớp Database nếu cần
}

?>
