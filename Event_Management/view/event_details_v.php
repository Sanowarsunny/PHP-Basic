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
    <title>Event Details</title>
    <link rel="stylesheet" type="text/css" href="../css/event_details.css">

</head>

<body>

    <div class="container">
        <h1>Event Details</h1>
        <div class="event-details">
            <div class="event-image">
                <img src="<?php echo "../images/".$row['image'];?>" alt="Event Image">
            </div>
            <div class="event-info">
                <h2>Title: <?php echo $row['title'] ?></h2>
                <p>Description: <?php echo $row['description'] ?></p>
                <p>Location: <?php echo $row['location_name'] ?></p>
                <p>Address: <?php echo $row['addresses'] ?></p>
                <p>Event Date: <?php echo $row['event_date'] ?></p>
                <p>Event Time: <?php echo $row['event_time'] ?></p>
<button class="btn btn-success mb-3"><a href="../index.php" style="text-decoration: none;  color:black; margin:30px; padding:30px">Back to Home</a> </button>

            </div>
        </div>
    </div>

</body>
</html>
