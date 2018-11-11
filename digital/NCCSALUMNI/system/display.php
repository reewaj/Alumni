<?php
    $TURegCode=$_POST["TURegCode"];
    $Email=$_POST["email"];
    include('MainClass.php');
    $obj=new MainClass;
    $con=$obj->connect_db();
    $sql="INSERT INTO registrationrequest (TURegCode,RegistrationEmail) values ('$TURegCode','$Email')";
    $con->query($sql);
		if($con->error){
			$error=$con->error;
             $Message="Error Submitting !".$error;
             
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="studentRegistrationPage.html";';
             echo "</script>";
		}
else{
    $Message="Your request is Submitted";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="studentRegistrationPage.html";';
             echo "</script>";
}
?>
