
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #74992e;">
        Event Management Dashboard
    </nav>
    <div class="container">
    
        <a href="../index.php" class="btn btn-dark mr-3" >Logout</a>

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
                        url: "../model/search_m.php",
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


<a href="add_v.php" class="btn btn-dark mb-3">Add Event</a>
<!-- error show -->
<?php 
        if(isset($_GET['msg'])){

            $msg = $_GET['msg'];
            
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>

    </div>
<!-- end -->
    <div class="container mt-3">
    <table class="table table-hover text-center ">
        <thead class="table-dark">
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Location</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../model/db_conn.php";
            $db = new DBConnection();
            $conn = $db->getConnection();

            $sql = "SELECT * FROM `events`";
            $res = mysqli_query($conn, $sql);
            $id_start = 1;
            while($row = mysqli_fetch_assoc($res)){
            ?>
            <tr>
               <td><?php echo $id_start?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['description']?></td>
                <td><?php echo "<img src = '../images/".$row['image']."' height='70px' width='60px'>"?></td>
                <td><?php echo $row['location_name']?></td>
                <td><?php echo $row['addresses']?></td>
                <td><?php echo $row['event_date']?></td>
                <td><?php echo $row['event_time']?></td>
                <td><?php echo $row['status']?></td> 
                <td>
                    <a href="edit_v.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="../model/delete_m.php?id=<?php echo $row['id'];?>" class="link-dark"> <i class="fa-solid fa-trash fs-5" ></i></a>
                </td>               
            </tr>
            <?php 
            $id_start++;
            }
            ?>
        </tbody>
    </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>