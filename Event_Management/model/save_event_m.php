<?php
    // Database connection
    require_once 'db_conn.php';
    $db = new DBConnection();
    $conn = $db->getConnection();


    if(isset($_POST['save_event'])){


        $title = $_POST['title'];
        $description = $_POST['description'];

        // image variable for validation
        $target = "../images/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];
        $image_type = strtolower(pathinfo($image,PATHINFO_EXTENSION));
        $allow_type = array('png','jpg','jpeg');
        $image_size = $_FILES['image']['size'];


        if(file_exists("../images/".$image)){
            header("Location: ../view/dashboard_v.php?msg=Image already exists!!!");
            
        }
        else{
            if(in_array($image_type,$allow_type)){
                if($image_size <= 5000000){
                    move_uploaded_file($_FILES['image']['tmp_name'], $target);
                }else{
                    //echo "Image allow up to 5 mb";
                header("Location: ../view/dashboard_v.php?msg= Not more than 5mb for image");
    
                }
            }
            else{
                //echo "Only png,jpg and jpeg allow";
                header("Location: ../view/dashboard_v.php?msg=only allow  png,jpg and jpeg ");
    
            }
    
            $location_name = $_POST['location_name'];
            $addresses = $_POST['addresses'];
            $event_date = $_POST['event_date'];
            $event_time = $_POST['event_time'];
            $status = $_POST['status'];
    
            //$sql = "INSERT INTO `curd`(`name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
            $sql = " INSERT INTO `events`(`title`, `description`, `image`, `location_name`, `addresses`, `event_date`, `event_time`, `status`) 
                    VALUES ('$title','$description','$image','$location_name','$addresses','$event_date','$event_time','$status')";
    
            $res = mysqli_query($conn,$sql);
    
    
            // if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            //     $msg = "Image uploaded Successfully";
            // }else{
            //     $msg = "There was a problem uploading image";
            // }
    
            if($res){
                header("Location: ../view/dashboard_v.php?msg=New Record created Successfully!!!");
            }else{
                echo "Failed: ".mysqli_error($conn);
            }
        }
        
    }

?>