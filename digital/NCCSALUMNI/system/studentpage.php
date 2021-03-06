<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.html");
}
?>
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

        
                
        
        
</head>
 <body data-spy="scroll" data-target="#navbar-scroll">
     
     <?php
   // session_start();
    $tucode=$_SESSION["TURegCode"];
  //  $fullname=$_SESSION['FullName'];
   
?>
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
                             <div class="head-btn wow fadeInLeft">
                                <a href="logoutUser.php" class="btn-primary">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
     </div>
     </div>


  
         <div class="text-center">
                <h3 class="wow fadeInRight"><span class="highlight">Please fill the form</span></h3></div><div class="title-line wow fadeInRight"></div><br>
		<div class="container">
		
			<form class="wow fadeInLeft" name="form" action="studenthomepage.php" method="POST">
                <div class="form-group">
				<label for="turegno">TU Registration Number</label>
        <input type="text" id="turegno" name="regno" value="<?php echo $tucode; ?>" placeholder="Your Registration number.." class="form-control" readonly></div><!--Readonly rakhne type so that user wont be able to cahnge-->
            
                <div class="form-group">
                <label for="fname">Full Name</label></div>
                <div class="form-group">
        <input type="text" id="fname" name="fullname"   class="form-control" placeholder="Your full name.."></div>
                <div class="form-group">
        <label for="exp">Experience</label>
        <select name="exp" class="form-control">
        	<option selected="selected"></option>
        	<option value="5 years more">More than 5 years</option>
        	<option value="3-5 years">3-5 years</option>
        	<option value="2 years">2 years</option>
        	<option value="1 year">1 year</option>
        	<option value="None">None</option>
        </select></div>
        
                <div class="form-group">
        <label for="qly">Qualification</label><br>
        <select name="qly" class="form-control">
        	<option selected="selected"></option>
        	<option value="PhD">PhD</option>
        	<option value="Masters">Masters</option>
        	<option value="Bachelors">Bachelors</option>
        	<option value="Plus 2">Plus 2</option>
        	<option value="SEE">SEE</option>
        </select></div>
                <div class="form-group">
                <label for="skl">Skills</label><br>
                <table class="table table-bordered" id="dynamic_field">
                     <tr>
                  <td>
                      <input type="text" name="skills[]" class="form-control name_list" placeholder="skills here">
        <td><button type="button" name="add" id="add" class="btn btn-success">Add More 
                  </button>
                  </td>
              </tr>    
               
               </table>
               </div>
               
               
               <div class="form-group">
                 <label for="project">Projects</label><br>
                <table class="table table-bordered" id="pdynamic_field">
       
              <tr>
                  <td>
                      <input type="text" name="projects[]" class="form-control " placeholder="project name here">
                      <input type="text" name="platform[]" class="form-control " placeholder="platform">
                      <input type="text" name="links[]" class="form-control " placeholder="project link here">
                      </td>
        <td><button type="button" name="add" id="padd" class="btn btn-success">Add More 
                  </button>
                  </td>
              </tr>    
               
               </table>
               </div>
               
               
                <div class="form-group">
<label for="stat">Status</label><br>
<select name="stat" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)">
<option selected="selected">Please select ...</option>
<option value="Employed">Employed</option>
<option value="Self-Employed">Self-Employed</option>
<option value="Unemployed">Unemployed</option>

</select>	</div>
<div id="div1"></div>  <!--check anish file here-->
<div class="form-group last">            
    <center><button type="submit" class="btn btn-success" name="submit" onclick="return dialogDisplayGar()" >Submit</button></center>   </div>           
    </form></div>
            
            
<!--javascript file to display multiple options value-->            
            
    <script type="text/javascript">
        function dialogDisplayGar(){
            var x= document.forms["form"]["regno"]["fullname"].value;
            if(x==""){
                alert("plese fill all the form");
                return false;
            }
            else{
                alert('data inserted');
               // session_unset();
            }
        }
        
		function showfield(name){
		  if(name=='Employed'){
              
                
		  document.getElementById('div1').innerHTML='Organization: <input type="text" name="orgn" class="form-control" placeholder="Organization" /><br>Satisfied with your current job?:<br>Yes <input type="radio"  name="satisfy" value="Yes"/><br> No <input type="radio" name="satisfy" value="No"/>';
		  }
		  else if(name=='Self-Employed'){
		  	document.getElementById('div1').innerHTML='Organization: <input type="text" name="orgn" class="form-control" /><br><label for="time">When did you start your company</label><br><select name="time" class="form-control"><option selected="selected">Choose</option><option value="more than 5 years ago">5 years ago or more</option><option value="3-4 years">3-4 years</option><option value="2 years">2 years</option><option value="1 year">1 year</option><option value="not been a year">not been a year</option></select><br><br>'
		  }
		   else if(name=='Unemployed'){
		  	document.getElementById('div1').innerHTML='Why?:<select class="form-control" name="why" onchange="showReason(this.options[this.selectedIndex].value)"><option selected="selected">Choose</option><option value="Sick">Sick</option><option value="Injury">Injury</option><option value="Family">Family</option><option value="No skills">No skills</option><option value="Other">Other</option></select><div id="div2"></div><br> Looking for a job?:<br>Yes <input type="radio" name="look" value="Yes"/><br>No <input type="radio" name="look" value="No"/>'
		  	
		  }
		else {
		 document.getElementById('div1').innerHTML='';
		}
		}
		function showReason(n) {
			if(n=='Other') {
              
				document.getElementById('div2').innerHTML='<br>Other<input type="text" class="form-control" name="why"/>';
			
     }
			else {
			document.getElementById('div2').innerHTML='';
			}
		}
</script>
            
            
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
        
        
        
        <script>
    $(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="skills[]" placeholder="skills here" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
    
        /*headace*/    
     var j=1;
	$('#padd').click(function(){
		j++;
        
		$('#pdynamic_field').append('<tr id="row'+j+'"><td><input type="text" name="projects[]" placeholder="projects name here" class="form-control name_list" /><input type="text" name="platform[]" class="form-control " placeholder="platform"><input type="text" name="links[]" placeholder="projects link here" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove2">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove2', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});

	
	
});
</script>
</body>
</html>