<?php

if(isset($_POST["submit"])){

    //grabbing data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //instance SignupContr class
    include"../classes/dbh.classes.php";
    include"../classes/signup.classes.php";
    include"../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);

    //running error handlers and user signup
    $signup->signupUser();

    //going to back to front page
    header("location: ../index.php?error=none");


}