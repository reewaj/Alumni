
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css\tableDesign.css">
	<link rel="stylesheet" type="text/css" href="css\adminhome.css">
    <link rel="stylesheet" type="text/css" href="css\design.css">

	<title></title>
</head>
	<body>
		<div class="header">
  <a href="adminhome.php"><img align="left" src="img\logo.png"></a>
  <img align="right" src=img\tu-logo.jpg" alt="tulogo">
  <h1>National College of Computer Studies</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<div class="topnav">
  <a href="#">List of Students</a>
  <a href="addAdmin.html">Add Admin</a>
  <a href="addStudent.html">Add Student</a>
  <a href="searchemp.php">Employed Students</a>
  <a href="searchselfemp.php">Self Employed Students</a>
  <a href="searchunemp.php">Unemployed Students</a>

  <a href="logout.php" style="float:right">Logout</a>
</div>

<div class="row">
  
    <div class="card">
      <h2>Search students information here</h2>
     <form method="post" action="searchStudents.php">
    <select name="searchOption">
    <option value="TURegCode">TURegCode</option>
    <option value="FullName">FullName</option>
    <option value="Address">Address</option>
    <option value="Phone">Phone</option>
    <option value="Gender">Gender</option>
    <option value="Projects">Projects</option> 
    </select>
    <input align="right" type="text" name="searchValue"   required>
    <input type="submit" name="submit" value="Search "></form>
 	
		<h2><center>Records of Students</center></h2>
</body>
</html>


<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;
$searchOption=$_POST['searchOption'];

$searchValue=$_POST['searchValue'];
$obj->searchStudents($searchOption,$searchValue);

?>
