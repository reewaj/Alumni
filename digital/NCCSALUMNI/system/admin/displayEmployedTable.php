<!DOCTYPE html>
<?php 
/*include 'include.php';*/
include ('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass();
$con=$obj->connect_db();
     ?> 
<html lang="en">

<title>Admin Home Page</title>

   <!-- /.website title -->
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
<body>
	
    <div class="container">
        
    <div id="shortcode-table">
<table class="table table-bg table-bordered">
    <thead>
        <tr>
            <th class="text-center">TU Registration Code</th>
            <th class="text-center">Full Name</th>
            <th class="text-center">Qualification</th>
            <th class="text-center">Skills</th>
            <th class="text-center">Experience</th>
            <th class="text-center">Organization</th>
            <th class="text-center">Date of BirthSatisfaction</th>
            <th class="text-center">Projects</th>
        <th class="text-center">Links</th>
        <th class="text-center">Platform</th></tr>
	
        </thead>
	
        <?php
        
        $sql = "SELECT * FROM employed";
		$result = $con->query($sql);
        
        $n=0;
         while($row = $result->fetch_assoc()){
                 $n++;
             
        ?>
        <tbody>
         <tr>
        
        <td class="text-center"><?php echo $row["TURegCode"]; ?></td>
        <td class="text-center"><?php echo $row["FullName"]; ?></td>
        <td class="text-center"><?php echo $row["Qualification"]; ?></td>
        <td class="text-center"><?php echo $row["Skills"]; ?></td>
        <td class="text-center"><?php echo $row["Experience"]; ?></td>
        <td class="text-center"><?php echo $row["Organization"]; ?></td>   
        <td class="text-center"><?php echo $row["Satisfaction"]; ?></td>
             <td class="text-center"><?php echo $row["projects"]; ?></td>
             <td class="text-center"><?php echo $row["links"]; ?></td>
             <td class="text-center"><?php echo $row["platform"]; ?></td>
        </tr></tbody>
        
        <?php
        }
        ?>
        
         
	    </table>
		
<!--</span>-->
        </div></div>

	

</body>

</html>