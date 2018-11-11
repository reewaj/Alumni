

<?php

$tucode=$_REQUEST['turegcode'];
$to = $_REQUEST['emailto'];
$subject = $_REQUEST['mailsubject'];
/*$msg1 = $_REQUEST['welcome'];
$msg = $_REQUEST['password'];*/
$msg = $_REQUEST['password'];
$headers = "From: nccsalumni2018@gmail.com" . "\r\n" ;


$message ='Thank you for registering!'."\n". 'We welcome you to our Alumni family'."\n". 'Here is what you need to login '. "\n\t\t".
		'Username: ' .$_REQUEST['turegcode'] ."\n\t\t"
		. 'Password: ' .$_REQUEST['password'];


if(mail($to,$subject,$message,$headers))
{
 $successMessage="Please check your email";
             echo "<script type='text/javascript'>alert(\"$successMessage\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
           
    
}
else{
		echo "Sorry error";
}

include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;
//$con=$obj->connect_db();
$obj->userlogintable($tucode,$msg);

?>