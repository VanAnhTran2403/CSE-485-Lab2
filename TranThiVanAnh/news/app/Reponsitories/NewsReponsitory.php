<?php

include_once APP_ROOT . "/app/Models/News.php";



class NewsReponsitory{
    private PDO $_context;
    private $model;
    private string $_tableName;
    public function __construct(PDO $context){
        $this->_context = $context;
        $this->model = new News();
        $this->_tableName = $this->model->getTableName();
    }

    public function getAll(){
        $stmt = $this->_context->prepare("select * from " . $this->_tableName);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, News::class);
        return $result;
    }

    public function getById($id){
        $stmt = $this->_context->prepare("select * from {$this->_tableName} where id = :id");
        $stmt->bindValue(":id", $id. PDO::PARAM_INT);
        $stmt->execute();
        $result = new News();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function create(News $news){
        $stmt = $this->_context->prepare("insert into(title, content, image, category_id, create_at) :tableName 
                                        values (:title, :content, image, category_id)");
        $stmt->bindValue(":tableName", $this->_tableName);
        $stmt->bindValue(":title", $news->getTitle(), PDO::PARAM_STR);
        $stmt->bindValue(":content", $news->getContent());
        $stmt->bindValue(":image", $news->getImage());
        $stmt->bindValue(":category_id", $news->getCategoryId());
        $stmt->bindValue(":create_at", $news->getCreateAt());
        $result = $stmt->execute();
        $lastId = $this->_context->lastInsertId();
        
        if($result){
            $news->id = $lastId;
            return $news;
        }
        else{
            return null;
        }
    }

    public function update($id, News $news){
        if($id != $news->id){
            return -1;
        }

        $stmt = $this->_context->prepare("update :tableName 
                                        set title = :name ,
                                        set content = :content ,
                                        set image = :image ,
                                        set category_id = :category_id ,
                                        set update_at = :update_at ,
                                        where id = :id");
        $stmt->bindValue(":tableName", $this->_tableName);
        $stmt->bindValue(":title", $news->getTitle());
        $stmt->bindValue(":content", $news->getContent());
        $stmt->bindValue(":image", $news->getImage());
        $stmt->bindValue(":category_id", $news->getCategoryId());
        $stmt->bindValue(":update_at", $news->getUpdateAt());
        $stmt->bindValue(":id", value: $id);

        $stmt->execute();

        return $stmt->rowCount();

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