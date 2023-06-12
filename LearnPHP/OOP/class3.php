<?php

class Student{

    public $name;

    function setName($name){
        $this->name = $name;
    }

    function __construct($name)
    {
        echo "{$name} welcome to contructor class!!!";
    }
}

$stu = new Student("ksd");
$stu->setName("Mim");