<?php
class Database
{
    private static $instance = null; // Lưu trữ thể hiện duy nhất của Database
    private $connection;
    // Cấu hình cơ sở dữ liệu
    private $host = 'localhost';
    private $dbname = 'tlunews';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8mb4';

    // Constructor: Kết nối cơ sở dữ liệu
    private function __construct()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Kết nối cơ sở dữ liệu thất bại: ' . $e->getMessage());
        }
    }

    // Phương thức lấy thể hiện duy nhất của class
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Phương thức lấy kết nối cơ sở dữ liệu
    public function getConnection()
    {
        return $this->connection;
    }

    // Chặn clone để bảo toàn Singleton
    private function __clone() {}
//    private function __wakeup() {}
}
?>
