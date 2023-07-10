<?php

class Signup extends Dbh{

    public function setUser($uid, $pwd, $email){
        
        
        $sql = "INSERT INTO users( users_uid, users_pwd, users_email) VALUES ('$uid','$pwd','$email');')";
        $res = mysqli_query($this->connect(),$sql);

        if($res){
            header("Location: index.php?msg=New Record created Successfully!!!");
        }else{
            echo "Failed: ".mysqli_error($this->connect());
        }
        
        // $stmt = $this->connect()->prepare('INSERT INTO users( users_uid, users_pwd, users_email) VALUES (?,?,?);');
    
        // $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);

        // //$stmt->execute(array("$uid, $hashedpwd, $email"));

        // if(!$stmt->execute(array($uid, $hashedpwd, $email))){
        //     $stmt = null;
        //     header("location: ../index.php?error=stmtfailed");
        //     exit();
        // }
        // $stmt = null;
    }

    protected function checkUser($uid, $email){
        // $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?');
    
        // if(!$stmt->execute(array($uid, $email))){
        //     $stmt = null;
        //     header("location: ../index.php?error=stmtfailed");
        //     exit();
        // }

        // //$resultCheck;

        // if($stmt->rowCount() > 0){
        //     $resultCheck = false;
        // }
        // else{
        //     $resultCheck = true;
        // }

        // return $resultCheck;
    }

}