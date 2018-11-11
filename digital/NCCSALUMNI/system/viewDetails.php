<!DOCTYPE HTML>


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


<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');

    $TURegCode=$_GET["id"];
   
    ?>


<html>
<body>

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
                    
                  <!--   <td>
                         <?php echo '<a target="_blank" href="'.$row["location"].'">Download CV</a>'; ?>
                    </td>  -->
                </tr>
               <!--  <tr>
                    <td><label>Contact</label></td>
                    <td><?php echo $row["MobileNumber"];?></td>
                 
                </tr> -->

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
                   
                </table></div></div>

              <?php
        }
       /* echo "Total Number of records: ".$n;*/
        ?>
       </body>
       </html>