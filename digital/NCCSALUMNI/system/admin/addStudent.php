<?php

$TURegCode=$_POST['turegcode'];
$FirstName=$_POST['firstname'];
$MiddleName=$_POST['middlename'];
$LastName=$_POST['lastname'];
$Address=$_POST['address'];
$MobileNumber=$_POST['mobilenumber'];
$ResidentNumber=$_POST['residentnumber'];
$Gender=$_POST['gender'];
$Dateofbirth=$_POST['DOB'];
$Email=$_POST['email'];


include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;
$result=$obj->insertStudentRecords($TURegCode,$FirstName,$MiddleName,$LastName,$Address,$MobileNumber,$ResidentNumber,$Gender,$Dateofbirth,$Email);
if($result=='Success') {
	$successMessage="Student record has been added";
             echo "<script type='text/javascript'>alert(\"$successMessage\");";
             echo 'window.location.href="adminhome.php";';
             echo "</script>";

    
}
/*else {
	$successMessage="Record cannot be sumbmitted";
             echo "<script type='text/javascript'>alert(\"$successMessage\");";
             echo 'window.location.href="adminhome.php";';
             echo "</script>";
}
    */

?>