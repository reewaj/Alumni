<?php

include('MainClass.php');
$username = $_POST['username'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];

$obj = new MainClass;
$hashpass=password_hash($password,PASSWORD_DEFAULT);

//password_verify($password,$hashpass);

$result=$obj->updatePassword($username,$hashpass); 
if($result=='Success') {
	$successMessage="Your password is updated successfully";
             echo "<script type='text/javascript'>alert(\"$successMessage\");";
             echo 'window.location.href="studentloginpage.php";';
             echo "</script>";

    
}

?>