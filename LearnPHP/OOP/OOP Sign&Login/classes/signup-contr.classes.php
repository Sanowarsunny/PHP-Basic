<?php

class SignupContr extends Signup{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }

    public function signupUser() {
        if($this->emptyInput() == false){
            //echo "Empty input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid() == false){
            //echo "Invalid Username;"
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            //echo "Invalid Email;"
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            //echo "Password Match;"
            header("location: ../index.php?error=passwordmacth");
            exit();
        }
        if($this->uidTakenCheck() == false){
            //echo "Invalid Username;"
            header("location: ../index.php?error=useremailtaken");
            exit();
        }

        //if all condition are ok then setUser
        $this->setUser($this->uid,$this->pwd,$this->email);
    }

    private function emptyInput() {
        //$result;
        if(empty($this->uid)||empty($this->pwd)||empty($this->pwdrepeat)||empty($this->email)){
            $result  = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
     //$result;

        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->uid))
        {
            $result  = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
       // $result;
        
           if(!filter_var($this->email,FILTER_VALIDATE_EMAIL))
           {
               $result  = false;
           }
           else{
               $result = true;
           }
           return $result;
       }

    private function pwdMatch() {
        //$result;
        
           if($this->pwd !== $this->pwdrepeat)
           {
               $result  = false;
           }
           else{
               $result = true;
           }
           return $result;
       }
    private function uidTakenCheck() {
        //$result;
        
           if(!$this->checkUser($this->uid, $this->email))
           {
               $result  = false;
           }
           else{
               $result = true;
           }
           return $result;
       }
}