<!-- This page display the details from the studnetdata table which the students hava inserted after login -->
<!DOCTYPE HTML>

<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');

    $TURegCode=$_GET["id"];
   
    ?>
<html>
<head>
	<title>Student Details Page</title>
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

  
</head>
<body data-spy="scroll" data-target="#navbar-scroll">
    
   
    <div class="fullscreen landing parallax" style="background-image:url('img/abc.JPG');" data-img-width="5000" data-img-height="1333" data-diff="100">
   
        <div class="container"> 
           <!-- <div class="col-md-8 col-md-offset-1 text-center">-->
                 <!-- <a href="adminhome.php"><img src="img/nccsLogo.png"></a>-->
                  <span class="highlight text-center"><h1>National College of Computer Studies</h1>
                    <p>Welcome to NCCS Alumni System</p></span>
                       
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
                        <!--<a class="navbar-brand site-name" href="#top"><img src="images/logo2.png" alt="logo"></a>-->
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
        
     <br><h2 class="text-center highlight">Student Details</h2>
     <div class="title-line"></div>
   <?php
        $obj=new MainClass;
        $con=$obj->connect_db();
        $sql="SELECT studentrecord.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,studentrecord.Address,studentrecord.MobileNumber,studentrecord.ResidentNumber,studentrecord.Gender,studentrecord.DOB,studentrecord.Email,studentdata.Qualification,studentdata.College,studentdata.Course,studentdata.location,studentdata.projects,studentdata.platform,studentdata.links,studentdata.path FROM studentrecord LEFT JOIN studentdata ON studentrecord.TURegCode=studentdata.TURegCode where studentrecord.TURegCode='$TURegCode'";

        
        $result = $con->query($sql) or die($con->error);
         while($row = $result->fetch_assoc()){
        ?>
        <div class="container">
        <div id="shortcode-table">
            <table border="0" width="85%">

                <tr><td>
             <fieldset width="2px"><legend><h6 class="highlight">General Information</h6></legend></fieldset></td></tr>
            
        
               <tr>
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
                <tr>
                    <td><label>Email</label></td>
                    <td><?php echo $row["Email"];?>
                </tr>
                <tr>
                    <td><label>Gender</label></td>
                    <td><?php echo $row["Gender"];?></td>
                    
                    <td>

                       <?php echo '<a target="_blank" href="'.$row["location"].'" download>Download CV</a>'; ?>
                    </td> 
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
                        <td><label>Projects</label></td>
                        <td><?php echo $row["projects"];?></td>
                    </tr>
                    <tr>
                        <td><label>Platform</label></td>
                        <td><?php echo $row["platform"];?></td>
                    </tr>
                    <tr>
                        <td><label>Link</label></td>
                        <td>
                            <?php 
                                echo '<a href="'.$row["links"].'" target="_blank">'.$row["links"].'</a>';  
                            ?>
                        </td>
                    </tr>
                </table></div></div>

              <?php
        }
       /* echo "Total Number of records: ".$n;*/
        ?>
        

        <!-- download cv -->
        

</body>
</html>

