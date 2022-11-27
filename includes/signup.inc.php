<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $username =$_POST['uId'];
    $pwd =$_POST['pwd'];
    $pwdRepeat =$_POST['Pwdrepeat'];

require_once 'config.inc.php';
require_once 'function.inc.php';


}

else{
    header("location: ../signup.php");
    exit();
}