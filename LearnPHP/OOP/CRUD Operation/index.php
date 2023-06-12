<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script type="text/javascript" src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-grid gap-2 col-3 mx-auto">
        <h1 style="margin-top: 40px; padding-left:50px">CRUD Operation</h1>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#userModal">Add User</button>
        <div id="displayTable" >iowe</div>
      </div>

  <!-- Modal -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Information</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="name" class="form-label" name="name">User Name</label>
                <input type="email" class="form-control" id="inputName" placeholder="Enter Name" autocomplete="off">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label" name="email">User Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter Email" autocomplete="off">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label" name="mobile">Mobile Number</label>
                <input type="email" class="form-control" id="inputMobile" placeholder="Mobile Number" autocomplete="off">
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" onclick="addUser()">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <!--<script>
    function addUser(){
      var name = $('#inputName').val();
      var email = $('#inputEmail').val();
      var mobile = $('#inputMobile').val();
      
      $.ajax({
          url:"insert.php",
          type:'post',
          data:{
              nameSend:name,
              emailSend:email,
              mobileSend:mobile
          },
          success:function(data,status){
              console.log(status);
          }
      })
    }
  </script>-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>