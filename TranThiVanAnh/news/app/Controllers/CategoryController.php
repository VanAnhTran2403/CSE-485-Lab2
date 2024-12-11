<?php

include_once APP_ROOT . "/app/ApplicationDBContext/MySql.php";


include APP_ROOT . "/app/Reponsitories/CategoryReponsitory.php";
include APP_ROOT . "/app/Controllers/BaseController.php";

class CategoryController extends BaseController {
    private CategoryReponsitory $categoryReponsitory;
    private PDO $pdo;
    public function __construct() {
        parent::__construct();
        $pdo = MySql::getInstance()->getContext();
        $this->categoryReponsitory = new CategoryReponsitory($pdo);
    }

    public function index(){
        $categories = $this->categoryReponsitory->getAll();
        // print_r($categories);
        $this->renderView("category/index.php", ["categories" => $categories]);
    }

    public function create(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $name = $_POST["name"];
            $category = new Category(null, $name);
            $result = $this->categoryReponsitory->create($category);
            if($result != null){
                $this->setStatus(200);
                $this->setMessage("Thêm mới thành công");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("category", "index");
            }
        }else{
            $this->setStatus(500);
            $this->setMessage("Thêm mới thất bại");
            $this->renderView("Category/create.php");
        }
    }

    public function edit(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $this->redirect("Category", "update");
        }
    }

    public function update(){
        if($_SERVER["REQUEST_METHOD"] == "PUT"){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $category = new category(null, $name);
            $result = $this->categoryReponsitory->update($id, $category);
            if($result){
                $this->setStatus(200);
                $this->setMessage("Cập nhật thành công");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("category", "index");
            }
            else{
                $this->setStatus(500);
                $this->setMessage("Cập nhật thất bại. Lỗi hệ thống");
                $this->renderView("Category/update.php");
            }

        }
    }

    public function delete(){
        if($_SERVER["REQUEST_METHOD"] == "DELETE"){
            $id = $_POST["id"];
            $result = $this->categoryReponsitory->delete($id);
            if($result > 0){
                $this->setStatus(200);
                $this->setMessage("Xóa thành công {$result} bản ghi");
                $dataSesstion = [
                    "status" => $this->getStatus(),
                    "message" => $this->getMessage()
                ];
                $this->addToSession($dataSesstion);
                $this->redirect("category", "index");
            }
            else{
                $this->setStatus(400);
                $this->setMessage("Xóa {$result} bản ghi");
                $this->renderView("Category/index.php");
            }
        }
    }
}

?>