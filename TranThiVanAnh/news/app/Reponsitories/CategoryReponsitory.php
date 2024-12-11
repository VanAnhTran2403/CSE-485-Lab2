<?php

include_once APP_ROOT . "/app/Models/Category.php";
include_once APP_ROOT ."/app/ApplicationDBContext/MySql.php";


class CategoryReponsitory{
    private PDO $_context;
    private $model;
    private string $_tableName;
    public function __construct(PDO $context){
        $this->_context = $context;
        $this->model = new Category();
        $this->_tableName = $this->model->getTableName();
    }

    public function getAll() : array{
        $stmt = $this->_context->prepare("select * from " . $this->_tableName);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,"Category");
        if($result == null){
            return [];
        }
        return $result;
    }

    public function getById($id){
        $stmt = $this->_context->prepare("select * from {$this->_tableName} where id = :id");
        $stmt->bindValue(":id", $id. PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function create(Category $category){
        $stmt = $this->_context->prepare("insert into :tableName values (:name)");
        $stmt->bindValue(":tableName", $this->_tableName);
        $stmt->bindValue(":name", $category->getName());
        $result = $stmt->execute();
        $lastId = $this->_context->lastInsertId();
        
        if($result){
            $category->id = $lastId;
            return $category;
        }
        else{
            return null;
        }
    }

    public function update($id, Category $category){
        if($id != $category->id){
            return false;
        }

        $stmt = $this->_context->prepare("update :tableName 
                                        set name = :name
                                        where id = :id");
        $stmt->bindValue(":tableName", $this->_tableName);
        $stmt->bindValue(":name", $category->getName());
        $stmt->bindValue(":id", $id);

        return $stmt->execute();

    }

    public function delete($id){
        $stmt = $this->_context->prepare("delete from :tableName where id = :id");
        $stmt->bindValue(":tableName", $this->_tableName);
        $stmt->bindValue(":id", $id);

        $stmt->execute();

        return $stmt->rowCount();
    }
}


?>