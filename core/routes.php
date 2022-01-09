<?php
    function newController($controller){
        $nameController = ucwords($controller)."Controller";
        $fileController="/controller/".ucwords($controller).".php";
        //echo $arxiuController;
        if (!is_file($fileController)){
            $fileController="controllers/Page.php";//principal
        }
        require_once $fileController;
        $ctl= new $nameController();
        return $ctl;
    }


    function newAction($controller,$action,$id=null){
        if (isset($action) && method_exists($controller, $action)){
            if ($id == null){
                $controller->$action();
            }else{
                $controller->$action($id);
            }
        }else{
            $controller->index();
        }
    }



?>