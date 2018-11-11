
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
	
<body data-spy="scroll" data-target="#navbar-scroll">

  <div class="fullscreen landing parallax" style="background-image:url('img/abc.jpg');" data-img-width="5000" data-img-height="1333" data-diff="100">
   
        <div class="container">
           <!-- <div class="col-md-8 col-md-offset-1 text-center">-->
               
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
                       <!-- <a class="navbar-brand site-name" href="#top"><img src="images/logo2.png" alt="logo"></a>-->
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="adminhome.php" >List of Students</a></li>
                            <li><a href="addAdmin.html">Add Admin</a></li>
                            <li><a href="addStudent.html">Add Students</a></li>
                            <li><a href="admininbox.php">Inbox</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                 
                </div>
            </nav>
     
        </div>

    <?php
    if (isset($_POST['ok'])) {
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
<tr>
    <td ><center><label class="text-center">Receiver</label></center></td> 
    <td><input type="email" name="emailto" class="form-control" value="<?php error_reporting(0); echo $email ?>"  readonly></td> <br>
 </tr>
    
<tr>
    <td><center><label>Receiver's Username </label></center></td> 
    <td   ><input type="text" class="form-control" name="turegcode" value="<?php error_reporting(0); echo $tuid ?>" readonly></td> <br>
</tr>
       <tr>
    <td><center> <label>Subject of Mail </label> </center></td> 
    <td ><input type="text"  class="form-control" name="mailsubject" value="Alumni Login Requirement"></td> <br>
</tr>
    
<tr>
    <td><center><label>Password for Receiver </label></center></td> 
    <td><input type="text"  class="form-control" name="password" value="<?php error_reporting(0); echo $generated_mixed ?>" readonly></td>
</tr><br>
<!--
<textarea name="message" form="mailform" placeholder="Enter message"></textarea><br><br>
-->

    <tr><center><td colspan="5"><button type="Submit" name="submit"  class="btn btn-primary" >Send</button></td></center></tr>
</form><br> 

</body>
</html>