<?php

class Dbh{

    public function connect(){
        try{
            // $username = "root";
            // $password = "";
            // $dbh = new PDO('mysql:host=localhost;dbname=ooplogin',$username,$password);
            $dbh =  new mysqli("localhost","root","","test");
            
           return $dbh;
        }
        catch(PDOException $e){
            print "Error! : ". $e->getMessage()."</br>";
            die();
        }
    }
}