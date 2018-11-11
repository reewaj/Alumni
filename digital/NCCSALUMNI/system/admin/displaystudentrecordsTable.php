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

	<!-- <style>

	</style> -->

</head>

<body>

    
	<div class="container">
       <!-- <span class="table-responsive">-->
    <div id="shortcode-table">
	<table class="table table-bg table-bordered">
    <thead>
        <tr>
            <th class="text-center">TU Registration Number</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Middle Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Address</th>
            <th class="text-center">Mobile Number</th>
            <th class="text-center">Resident Number</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Date of Birth</th>
            <th class="text-center">Email Address</th>
            <!-- <th class="text-center">Action</th></tr> -->


	
        </thead>
	
        <?php
        
     /*   $sql = "SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Status FROM studentrecord INNER JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode";
		$result = $con->query($sql); //or die($con->error);
        */

         $sql = "SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Status FROM studentrecord LEFT JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode ORDER BY LENGTH(studentrecord.TURegCode), studentrecord.TURegCode";
        $result = $con->query($sql);
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;

                 $TURegCode=$row["TURegCode"]; /* 8/20/2018 1:09PM Add this to take the value of turegcode*/
             

        ?>
        <tbody>
         <tr>
        <td class="text-center"><a href="displayDetails.php<?php echo '?id='.$TURegCode; ?>" target="_blank" title="Click to View Details"><?php echo $row["TURegCode"]; ?></td>
        <td class="text-center"><?php echo $row["FirstName"]; ?></a></td>
        <td class="text-center"><?php echo $row["MiddleName"]; ?></td>
        <td class="text-center"><?php echo $row["LastName"]; ?></td>
        <td class="text-center"><?php echo $row["Address"]; ?></td>
        <td class="text-center"><?php echo $row["MobileNumber"]; ?></td>
        <td class="text-center"><?php echo $row["ResidentNumber"]; ?></td>
        <td class="text-center"><?php echo $row["Gender"]; ?></td>
        <td class="text-center"><?php echo $row["DOB"]; ?></td>
        <td class="text-center"><?php echo $row["Email"]; ?></td>
       
       <!-- 8/20/2018 1:10PM Add this instead of status to display all data of studentdata -->
       <!--  <td><form method="post" action="displayDetails.php">
        <input type="hidden" name="turegnumber" value="<?php $tuid;?>">
        
        <input  class="btn-default1" type="submit" type="submit" value="View Details">
        </form></td> -->
        
        
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
