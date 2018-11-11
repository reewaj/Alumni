<!DOCTYPE html>

<html>
<head>
    <title>Search User Information Page</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
                
        
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">

        <!-- Colors -->
        <link href="css/css-index.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

 
</head>
<body data-spy="scroll" data-target="#navbar-scroll">
    
   
    <div class="fullscreen landing parallax" style="background-image:url('img/abc.jpg');" data-img-width="5000" data-img-height="1333" data-diff="100">

        <div class="container">
           <!-- <div class="col-md-8 col-md-offset-1 text-center">-->
             
                <div> <h1 class="text-center">National College of Computer Studies</h1>
                    <p class="text-center">Welcome to NCCS Alumni System</p></div>
                
                    
</div></div><!--</div>-->
   

 <div id="menu">
            <nav class="navbar-wrapper navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-backyard">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="adminhome.php">List of Students</a></li>
                            <li><a href="addAdmin.html">Add Admin</a></li>
                            <li><a href="addStudent.html">Add Students</a></li>
                            <li><a href="addEvent.html">Add Events</a></li>
                            <li><a href="userInfo.php">User Information</a></li>
                            <li><a href="logout.php" >Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

<div class="container">
  

      <h2>Search students information here</h2>
      <form method="POST" action="displaysearcheduserrecord.php" class="form-horizontal">
        <!--<input align="right" type="text" name="searchName" placeholder="Enter Fullname of Student"  required>
        -->
        <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <div id="the-basics">
                      <input class="form-control" type="text" name="searchValue" placeholder="Enter Name of Students">
                      <!--<input type="submit"  class="btn-default" name="submit" value="Search ">-->
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
        
      </form>
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
        
    <table class="table table-bg table-bordered">
    <thead>
        <tr>  <th class="text-center">Username</th>
            <th class="text-center">Password</th>
        </tr>
        
    
        </thead>
    
        <?php
        $name=$_POST['searchValue'];

      /*  $sql = "SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Status FROM studentrecord INNER JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode where (studentrecord.FirstName LIKE'%" . $name  ."%' or  studentrecord.MiddleName LIKE'%" . $name  ."%' OR studentrecord.LastName LIKE'%" . $name  ."%'  OR studentrecord.TURegCode LIKE'%" . $name  ."%' or studentdata.Status LIKE'%" . $name  ."%' or studentrecord.Address LIKE'%" . $name  ."%')";
*/
        $sql = "SELECT * FROM userlogintable where Username LIKE'%" . $name  ."%'";
       
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
        
        <?php
        }
        echo "Number of Records: ".$n;
        ?>
        
        </tbody>    
        </table> 
        

    </div>

    

</body>

</html>
