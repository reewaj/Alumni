<!-- This page display the details from the studnetdata table which the students hava inserted after login -->
<!DOCTYPE HTML>

<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');

    //$TURegCode=$_GET["id"];
     
   
    ?>
<html>
<head>
	<title>view user profile</title>
   <!-- /.website title -->
        
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

          <link rel="stylesheet" src="css/imagecss.css">
</head>
      
      
      
<body data-spy="scroll" data-target="#navbar-scroll">

 <div id="preloader"></div>
 <div id="top"></div>
<div id="menu">
<nav class="navbar-wrapper navbar-default" role="navigation">
<div class="container">
<div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                          <!--<div class="form-group"></div>-->
                          <li><a href="studentloginpage.php">Events</a></li>
                        <li>   
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                              
                               <ul class="dropdown-menu">
                               <li><a href="viewProfile.php">View Profile</a></li>
                               <li><a href="insert.php">Update Profile</a></li>
                               <li><a href="changePassword.php">Change Password</a></li>
                               <li><a href="logoutUser.php">Logout</a></li>
   
                               </ul>
                             </li>
                           
                        </ul>
        </div>
    </div>   
</nav>
</div><div  class="col-xs-12-sm-offset-7">
     <?php
        session_start();
        $var=$_SESSION['username'];
        $obj=new MainClass;
        $con=$obj->connect_db();
        $sql="SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Qualification,studentdata.College,studentdata.Course,studentdata.Skills,studentdata.Experience,studentdata.OrganizationName,studentdata.projects,studentdata.platform,studentdata.links,studentdata.Status,studentdata.path FROM studentrecord LEFT JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode where studentrecord.TURegCode='$var'";

        
        $result = $con->query($sql) or die($con->error);
         while($row = $result->fetch_assoc()){
        ?>
        <div class="container">
        <div class="text-center">
  <h3 class="wow fadeInRight"><span class="highlight">Your Details</span></h3></div><div class="title-line wow fadeInRight"></div>


        <div id="">
            <table border="0" width="75%">
                <tr><td>
             <fieldset width="2px"><legend><h6 class="highlight">General Information</h6></legend></fieldset></td></tr>
              
              <style>
                img {
                  padding: 0px;
                  height: 200px;
                  width: 200px;
                  border-radius: 50%;
                }
              </style>
              <tr class="imagePadding">
                 
                  <td><img src='<?php echo $row['path']; ?>'></td>
                <!--  <td><label>user image</label></td>-->
                  <br/>
              </tr>
              <tr>
                  <br/>
                  <td><br/></td>
              </tr>
               <tr>
                   <br/>
                    <td><label>TU Registration No</label></td>
                    <td> <?php echo $row["TURegCode"];?></td>
                    </tr> 

                <tr>
                     <td><label>Full Name</label></td>
                   <td>  <?php echo $row["FirstName"];?> &nbsp; <?php echo $row["MiddleName"];?> &nbsp;<?php echo $row["LastName"];?></td> 
                 </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td><?php echo $row["Address"];?></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><?php echo $row["Email"];?></td>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td><?php echo $row["Gender"];?></td>
                </tr>
                <tr>
                    <td><label>Contact</label></td>
                    <td><?php echo $row["MobileNumber"];?></td>
                 
                </tr>

             <tr>
                    <td><br>
                    <fieldset><legend><h6 class="highlight">Educational Background</h6></legend></fieldset>
                    </td>
                </tr>
                    <tr>
                        <td><label>Qualifiaction</label></td>
                        <td><?php echo $row["Qualification"];?></td>
                    </tr>
                    <tr>
                        <td><label>College</label></td>
                        <td><?php echo $row["College"];?></td>
                    </tr>
                    <tr>
                        <td><label>Course</label></td>
                        <td><?php echo $row["Course"];?></td>
                    </tr>
                    <tr>
                        <td><br><fieldset><legend><h6 class="highlight">Project Works</h6></legend></fieldset></td>
                    </tr>
                   
                   <tr>
                        <td><label>Project</label></td>
                        <td><?php echo $row["projects"];?></td>
                    </tr>
                    <tr>
                        <td><label>Platform</label></td>
                        <td><?php echo $row["platform"];?></td>
                    </tr>
                    <tr>
                        <td><label>Link</label></td>
                        <td><?php echo '<a href="'.$row["links"].'">'.$row["links"].'</a>';?></td>
                    </tr>
                </table></div></div>

              <?php
        }
       /* echo "Total Number of records: ".$n; */
        ?>
      
      
      
      <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                    new WOW().init();
        </script> 
    </div>
</body>
</html>