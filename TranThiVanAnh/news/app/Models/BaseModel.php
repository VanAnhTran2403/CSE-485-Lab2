<?php

abstract class BaseModel{
    protected $errors = array();
    protected $table = "";
    public $id;
    protected $create_at;
    protected $update_at;
    abstract public function getTableName();

    public function getCreateAt(){
        if($this->create_at == null){
            $this->create_at = new DateTime();
        }
        return $this->create_at;
    }

    public function getUpdateAt(){
        if($this->update_at == null){
            $this->update_at = new DateTime();
        }
        return $this->update_at;
    }


    // protected $delete_at;
}

?>