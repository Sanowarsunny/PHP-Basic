<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #74992e;">
        PHP CRUD Operation
    </nav>
    <div class="container">
    <?php 
        if(isset($_GET['msg'])){

            $msg = $_GET['msg'];
            
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add User</a>
    </div>

    <div class="container mt-3">
    <table class="table table-hover text-center ">
        <thead class="table-dark">
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "db_conn.php";

            $sql = "SELECT * FROM `curd`";
            $res = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($res)){
            ?>
            <tr>
               <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                
                <td>
                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"> <i class="fa-solid fa-trash fs-5"></i></a>
                </td>               
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>