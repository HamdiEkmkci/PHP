<?php

require_once '../app/Controller.php';
require_once '../model/Student.php';

class TestController extends Controller{

    public function show(){
        $student = new Student($this->pdo);
        $student->store([
            'name' => 'marry',
            `lname` => `doe`,
            `age` => `30`
        ]);
        $this->view("test",['name' =>'hamdi']);
    }

}


