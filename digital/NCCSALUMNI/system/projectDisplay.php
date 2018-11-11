


<!DOCTYPE html>

<html>
<head>
	 <title>NCCS ALUMNI </title>
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

            <style> 
            input[type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url('searchicon.png');
            background-position: 10px 10px; 
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            -webkit-transition: width 0.4s ease-in-out;
            transition: width 0.4s ease-in-out;
            }

            input[type=text]:focus {
            width: 100%;
            }
                #btnsearch{
                    position:relative;
                    transition: .5s ease;
                    bottom: 10px;
                }
                
                
            </style>
        
                
        
        
</head>
 <body data-spy="scroll" data-target="#navbar-scroll">
 <div id="preloader"></div>
     <div id="top"></div>

 <div class="fullscreen landing parallax" style="background-image:url('images/1.jpg');" data-img-width="2000" data-img-height="1333" data-diff="100">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href="index.html"><img src="images/nccslogo.png" alt="logo"></a></div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                WE RISE TO RAISE NATION
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp">
                                <p>The Association of NCCS Ex-Students</p>
                            </div>				  			  
                        </div>
                    </div>
                </div>
     </div>
     </div>



         <div class="text-center">
                <h3 class="wow fadeInRight"><span class="highlight">Search projects done by students</span></h3></div><div class="title-line wow fadeInRight"></div><br>
		<div class="container">
    <!--form-->
      
       <form action="projectDisplay.php" method="post">
        <input type="text" name="searching" placeholder="Search..">
        <!--<button type="submit" class="btn btn-default" id="btnsearch">Submit</button>-->
    </form>
            

            <?php 
        include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
        $obj=new MainClass();
        $con=$obj->connect_db();
            
             ?> 
<html>
<head>
	<style>

	</style>

</head>
<body>
    
	<div class="panel panel-body">
        <span class="table-responsive">
	<table class="table table-bg table-bordered table-hover">
    <thead>
        <tr>
            <th>TU Registration Code</th><th>Project name</th><th>Project link</th><th>Platform</th>
        </thead>
	<tbody>
        <?php
        $value=$_POST['searching'];
        //$query="select * from displayPurpose where projects like '%".$value."%'";
        $sql = "select TURegCode, projects, links, platform from studentdata where projects like '%".$value."%' or platform like'%".$value."%'";
		$result = $con->query($sql);
        
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;
                 $TURegCode = $row['TURegCode'];
             
        ?>
         <tr>
        <!-- <td><?php echo $n; ?></td> -->
        <!-- <td></td> -->
    
        <td><a href="viewDetails.php<?php echo '?id='.$TURegCode; ?>" target="_blank" title="Click to View Details"><?php echo $row["TURegCode"]; ?></a></td>
        <td><?php echo $row["projects"]; ?></td>
        <td><?php echo '<a href="'.$row["links"].'">View Project</a>'; ?></td>
        <td><?php echo $row["platform"]; ?></td>
                </tr>
        
        <?php

        }
        echo 'Total number of records:' .$n;
        ?>

                </tbody>    
	    </table> 
		
</span>
    	</div>

	

</body>

</html>					
            
     </div>
        
     <!-- /.javascript files for animation -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
               new WOW().init();
        </script>
</body>
</html>