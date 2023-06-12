<?php

$conn =  new mysqli("localhost","root","","test");

if(!$conn){
    echo "Not Connected";
}