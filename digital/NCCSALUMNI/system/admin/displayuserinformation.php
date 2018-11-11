<!DOCTYPE html>
<?php 
include 'include.php';
include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass();
$con=$obj->connect_db();
     ?> 
<html lang="en">

<head>
	
	<!--  -->

	<style>

	</style>

</head>

<body>

    
	<div class="container">
       <!-- <span class="table-responsive">-->
    <div id="shortcode-table">
	<table class="table table-bg table-bordered">
    <thead>
        <tr>
            <th class="text-center">Username</th>
            <th class="text-center">Password</th>
        </tr>


	
        </thead>
	
        <?php
        
     /*   $sql = "SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Status FROM studentrecord INNER JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode";
		$result = $con->query($sql); //or die($con->error);
        */

         $sql = "SELECT * FROM userlogintable ORDER BY LENGTH(Username), Username";
        $result = $con->query($sql);
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;
             
        ?>
        <tbody>
         <tr>
        <td class="text-center"><?php echo $row["Username"]; ?></td>
        <td class="text-center"><?php echo $row["Password"]; ?></td>
        
        </tr>
    </tbody>
        
        <?php
        }
        echo "Total Number of records: ".$n; 
        ?>
        
         
	    </table> 
		
<!--</span>-->
        </div></div>

	

</body>

</html>
