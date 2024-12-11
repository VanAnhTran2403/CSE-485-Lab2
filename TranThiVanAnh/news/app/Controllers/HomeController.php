<?php
// news/app/Reponsitories/CategoryReponsitory.php
include APP_ROOT . "/app/Reponsitories/CategoryReponsitory.php";
include APP_ROOT . "/app/Controllers/BaseController.php";


class HomeController extends BaseController{
    
    public function index(){
        header("Location: {$this->baseUrl}/public/index.php?controller=news&action=index");
    }



}

?>