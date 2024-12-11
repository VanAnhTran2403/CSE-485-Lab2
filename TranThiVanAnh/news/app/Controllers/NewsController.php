<?php

include_once APP_ROOT . "/app/ApplicationDBContext/MySql.php";


include APP_ROOT . "/app/Reponsitories/NewsReponsitory.php";
include APP_ROOT . "/app/Controllers/BaseController.php";

class NewsController extends BaseController {
    private NewsReponsitory $newsReponsitory;
    private PDO $pdo;
    public function __construct() {
        parent::__construct();
        $pdo = MySql::getInstance()->getContext();
        $this->newsReponsitory = new NewsReponsitory($pdo);
    }

    public function index(){
        $categories = $this->newsReponsitory->getAll();
        // print_r($categories);
        $this->renderView("News/index.php", ["categories" => $categories]);
    }

    public function create(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $title = $_POST["title"];
            $content = $_POST["content"];
            $image = $_POST["image"];
            $category_id = $_POST["category_id"];
            $news = new News(null, $title, $content, $image, $category_id);
            $result = $this->newsReponsitory->create($news);
            if($result != null){
                $this->setStatus(200);
                $this->setMessage("Thêm mới thành công");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("news", "index");
            }
        }else{
            $this->setStatus(500);
            $this->setMessage("Thêm mới thất bại");
            $this->renderView("News/create.php");
        }
    }

    public function edit(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $this->redirect("news", "update");
        }
    }

    public function update(){
        if($_SERVER["REQUEST_METHOD"] == "PUT"){
            $id = $_POST["id"];
            $title = $_POST["title"];
            $content = $_POST["content"];
            $image = $_POST["image"];
            $category_id = $_POST["category_id"];
            $news = new News($id, $title, $content, $image, $category_id);
            $result = $this->newsReponsitory->update($id, $news);
            if($result){
                $this->setStatus(200);
                $this->setMessage("Cập nhật thành công");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("news", "index");
            }
            else{
                $this->setStatus(500);
                $this->setMessage("Cập nhật thất bại. Lỗi hệ thống");
                $this->renderView("News/update.php");
            }

        }
    }

    public function delete(){
        if($_SERVER["REQUEST_METHOD"] == "DELETE"){
            $id = $_POST["id"];
            $result = $this->newsReponsitory->delete($id);
            if($result > 0){
                $this->setStatus(200);
                $this->setMessage("Xóa thành công {$result} bản ghi");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("news", "index");
            }
            else{
                $this->setStatus(400);
                $this->setMessage("Xóa {$result} bản ghi");
                $this->renderView("News/index.php");
            }
        }
    }
}

?>