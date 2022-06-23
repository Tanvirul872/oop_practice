<?php

class Student{

    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function output(){
        echo 'My name is '.$this->name ;
    }

}

$std = new Student('Murad');
$std->output();


?>









