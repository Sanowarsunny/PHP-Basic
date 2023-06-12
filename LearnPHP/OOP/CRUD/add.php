<?php
    include"db_conn.php";

    if(isset($_POST['save'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile= $_POST['mobile'];

        $sql = "INSERT INTO `curd`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
        $res = mysqli_query($conn,$sql);

        if($res){
            header("Location: index.php?msg=New Record created Successfully!!!");
        }else{
            echo "Failed: ".mysqli_error($conn);
        }
    }

?>