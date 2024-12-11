<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once "{$_SERVER['DOCUMENT_ROOT']}/TranThiVanAnh/news/app/Commons/Config.php";


$controller = isset($_GET["controller"]) ? $_GET["controller"] :"Home";
$action = isset($_GET["action"]) ? $_GET["action"] :"index";

try{
    $controller = ucfirst(strtolower($controller)) . "Controller";
    $controllerFile = "{$_SERVER['DOCUMENT_ROOT']}/TranThiVanAnh/news/app/Controllers/{$controller}.php";
    // echo $controllerFile;
    if(!file_exists($controllerFile)){
        throw new Exception("Controller {$controller} not found");
    }
    include_once $controllerFile;
    $instanceController = new $controller();

    try{
        $action = strtolower($action);
        if(!method_exists($instanceController, $action)){
            throw new Exception("Action {$action} not found in {$controller}");
        }
        $instanceController->$action();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
catch(Exception $e){
    echo "Controller not found <br>".$e->getMessage();
}
?>