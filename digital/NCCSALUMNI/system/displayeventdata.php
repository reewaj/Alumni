<!DOCTYPE html>
<?php 

include ('MainClass.php');
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
   
        <?php
        
     /*   $sql = "SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Status FROM studentrecord INNER JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode";
		$result = $con->query($sql); //or die($con->error);
        */

         $sql = "SELECT Title,EventDate,EventTime,Location,Description FROM eventdetails";
        $result = $con->query($sql);
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;
             
        ?>
       <!--  <tbody>
         <tr>
        <td class="text-center"><?php echo $row["Title"]; ?></td>
        <td class="text-center"><?php echo $row["EventDate"]; ?></td>
        <td class="text-center"><?php echo $row["EventTime"]; ?></td>
        <td class="text-center"><?php echo $row["Location"]; ?></td>
        <td class="text-center"><?php echo $row["Description"]; ?></td>
        </tr>
    </tbody> -->
        <b>Title : </b><u><?php echo $row["Title"]; ?></u><br>
        <b>Description : </b><br><?php echo $row["Description"]; ?><br>
        <b>Location : </b><i><?php echo $row["Location"]; ?></i><br>
        <b>Date : </b><?php echo $row["EventDate"]; ?><br>
        <b>Time : </b><?php echo $row["EventTime"]; ?><br><hr>
        
        <?php
        }
        /*echo "Total Number of events: ".$n;*/ 
        ?>
        
    
</div>

	

</body>

</html>
