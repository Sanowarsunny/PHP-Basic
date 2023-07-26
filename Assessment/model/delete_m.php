<?php
    // Database connection
    require_once 'db_conn.php';
    $db = new DBConnection();
    $conn = $db->getConnection();

    $id = $_GET['id'];

    $img = "SELECT `image` FROM `events` WHERE `id`='$id'";
    $res1 = mysqli_query($conn,$img);
    $data = mysqli_fetch_array($res1);
    unlink("../images/".$data['image']);

    $sql = "DELETE FROM `events` WHERE `id`='$id'";
    $res = mysqli_query($conn,$sql);

    if($res){
        
        header("Location: ../view/dashboard_v.php?msg=Record delete successfully!!!");
    }else{
        header("Location: ../view/dashboard_v.php?msg=Record not delete successfully!!!");
    }
    
   
?>