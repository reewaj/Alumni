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
            
            <th class="text-center">serialnumber</th>
            <th class="text-center">TU Registration Number</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Middle Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Address</th>
            <th class="text-center">Mobile Number</th>
            <th class="text-center">Resident Number</th>
                    <th class="text-center">Gender</th>
                    <th class="text-center">Date of Birth</th>
        <th class="text-center">Email Address</th></tr>


	
        </thead>
	
        <?php
        
        $sql = "SELECT * FROM studentrecord";
		$result = $con->query($sql);
        
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;
             
        ?>
        <tbody>
         <tr>
        <td class="text-center"><?php echo $n; ?></td>
        <td class="text-center"><?php echo $row["TURegCode"]; ?></td>
        <td class="text-center"><?php echo $row["FullName"]; ?></td>
        <td class="text-center"><?php echo $row["Address"]; ?></td>
        <td class="text-center"><?php echo $row["Phone"]; ?></td>
        <td class="text-center"><?php echo $row["Gender"]; ?></td>
        <td class="text-center"><?php echo $row["DOB"]; ?></td>
        <td class="text-center"><?php echo $row["Email"]; ?></td>
        
        
        </tr></tbody>
        
        <?php
             
        }
        echo "total" .$n;
        ?>
        
         
	    </table> 
		
<!--</span>-->
        </div></div>

	

</body>

</html>
