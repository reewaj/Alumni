<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.html");
}
?>

<html>
<head>
  <title>Change Password</title>
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
 <div id="preloader"></div>
 <div id="top"></div>
 <div id="menu">
<nav class="navbar-wrapper navbar-default" role="navigation">
<div class="container">
<div id="navbar-scroll" class="collapse navbar-collapse navbar-backyard navbar-right">
                        <ul class="nav navbar-nav">
                          <!--<div class="form-group"></div>-->
                          <li><a href="studentloginpage.php">Events</a></li>
                        <li>   
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                              
                               <ul class="dropdown-menu">
                               <li><a href="viewProfile.php">View Profile</a></li>
                                <li><a href="insert.php">Update Profile</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <li><a href="logoutUser.php">Logout</a></li>
   
                               </ul>
                             </li>
                           
                            
                        </ul>
                    </div>
</div>

    </nav>

</div>


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

<div class="container">
<form action="changePass.php" method="POST" class="wow fadeInLeft">
<div class="form-group">
<tr><td>
<label for="u">Username</label><br>

<input type="text" name="username" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly>
</td></tr>
    </div>
    <div class="form-group">
<tr><td>
<label for="p">Password</label><br>

<input type="password" class="form-control" id="pass" name="password" autocomplete="new-password" placeholder="Enter new password" required /></td></tr>
<span id="pa" class="text-danger font-weight-bold"></span>
</div>
  <div class="form-group">
   <tr><td>
<label for="cp">Confirm Password</label><br>    
<input type="password" class="form-control" id="cpass" name="cfpassword" autocomplete="new-password" placeholder="Confirm your new password" required />
<span id="cp" class="text-danger font-weight-bold"></span>

</td></tr>
    </div>
    <div class="form-group">
<input type="submit" name="Submit" id="submit" value="Change">
 </div>
</form>
</div>






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
    $(function(){
        
        var pass_err=true;
        var cpass_err=true;
       $('#pass').focusout(function(){
          pass_check(); 
       });
        $('#cpass').focusout(function(){
            cpass_check();
        });
        $('#cpass').keyup(function(){
            cpass_check();
        });
        
        function pass_check(){
            var pass=$('#pass').val();
            
            if(pass.length == ''){
                $('#pa').show();
                $('#pa').focus();
                $('#pa').html('**this field cannot be empty**');
                pass_err=false;
                return false;
                
            }else{
            $('#pa').hide();
        }
        
            
            /*
            var regex = new RegExp(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/);
            var valid = regex.test(pass);*/
          //  if(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test($('#pass').val())){
            if(pass.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/)){
                $('#pa').hide();
            }else{
                $('#pa').show();
                $('#pa').focus(); 
                $('#pa').html('**password must contain 8 charater, one letter, one number and one special character**');
                pass_err=false;
                return false;
            }    
            
            
        }
        
        function cpass_check(){
            var pass=$('#pass').val();
            var cpass=$('#cpass').val();
            if(cpass.length == ''){
            $('#cp').show();
            $('#cp').focus();
            $('#cp').html('**this field cannot be empty**');
            cpass_err=false;
            return false;
            }
        else{
            $('#cp').hide();
        }
            if(pass != cpass){
            $('#cp').show();
            $('#cp').focus();
            $('#cp').html('**password are not matching*');
            cpass_err=false;
            return false;

            }else{
                $('#cp').hide();
            }
        }
        
        $('#submit').click(function(){
            pass_err=true;
            cpass_err=true;
            
            pass_check();
            cpass_check();
            
            if( (pass_err== false) || (cpass_err==false)){
                return false;
            }else{
                return true;
            }
        });
        
    });
    
       
    </script>
      </body>
      </html>