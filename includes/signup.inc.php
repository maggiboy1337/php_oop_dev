<?php

if(isset($_POST["submit"])){

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //Instantiate Signup Controller Class
    include_once "../classes/signup-contr.class.php";
    include_once "../classes/login-contr.class.php";

    $signup = new SignupContr($uid , $pwd , $pwdrepeat , $email);

}


?>