<?php

class SignupContr extends Signup
{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct( $uid , $pwd , $pwdrepeat , $email )
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }

    private function singupUser()
    {

        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyInput");
            exit();
        }
        if($this->invalidUid() == false){
            header("location: ../index.php?error=emptyUid");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: ../index.php?error=emptyUid");
            exit();
        }
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=emptyUid");
            exit();
        }

        $this->setUser($this->uid, $this->pwd , $this->email);

    }

    private function emptyInput()
    {

        $result = true;

        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email))
        {
            $reslut = false;
        }

        return $result;

    }

    private function invalidUid(){

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {

            $result = false;

        } else {

            $reslut = true;

        }
        return $reslut;
    }

    private function invalidEmail(){

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

            $result = false;

        } else {

            $reslut = true;

        }
        return $reslut;
    }

    private function pwdMatch(){
        if($this->pwd !== $this->pwdrepeat){

            $result = false;

        } else {

            $result = true;

        }
    }

    private function uidTakenCheck(){

        if(!$this->checkUser($this->uid , $this->email)){

            $result = false;

        } else {

            $result = true;
            
        }

    }
}

?>