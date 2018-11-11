<?php

$turegno=$_GET['turegno'];
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');

$obj=new MainClass;
$con=$obj->connect_db();

echo $turegno;

/*
 $sql = "SELECT * FROM studentrecord WHERE TURegCode='$turegno'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		    echo "Please make use of this Email Addres";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "The Value is ". $row["Email"];
	    }
	    
		} else {
	    	echo "0 results";
		}*/
	

?>
