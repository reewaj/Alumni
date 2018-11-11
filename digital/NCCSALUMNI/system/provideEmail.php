<!DOCTYPE html>
<html>
<head>
    <!--Copy this files for every pages -->
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

        <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>

        <div class="fullscreen landing parallax" style="background-image:url('images/1.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="images/nccslogo.png" alt="logo"></a></div>
                          <h1 class="wow fadeInDown ">
                                National College of Computer Studies
                            </h1>

                            <!-- /.header paragraph -->
                           		
                        </div>
                    </div>
                    
                </div>
            </div>
         </div>
         <span class="highlight"><h3 class="text-center wow fadeInDown">Acess code will be sent to following email address</h3></span>
         <div class="title-line wow fadeInDown"></div><br>
        <?php
            $turegcode=$_POST['turegcode'];
            include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
            $obj=new MainClass;

                  $result= $obj->checkUser($turegcode);
            if($result=='Success'){
            $Message="You are already registered ! Plese refer to your email";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="index.html";';
             echo "</script>";
        }
        else{


            $con=$obj->connect_db();
            $sql="SELECT TURegCode, Email from studentrecord where TURegCode='$turegcode'";
            $result = $con->query($sql);
		  if ($result->num_rows > 0) {
              echo "<center>";
		    echo "<html><h4 class=wow fadeInDown><center>TU Registration Code: ".$turegcode."</h4></center></html>";
             // echo "<br>";
             /* echo "<html><h3><center>Email Address: ".$*/
            
              
              echo "</center>";
              
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	           $email=$row["Email"];
           // echo $tucode;
            echo "<html><center><h4>Email Address: " .$email."</h4></center></html>";
            echo "</center>";
           
            
        }
          }

    
          
         else{ /*Yedi record payena bhane yo huncha*/
            $errorMessage="Sorry this Code doesn't exists.Please try again";
             echo "<script type='text/javascript'>alert(\"$errorMessage\");";
             echo 'window.location.href="studentRegistrationPage.html";';
             echo "</script>";
           
         }
     }
        
        
           // echo $email;
        ?>
        

<?php
    if (isset($_POST['submit'])) {
        $tuid=$_REQUEST['turegnumber'];
        $email=$_REQUEST['email'];
    }
         
    

        $uppr_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lower_case = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $special_chars = "$%&#@";

        $generated_uppr_case = substr(str_shuffle($uppr_case), 0,2);
        $generated_lower_case = substr(str_shuffle($lower_case), 0,2);
        $generated_numbers = substr(str_shuffle($numbers), 0,2);
        $generated_special_chars = substr(str_shuffle($special_chars), 0,2);

        $mixed = "$generated_uppr_case$generated_lower_case$generated_numbers$generated_special_chars";

        $generated_mixed = substr(str_shuffle($mixed),0,8);
    
    ?>

<table class="table table-bg">
<!--       <h2><center> Send Mail</center></h2>-->
<center><form method="post" action="SendMail.php" id="mailform">

    
   <input type="hidden" name="emailto" class="form-control" value="<?php error_reporting(0); echo $email ?>" >
   <input type="hidden" class="form-control" name="turegcode" value="<?php error_reporting(0); echo $turegcode ?>" >
    <input type="hidden"  class="form-control" name="mailsubject" value="Alumni Login Requirement">
    <input type="hidden"  class="form-control" name="password" value="<?php error_reporting(0); echo $generated_mixed ?>" >
<!--
<textarea name="message" form="mailform" placeholder="Enter message"></textarea><br><br>
-->

<!--yo correct cha <form method="post" action="sendRegistrationRequest.php">
         <input type="hidden" name="TURegCode" value="<?php echo $turegcode; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input class="btn-primary" type="submit" name="submit" value="Confirm"></form></center>
 -->           <!--Delete registration page.php-->
   
       <center>  <input type="hidden" name="TURegCode" value="<?php echo $turegcode; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input class="btn-primary" type="submit" name="submit" value="Confirm"></form></center>
     
    </body>

 <!-- /.javascript files -->
        
         <script src="js/jquery.js"></script>
       <!--   <script>
         function displayEmail(){
            
             document.getElementById("emailAddress").value="abc";
         }
         </script>-->
   
         
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
                                    new WOW().init();
        </script>
</html>