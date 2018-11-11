<?php

include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$mainclassobj=new MainClass;

$Username=$_POST['adminuname'];
$Password=$_POST['adminpswd'];

if($mainclassobj->adminLogin($Username,$Password)=='Success'){
	header("location:adminhome.php");

}
else{
        $Message="Wrong Username or Password! ";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
}
?>

