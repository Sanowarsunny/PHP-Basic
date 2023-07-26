
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" type="text/css" href="css/index_table.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #74992e;">
        Event Management
    </nav>

    <!-- live search start -->

<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="searchInput" placeholder="Live search"><br>
      <div class="col-sm-3" id="searchResults">
    </div>
    </div>
    
  </div>
</div>
<script>
        // Live search using AJAX
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var searchText = $(this).val();
                if (searchText !== "") {
                    $.ajax({
                        type: "POST",
                        url: "model/search_m.php",
                        data: { search: searchText },
                        success: function(response) {
                            $("#searchResults").html(response);
                        }
                    });
                } else {
                    $("#searchResults").empty();
                }
            });
        });
</script>

<!-- live search end -->
    
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table  class="table table-bordered table-striped mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Location</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "model/db_conn.php";
            $db = new DBConnection();
            $conn = $db->getConnection();

            $sql = "SELECT * FROM `events`";
            $res = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($res)){
                if($row['status'] == "active"){
            ?>
            <tr>
                <td><a href="view/event_details_v.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color:black;" ><?php echo $row['title']?></a></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo "<img src = 'images/".$row['image']."' height='70px' width='60px'>"?></td>
                <td><?php echo $row['location_name']?></td>
                <td><?php echo $row['addresses']?></td>
                <td><?php echo $row['event_date']?></td>
                <td><?php echo $row['event_time']?></td>
                <td><?php echo $row['status']?></td> 
                              
            </tr>
            <?php 
            }
        }
            ?>
        </tbody>
    </table>
    </div>
    
    <script src="script.js/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>