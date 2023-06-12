<?php
include("connection.php");

if(isset($_POST['displaySend'])){
   
    $table = '<table class="table"> 

    <thead>

    <tr>
        <th>Serial No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>

    </thead>';

    $sql = "SELECT * FROM `curd`";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($res)){
        
        $id =  $row['id'];
        $name =  $row['name'];
        $email =  $row['email'];
        $mobile =  $row['mobile'];

        $table.= '<tr>
            <td>'.$id.' </td>
            <td>'.$name.' </td>
            <td>'.$email.' </td>
            <td>'.$mobile.' </td>

        </tr>';
    }
        $table.='</table>';  
        echo $table;           
}