<?php

include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$mainclassobj=new MainClass;

$Fullname=$_POST['adminfn'];
$Username=$_POST['adminuname'];
$Password=$_POST['adminpswd'];
$CFPassword=$_POST['cfpswd'];

      if($Password!=$CFPassword) {
      $Message="Passwords don't match!";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="addAdmin.php";';
             echo "</script>";
      } else {
      $mainclassobj->adminRegistration($Fullname,$Username,$Password,$CFPassword);
      $Message="New admin added!";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="addAdmin.php";';
             echo "</script>";
             header("location:addAdmin.html");   
}

/*
else{
	header("location:adminindex.html");
}*/
?>
