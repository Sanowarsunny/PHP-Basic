<?php
    include"db_conn.php";
    $id = $_GET['id'];

        $sql = "DELETE FROM `curd` WHERE id = $id";
        
        $res = mysqli_query($conn,$sql);

        if($res){
            header("Location: index.php?msg= Record Delete Successfully!!!");
        }else{
            echo "Failed: ".mysqli_error($conn);
        }

?>