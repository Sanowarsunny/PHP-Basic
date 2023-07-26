<?php
require_once '../model/db_conn.php';
$db = new DBConnection();
$conn = $db->getConnection();

$id = $_GET['id'];
 $sql = "SELECT * FROM `events` WHERE id = $id LIMIT 1";

 $res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Edit Event</h1>
        <form method="post" action="../model/edit_m.php" enctype="multipart/form-data">
            
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>">
            </div>
            <div class="form-group"> 
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4"><?php echo $row['description'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" >

                <input type="hidden" name="image_old" value="<?php echo $row['image'] ?>"><br>
                <img src="<?php echo "../images/".$row['image'];?>" height="80px" width="60px">
            </div>

            <div class="form-group">
                <label for="location">Event Location Name:</label>
                <input type="text" name="location_name" id="location_name" value="<?php echo $row['location_name'] ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="addresses" id="addresses" rows="3"><?php echo $row['addresses'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="event_date">Event Date:</label>
                <input type="date" name="event_date" id="event_date" value="<?php echo $row['event_date'] ?>">
            </div>
            <div class="form-group">
                <label for="event_time">Event Time:</label>
                <input type="time" name="event_time" id="event_time" value="<?php echo $row['event_time'] ?>">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="<?php echo $row['status'] ?>">Active</option>
                    <option value="<?php echo $row['status'] ?>">Inactive</option>
                </select>
            </div>
            <div class="form-group">
                <!-- <input type="submit" value="Save Event" class="btn"> -->
                <button type="submit" class="btn btn-success mb-3" name="update">Update</button>
                <button class="btn btn-danger mb-3" name="cancle" ><a href="dashboard_v.php" style="text-decoration: none; color:white;">Cancle</a> </button>

            </div>
        </form>
    </div>
</body>
</html>
