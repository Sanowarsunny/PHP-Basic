<?php

include("connection.php");

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend'])){

    $sql = "INSERT INTO `curd`(`name`, `email`, `mobile`) VALUES ('$nameSend','$emailSend','$mobileSend')";
    $res = mysqli_query($conn,$sql);

}