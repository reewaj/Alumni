<?php
    $TURegNumber=$_POST['username'];
	$Password=$_POST['password'];
	include('MainClass.php');
    

    $mainClassobj= new MainClass;
	if($mainClassobj->userLogin($TURegNumber,$Password)=='Success'){
		header("location:studentloginpage.php");/*.html lai .php ma change garne*/
	}
	else{
		
		 $Message="Wrong Username and Password";
             echo "<script type='text/javascript'>
            alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
	}
?>
