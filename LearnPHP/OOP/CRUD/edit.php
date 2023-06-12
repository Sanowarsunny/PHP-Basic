<?php
    include"db_conn.php";
    $id = $_GET['id'];
    if(isset($_POST['save'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile= $_POST['mobile'];

        $sql = "UPDATE `curd` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id = $id";
        
        $res = mysqli_query($conn,$sql);

        if($res){
            header("Location: index.php?msg=Updated Record created Successfully!!!");
        }else{
            echo "Failed: ".mysqli_error($conn);
        }
    }

?>
<?php
include"db_conn.php";
$sql = "SELECT * FROM `curd` WHERE id = $id LIMIT 1";

$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #74992e;">
        PHP CRUD Operation
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit New User</h3>
            <p>User From</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $row['mobile'] ?>">
                    </div>

                </div>
                <br>
                <div>
                    <button class="btn btn-success mb-3" name="save" >Update </button>
                    <button class="btn btn-danger mb-3" name="cancle" ><a href="index.php" style="text-decoration: none; color:white;">Cancle</a> </button>

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>