<?php
session_start();
if(!isset($_SESSION['Username'])){
  header("location:index.html");
}
?><!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
  <link rel="stylesheet" type="text/css" href="css\adminhome.css">
 
 <link rel="stylesheet" type="text/css" href="css\tabledesign.css">
  
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="header">
 
   <a href="adminhome.php"><img align="left" src="img\logo.png"></a>
  <h1>National College of Computer Studies</h1>
</div>


<div class="topnav">
  <a href="#">List of Students</a>
  <a href="addAdmin.html">Add Admin</a>
  <a href="addStudent.html">Add Student</a>
  <a href="searchemp.php">Employed Students</a>
  <a href="searchselfemp.php">Self Employed Students</a>
  <a href="searchunemp.php">Unemployed Students</a>
  <a href="admininbox.php">Inbox</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>

<div class="row">
  
    <div class="card">
      <h2>Search students information here</h2>
      <form method="POST" action="searchStudent.php">
        <!--<input align="right" type="text" name="searchName" placeholder="Enter Fullname of Student"  required>
        -->
        <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <div id="the-basics">
                      <input class="typeahead" type="text" name="searchValue" placeholder="search box">
                      <input type="submit" name="submit" value="Search ">
                    </div>
                </div>
            </div>
        </div>
        
	</div>
        
        
      </form>
      <h2><center>Record of Students</center></h2>
<?php
    $studentName=$_POST['searchValue'];
        include "include.php";
        include"displaysearchedresulttable.php";
        
   // include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
    
?>
