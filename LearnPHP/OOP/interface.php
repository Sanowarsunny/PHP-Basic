<?php

    interface UserInterface{
        public function getName($name);
        public function display();
    }

    class User implements UserInterface{

        public $name;

        public function getName($name):string
        {
            return $this->name = $name;
        }

        public function display():void
        {
            echo "hello miss {$this->name}";
        }
    }


    $user1 = new User();
    $user1->getName("Mim");
    $user1->display();

?>