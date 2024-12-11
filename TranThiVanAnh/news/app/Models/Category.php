<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once APP_ROOT . "/app/Models/BaseModel.php";
include_once APP_ROOT . "/app/Commons/Validate.php";

class Category extends BaseModel implements Validate
{
    private string $name;

    public function __construct( $id = null, $name = "" ){
        $this->id = $id;
        $this->name = $name;
        $this->table = "categories";
    }
    public function getName(){
        return $this->name;
    }

    public function validate(){
        $this->errors["name"] = $this->validateName();
    }
    public function modelState(){
        if($this->getErrors() == null){
            return true;
        }
        return false;
    }

    public function validateName(){
        $listError = [];
        if( empty($this->name) ){
            $listError[] = "Name không được để trống";
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