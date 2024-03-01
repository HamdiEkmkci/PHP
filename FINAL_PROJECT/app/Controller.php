<?php

class Controller{

    protected $pdo;
    protected function view($filename = '' , $data = []){
        require_once '../view/'.$filename.'.php';
    }

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=php_course','root','');
        
    }
}