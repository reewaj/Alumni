<!DOCTYPE html>
<html>
    <head>
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

<?php
    
include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;
$con=$obj->connect_db();
?>


<body>
   <div class="container">
    <center><h3>List of Registration Request</h3></center>
   <div id="shortcode-table">
           <table class="table table-bg table-bordered">
               <thead>
                   <tr>
                       <th class="text-center">TU Registration Number</th>
                       <th class="text-center">First Name</th>
                       <th class="text-center">Middle Name</th>
                       <th class="text-center">Last Name</th>
                       <th class="text-center">Email Address</th>
                       <th class="text-center">Date and Time</th>
                        <th class="text-center">Action</th>
                   </tr></thead>
   <?php
    
$sql="select registrationrequest.TURegCode,studentrecord.FirstName,studentrecord.MiddleName,studentrecord.LastName,registrationrequest.RegistrationEmail,registrationrequest.Date from registrationrequest inner join studentrecord on registrationrequest.TURegCode=studentrecord.TURegCode ORDER BY Date DESC";
        
$result=$con->query($sql) or die ($con->error);
    while($row=$result->fetch_assoc()){
        $tuid=$row["TURegCode"];
        //$FullName=$row["FullName"];/*Name display garna*/
        $emailEntered=$row["RegistrationEmail"];
        /*$email=$row["Email"];*/
       /* echo $email;*/
        ?>
    <tbody>
    <tr>
    <td class="text-center"><?php echo $row["TURegCode"];?></td>  
    <td class="text-center"><?php echo $row["FirstName"];?></td>  
        <td class="text-center"><?php echo $row["MiddleName"];?></td>  
        <td class="text-center"><?php echo $row["LastName"];?></td>  <!--Yo Name euta thapeko-->
    <td class="text-center"><?php echo $row["RegistrationEmail"];?></td> 
     <td class="text-center"><?php echo $row["Date"];?></td>      
 
       
        <td class="text-center"><form method="post" action="MailSendingForm.php">
        <input type="hidden" name="turegnumber" value="<?php echo $tuid;?>">
        <input type="hidden" name="email" value="<?php echo $emailEntered;?>">
        <input  class="btn-default1" type="submit" type="submit" name="ok" value="Accept">
        </form></td>
        </tr></tbody> 










<?php
    }
    ?>

           </table></div></div></body></html> 








