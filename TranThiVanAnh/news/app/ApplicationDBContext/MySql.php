<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once "{$_SERVER['DOCUMENT_ROOT']}/TranThiVanAnh/news/app/Commons/Config.php";


class MySql{
    private $context;
    public static $instance = null;
    private function __construct(){
        $host = HOST;
        $dbname = DBNAME;
        $port = PORT;
        $dns = "mysql:host={$host};dbname={$dbname};port={$port}";
        try{
            $this->context = new PDO($dns, USER_NAME, PASSWORD);
            $this->context->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công MySql.php<br>";
        }
        catch(PDOException $e){
            echo "Bị Lỗi kết nối\n" . $e->getMessage();
        }
    } 

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getContext(){
        return $this->context;
    }

    public function showSQL(PDOStatement $smtp){
        $smtp->debugDumpParams();
    }
}


?>