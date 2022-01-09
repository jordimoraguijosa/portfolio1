<?php

class PageController {


    public function __construct(){
        $this->Init();
    }

    public function Init(){
        require_once 'views/Page.php';
    }


}