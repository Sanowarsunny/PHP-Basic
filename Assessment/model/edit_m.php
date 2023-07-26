<?php
    // Database connection
    require_once 'db_conn.php';
    $db = new DBConnection();
    $conn = $db->getConnection();
   

    if(isset($_POST['update'])){

         $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $location_name = $_POST['location_name'];
        $addresses = $_POST['addresses'];
        $event_date = $_POST['event_date'];
        $event_time = $_POST['event_time'];
        $status = $_POST['status'];
        // image variable for validation
        $image_new = $_FILES['image']['name'];
        $image_old = $_POST['image_old'];
        // $image_type = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        // $allow_type = array('png','jpg','jpeg');
        // $image_size = $_FILES['image']['size'];

        if($image_new != ''){
            $update_filename = $image_new;
        }
        else{
            $update_filename = $image_old;
        }

        if($_FILES['image']['name'] !=''){

            if(file_exists("../images/".$image_new)){
               // $fileName = $image_new;
                //echo "Image already exists".$fileName;
            header("Location: ../view/dashboard_v.php?msg=Image already exists");

            }
            else{
                $sql = "UPDATE `events` SET `title`='$title',`description`='$description',
                `image`='$update_filename',`location_name`='$location_name',`addresses`='$addresses',`event_date`='$event_date',
                `event_time`='$event_time',`status`='$status' WHERE `id`='$id'";
    
                $res = mysqli_query($conn,$sql);
            if($res){
                //if($_FILES['image']['name'] != ''){
                    move_uploaded_file($_FILES['image']['tmp_name'], "../images/".$_FILES['image']['name']);
                    unlink("../images/".$image_old);
                
                //}
    
                header("Location: ../view/dashboard_v.php?msg=Record Edit Success fully!!!");
            }else{
                header("Location: ../view/dashboard_v.php?msg=Record not edit Successfully!!!");
                }
            }
    }else{
        $sql = "UPDATE `events` SET `title`='$title',`description`='$description',
        `image`='$image_old',`location_name`='$location_name',`addresses`='$addresses',`event_date`='$event_date',
        `event_time`='$event_time',`status`='$status' WHERE `id`='$id'";

        $res = mysqli_query($conn,$sql);
    if($res){
        // if($_FILES['image']['name'] != ''){
        //     move_uploaded_file($_FILES['image']['tmp_name'], "../images/".$_FILES['image']['name']);
        //     unlink("../images/".$image_old);
        
        // }

        header("Location: ../view/dashboard_v.php?msg=Record Edit Success fully!!!");
    }else{
        header("Location: ../view/dashboard_v.php?msg=Record not edit Successfully!!!");
    }
}

        
        
    }
?>