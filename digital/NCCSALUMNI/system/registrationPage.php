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
         <span class="highlight"><h3 class="text-center wow fadeInDown">Welcome to NCCS Alumni Registration<br></h3></span>
         <div class="title-line wow fadeInDown"></div><br>
         
        <?php
        // $tucode=$_GET['tucode'];
         $email=$_GET['email'];
         ?>
         
          <center> <div class="container">
        <!--    <div class="col-sm-5">-->
         <form method="post" action="registrationRequest.php" class="form-horizontal">
              <div class="form-group">
                                <input type="text" name="turegcode" id="Name" class="form-control"  placeholder="Enter your TU Registrtion Code" required/>
                            </div>
                <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>"required/>
                            </div>

        <!-- <input type="text" class="form-control group" name="turegcode" placeholder="Enter your TU Registration Number" required>
             <input type="email" class="form-control group" name="turegcode" placeholder="Enter your TU Registration Number" required><br>
-->             <input type="submit" class="btn-primary" name="Submit" value="Registration Request">
         </form></div><!--</div>--></center>
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