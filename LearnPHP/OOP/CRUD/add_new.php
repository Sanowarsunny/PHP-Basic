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
            <h3>Add New User</h3>
            <p>User From</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="add.php" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Sanowar Hossain" autocomplete="off" require>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Sanowar@gmail.com" autocomplete="off" require>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" name="mobile" placeholder="+880199087985" autocomplete="off">
                    </div>

                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success mb-3" name="save">Save</button>
                    <button class="btn btn-danger mb-3" name="cancle" ><a href="index.php" style="text-decoration: none; color:white;">Cancle</a> </button>

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>