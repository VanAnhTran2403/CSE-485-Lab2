<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/TranThiVanAnh/news/app/Commons/Config.php";

abstract class BaseController{
    protected $status;
    protected $message;
    protected $baseUrl;
    protected $baseViewPath;
    protected $view;

    public function __construct(){
        $this->status = 200;
        $this->message = array();
        $this->baseUrl = DOMAIN;
        $this->baseViewPath = APP_ROOT . "/app/Views/";
    }

    public function setMessage($message){
        $this->message = $message;
    }

    public function getMessage(){
        return $this->message;
    }

    // public function getErrors(){
    //     return $this->errors;
    // }

    public function setStatus($status){
        $this->status = $status;
    }
    public function getStatus(){
        return $this->status;
    }

    protected function renderView($view, $data = array()){
        // echo "đây là value " . $this->baseViewPath;
        extract($data);

        include_once $this->baseViewPath . $view;
    }

    protected function redirect($controller, $action){
        header(header: "Location: {$this->baseUrl}/public/index.php?controller={$controller}&action={$action}");
    }


    protected function addToSession($data) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $_SESSION[$key] = $value;
            }
        } else {
            echo "Dữ liệu cần phải là một mảng!";
        }
    }
    
}

?>