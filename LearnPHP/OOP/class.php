<?php

class Vehicle{

    public $color;
    
    function setColor($color){
        $this->color = $color;
    }
    function getColor(){
        echo "Vehicle color is: {$this->color} <br>";
    }

    public function display(){
        echo "Welcome to learn PHP!!!{$this->color}<br>";
    }
}

$obj = new Vehicle();
$obj->color = "Bule";
$obj->display();

$obj->getColor();

?>