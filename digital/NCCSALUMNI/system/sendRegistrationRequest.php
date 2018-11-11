<?php
    include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
    $TURegCode=$_POST["TURegCode"];
    $Email=$_POST["email"];
   
    $obj=new MainClass;
    /**First check whether the user is registered or not?*/
   $result= $obj->checkUser($TURegCode);
    if($result=='Success'){
            $Message="You are already registered ! Plese refer to your email";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
        }
else{
    /*If not registered then insert your request in the database*/
    $result2=$obj->registrationRequest($TURegCode,$Email);
    if($result2=='Success'){
         $Message="Please refer your mail";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
        
    }
}
   
    
?>
