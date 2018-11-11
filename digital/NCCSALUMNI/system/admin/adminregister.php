<?php

include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$mainclassobj=new MainClass;

$Fullname=$_POST['adminfn'];
$Username=$_POST['adminuname'];
$Password=$_POST['adminpswd'];
$CFPassword=$_POST['cfpswd'];

if($mainclassobj->adminRegistration($Fullname,$Username,$Password,$CFPassword)=='Success'){
	header("location:adminhome.php");

}
else{
	header("location:adminindex.html");
}
?>
