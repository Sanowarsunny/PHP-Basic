<?php

abstract class User{
    public abstract function getName();
    public function display(){
        echo "Hello miss {$this->name}";
    }
}

class Student extends User{

   public $name = "sunny";

    public function getName():string
    {
        return $this->name;
    }

}

$stu = new Student();
$stu->getName();
$stu->display();

?>