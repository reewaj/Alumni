<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
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
    
   
    <div class="fullscreen landing parallax" style="background-image:url('img/bgimage.jpg');" data-img-width="5000" data-img-height="1333" data-diff="100">
    <div class="overlay">
        <div class="container">
           <!-- <div class="col-md-8 col-md-offset-1 text-center">-->
                <img src="img/nccsLogo.png">
                 <span class="highlight text-center"><h1>National College of Computer Studies</h1>
                    <p>Welcome to NCCS Alumni System</p></span>
                
                    
</div></div></div><!--</div>-->
   

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
                        <a class="navbar-brand site-name" href="#top"><img src="images/logo2.png" alt="logo"></a>
                    </div>

                    <div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#">List of Students</a></li>
                            <li><a href="addAdmin.html">Add Admin</a></li>
                            <li><a href="addStudent.html">Add Students</a></li>
                            <li><a href="searchemp.php">Employed Students </a></li>
                            <li><a href="searchunemp.php">Unemployed Students</a></li>
                            <li><a href="searchselfemp.php">Self Employed Students</a></li>
                             <li><a href="admininbox.php">Inbox</a></li>
                            <li><a href="logout.php" style="float:left">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
<div class="row">
  
    <div class="card">
     <!--  <h2>Search self employed students information here</h2>
      <form method="POST" action="searchSelfEmpStudent.php">
        <input align="right" type="text" name="searchName" placeholder="Enter Fullname of Student"  required>
        <input type="submit" name="submit" value="Search ">
      </form> -->
      <h2><center>List of Self-Employed Students</center></h2>
        <?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
          $obj=new MainClass;
          $obj->displaySelfEmployedTable();
        ?>
    </div>

  </div>

</body>
</html>