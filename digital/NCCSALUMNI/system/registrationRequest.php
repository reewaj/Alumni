<?php
    include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
    $obj=new MainClass;
    $turegcode=$_POST['turegcode'];
    $email=$_POST['email'];

    /*First check whether the user is registered or not?*/
   $result= $obj->checkUser($turegcode);
    if($result=='Success'){
            $Message="You are already registered ! Plese refer to your email";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
        }
else{
    /*If not registered then insert your request in the database*/
    $result2=$obj->registrationRequest($turegcode,$email);
    if($result2=='Success'){
         $Message="Your request is submitted.Please refer your mail";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
        
    }
    
    
}
    
     
?>
