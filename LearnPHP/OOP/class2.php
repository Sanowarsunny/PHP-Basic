<?php

    class Vehicle{

        public  $name = "Corola";
        public $color = "Blue";
        public $price;

        function set(string $name, string $color, int $price = 300):void{
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        function display():void{
            echo "The car name is: {$this->name}<br>";
            echo "The car color is: {$this->color}<br>";
            echo "The car price is: {$this->price}<br>";

        }

    }

    $vehicle1 = new Vehicle();

    $vehicle1->display();
    echo"<br>";

    $vehicle1->set("BMW","RED",32435435);
    $vehicle1->display();
    echo"<br>";
    $vehicle1->set("BMW","Green");
    $vehicle1->display();


    $i =1;

    echo $i++;
    echo --$i;
    echo ++$i;
    echo $i--;
    //echo --$i;

    echo"<br>";
