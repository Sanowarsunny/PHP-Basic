<?php

    class Student{

        public static $name = "Sunny";

        public function display(){
            echo Student::$name;
            echo self::$name = "Rahim";
        }
    }

    echo Student::$name;

    $stu = new Student();
    $stu->display();
?>