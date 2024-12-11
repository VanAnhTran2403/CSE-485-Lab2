<?php

include_once APP_ROOT . "/app/Models/BaseModel.php";
include_once APP_ROOT . "/app/Commons/Validate.php";


class News extends BaseModel implements Validate {
    private $title;
    private $content;
    private $image;
    private $category_id;
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    public function __construct($id = null,$title = null,$content = null,
                    $image = null,$category_id = null){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->category_id = $category_id;
        $this->table = "news";
    }

    public function validate(){
        $this->errors["title"] = $this->validateTitle();
        $this->errors["content"] = $this->validateContent();
        $this->errors["category_id"] = $this->validateCategory_id();
    }

    public function modelState(){
        if($this->getErrors() == null){
            return true;
        }
        return false;
    }

    private function validateTitle(){
        $listError = array();
        if(empty($this->title)){
            $listError[] = "Title không được để trống";
        }
        return $listError;
    }

    private function validateContent(){
        $listError = array();
        if(empty($this->content)){
            $listError[] = "Content không được để trống";
        }
        return $listError;
    }

    private function validateCategory_id(){
        $listError = array();
        if(empty($this->category_id)){
            $listError[] = "Category_Id không thể null";
        }
        return $listError;
    }
    public function getErrors(){
        return $this->errors;
    }

    public function getTableName(){
        return $this->table;
    }


}


?>