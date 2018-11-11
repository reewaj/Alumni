<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:index.html");
}
  include('MainClass.php');
  $obj=new MainClass;
  $TURegCode=$_SESSION["username"];
  $con=$obj->connect_db();
  $sql="SELECT FirstName,MiddleName,LastName FROM studentrecord WHERE TURegCode='$TURegCode'";
  $result=$con->query($sql);
  if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $firstname=$row["FirstName"];
    $middlename=$row["MiddleName"];
    $lastname=$row["LastName"];
  }
}
$query="SELECT College,Course,Experience,skills,projects,links,platform,Status,OrganizationName,JoinedDate,ResignedDate,path,location FROM studentdata WHERE TURegCode='$TURegCode'";
$result=$con->query($query);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $Skills=$row["skills"];
    $Projects=$row["projects"];
    $Links=$row["links"];
    $Experience=$row["Experience"];
    $College=$row["College"];
    $Course=$row["Course"];
    $Platform=$row["platform"];
    $OrganizationName=$row["OrganizationName"];
    $JoinedDate=$row["JoinedDate"];
    $ResignedDate=$row["ResignedDate"];
    $path=$row["path"];
    $location=$row["location"];
    $Status=$row["Status"];
    
  }
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

<br><br>
<div class="text-center">
  <h3 class="wow fadeInRight"><span class="highlight">Please fill the form</span></h3></div><div class="title-line wow fadeInRight"></div><br>
  <div class="container">

   <form class="wow fadeInLeft" name="form" action="newInsert.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
   <tr>
       <td >
           <label for="user image">Profile Picture</label><br>
            <input  type="file" name="image" placeholder="your profile pitcure" class=".form-control-file">
       </td>
   </tr>    
</div>
     <div class="form-group">
     
     
      <label for="turegno">TU Registration Number</label>
      <input type="text" id="turegno" name="regno" placeholder="Your Registration number.." class="form-control" value="<?php echo $_SESSION['username'] ?>" readonly></div> 
      
     
      <div class="form-group">
        <label for="fname">FirstName</label>
        <div class="form-group">
          <input type="text" id="fname" name="firstname" value="<?php echo $firstname;?>" class="form-control" placeholder="Your firstname.." required readonly></div>
          <label for="mname">MiddleName</label>
        <div class="form-group">
          <input type="text" id="mname" name="middlename"  value="<?php echo $middlename;?>" class="form-control" placeholder="Your middlename.."></div>
          <span id="mn" class="text-danger font-weight-bold"></span>
          <label for="lname">LastName</label>
        <div class="form-group">
          <input type="text" id="lname" name="lastname" value="<?php echo $lastname;?>" class="form-control" placeholder="Your lastname.." required>
          <span id="ln" class="text-danger font-weight-bold"></span>
        </div>
          
          <?php
            $sql="SELECT Experience FROM studentdata WHERE TURegCode='$TURegCode'";
            $result=$con->query($sql);
          
                if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            $Experience=$row["Experience"];
          if(!empty($row["Experience"])){           
        ?>
          <div class="form-group">
            <label for="exp">Experience</label>
            <select name="exp" id="exp" class="form-control">
             <option selected="selected" value="<?php echo htmlentities($Experience);?>"><?php echo htmlentities($Experience);?></option>
            <?php
                     if($Experience=="More than 5 years"){
            ?>
            
             <option value="3-5 years">3-5 years</option>
             <option value="2 years">2 years</option>
             <option value="1 year">1 year</option>
             <option value="None">None</option>
                <?php
                     }
                ?>
                <?php
                      if($Experience=="3-5 years"){?>
                
                 <option value="More than 5 years">More than 5 years</option>
             <option value="2 years">2 years</option>
             <option value="1 year">1 year</option>
             <option value="None">None</option>
                <?php }?>
                
                <?php
                     if($Experience=="2 years"){?>
                 <option value="More than 5 years">More than 5 years</option>
             <option value="3-5 years">3-5 years</option>
             <option value="1 year">1 year</option>
             <option value="None">None</option>
                <?php }?>
                
                <?php
                     if($Experience=="1 year"){?>
                 <option value="More than 5 years">More than 5 years</option>
             <option value="3-5 years">3-5 years</option>
             <option value="2 years">2 year</option>
             <option value="None">None</option>
                <?php }?>
                
                <?php
                     if($Experience=="None"){?>
                 <option value="More than 5 years">More than 5 years</option>
             <option value="3-5 years">3-5 years</option>
             <option value="2 years">2 years</option>
             <option value="1 year">1 year</option>
                <?php }?>
                
              </select>
           <span id="ex" class="text-danger font-weight-bold"></span>
           <?php
                 }
                    else{
            ?>
           
    
            <label for="exp">Experience</label>
            <select name="exp" id="exp" class="form-control">
             <option selected="selected" value="">Please select your experience</option>
             <option value="More than 5 years">More than 5 years</option>
             <option value="3-5 years">3-5 years</option>
             <option value="2 years">2 years</option>
             <option value="1 year">1 year</option>
             <option value="None">None</option>
           </select>
           <span id="ex" class="text-danger font-weight-bold"></span>
           </div>
              <?php
                    }
                        }
                }
          
          
          ?><!--End of all dropdwon for experience-->
              
       <br>
           <?php
          
            $sql="SELECT Qualification FROM studentdata WHERE TURegCode='$TURegCode'";
            $result=$con->query($sql);
                if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            $Qualification=$row["Qualification"];
                            if(!empty($row["Qualification"])){           
        ?>
          
           <div class="form-group">

            <label for="qly">Qualification</label>
             <table class="table table-bg">
            <select name="qly" id="qly" class="form-control" onclick="showfield(this.options[this.selectedIndex].value)">
             <option selected="selected" value="<?php echo htmlentities($Qualification);?>"><?php echo htmlentities($Qualification);?></option>
             <?php
                     if($Qualification=="Masters"){
                         
            ?>
           
             <option value="Bachelors">Bachelors</option>
             <option value="Plus 2">Plus 2</option>
                
            <?php }?>
                <?php 
                      if($Qualification=="Bachelors"){
                ?>
                           <option value="Masters">Masters</option>
                        <option value="Plus 2">Plus 2</option>
                <?php }?>
                <?php
                        if($Qualification=="Plus 2"){?>
                            
                         <option value="Masters">Masters</option>
                        <option value="Bachelors">Bachelors</option>
                <?php }?>
                      
           </select>
           <div id="div1"></div>
           <span id="ql" class="text-danger font-weight-bold"></span>
               </table></div>
          
          <!--if Qualification column is empty part-->
          <?php
          }
              else{?>
           <div class="form-group">

            <label for="qly">Qualification</label>
             <table class="table table-bg">
            <select name="qly" id="qly" class="form-control" onchange="showfield(this.options[this.selectedIndex].value)">
             <option selected="selected" value="">Please select your qualification</option>
             <option value="Masters">Masters</option>
             <option value="Bachelors">Bachelors</option>
             <option value="Plus 2">Plus 2</option>
           </select>
           <div id="div1"></div>
           <span id="ql" class="text-danger font-weight-bold"></span>
               </table></div>
          <?php
              }
                        }
                }
          ?>
               
               
           
      
           <div class="form-group">
            <label for="skl">Skills</label><br>
            <table class="table table-bg" id="dynamic_field">
             <tr>
              <td width="100%">
                <input type="text" id="skills" value="<?php echo $Skills;?>" name="skills[]" autocomplete="off" class="form-control name_list" placeholder="skills here" onkeyup="noSpecial(this)">
                <span id="sk" class="text-danger font-weight-bold"></span>
                </td>
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More 
                </button>
              </td>
            </tr>    
            <tr>
                
            </tr>
          </table>
          
        </div>
          
          
        
        
        <div class="form-group">
         <label for="project">Projects</label><br>
         <table class="table table-bg" id="pdynamic_field">

          <tr>
            <td width="100%">
              <input type="text" id="project" value="<?php echo "$Projects"?>" name="projects[]" class="form-control " autocomplete="off" placeholder="Name of project" onkeyup="noSpecial(this)">
              <span id="pr" class="text-danger font-weight-bold"></span><br>
              
             <input type="text" id="platform" name="platform[]" value="<?php echo $Platform;?>" class="form-control " placeholder="Project Platform (eg. java,php,android)" onkeyup="noSpecial(this)">
              <span id="pl" class="text-danger font-weight-bold"></span><br>
            
             <input type="text" id="links" name="links[]" class="form-control " value="<?php echo $Links;?>" placeholder="Link of the project">
              <span id="li" class="text-danger font-weight-bold"></span>
              </td>
           
            <td><button type="button" name="add" id="padd" class="btn btn-success">Add More 
            </button>
          </td>
        </tr>    
        
      </table>
      
    </div>
    <div class="form-group">
         <label for="orgn">Organizations Worked In</label><br>
         <table class="table table-bg" id="orgdynamic_field">
          <tr>
           
            <td width="100%">
                     <label>Organization Name</label>
                   <input type="text" name="orgn[]" id="org" value="<?php echo "$OrganizationName";?>" class="form-control" Organonkeyup="noSpecial(this)" placeholder="Organization Name" />
                   <span id="or" class="text-danger font-weight-bold"></span>
                   <br>
              <label>Joined Date</label>
                <input type="Date" placeholder="Start date" value="<?php echo "$JoinedDate";?>" name="sdate[]" class="form-control" /><br>
                
                 <label>Resigned Date</label>
                <input type="Date" name="ldate[]" value="<?php echo "$ResignedDate";?>"  class="form-control" />
     </td>
            <td><br><button type="button" name="add" id="ogpadd" class="btn btn-success">Add More 
            </button>
          </td>
        </tr>    
        
      </table>
    </div>
          
          <?php
            $sql="SELECT Status FROM studentdata WHERE TURegCode='$TURegCode'";
            $result=$con->query($sql);
            if($result->num_rows>0){
                 while($row=$result->fetch_assoc()){
                     $Status=$row["Status"];
                     if(!empty($Status)){
                     
    ?>
          
          <div class="form-group">
      <label for="stat" id="stat">Status</label><br>

      <select name="stat" id="stat" class="form-control">
             <option selected="selected" value="<?php echo "$Status";?>"><?php echo htmlentities($Status);?></option>
          <?php 
                if($Status=="Unemployed"){
          ?>
             
             <option value="Employed">Employed</option>
          <?php }?>
          <?php
                if($Status=="Employed"){
            ?>
            <option value="Unemployed">Unemployed</option>
          <?php }?>
           </select>
              
           <span id="st" class="text-danger font-weight-bold"></span>
           </div>
          
          <!--MMMMMMMMMMMMMMMMMMM-->
<?php
                 }
            
                     
          else{
          ?>
                    
                    
    <div class="form-group">
      <label for="stat" id="stat">Status</label><br>

      <select name="stat" id="stat" class="form-control">
             <option selected="selected" value="">Please choose your employement status</option>
             <option value="Employed">Employed</option>
             <option value="Unemployed">Unemployed</option>
           </select>
           <span id="st" class="text-danger font-weight-bold"></span>
           </div>
          
          <?php
          }
                 }
            }
          
        ?>
      <!--check anish file here
      -->
      
<div class="form-group">
   <tr>
       <td>
           <label for="cv pdf" >Include your cv in pdf file</label><br>
            <input type="file" name="cvpdf" id="cvpdf" placeholder="include cv in pdf" class=".form-control-file">
            <span id="cvpdf" class="text-danger font-weight-bold"></span>
       </td>
   </tr>    
</div><br>
      
      <div class="form-group last">            
        <center><button type="submit" class="btn btn-success" name="submit" id="submit" onclick="return dialogDisplayGar()" >Update</button></center></div>     
               
       </div>  </form></div>
        
      <script>
        function lettersOnly(input) {
                      var regex = /[^a-z]/gi;
                      //var regex = /[^a-zA-Z ]{2,30}$/
                      input.value = input.value.replace(regex, "");
                    }

                    function noSpecial(input) {
                      var regex = /[^a-zA-Z, ]/gi;
                      //var regex = /[^a-zA-Z ]{2,30}$/
                      input.value = input.value.replace(regex, "");
                    }
      </script>
      
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

        function showfield(name){
          if(name=='Masters'){
          document.getElementById('div1').innerHTML='<br><label>College/University</label><input class="form-control " type="text" name="uni" placeholder="College/University" value="<?php echo $College;?>" required/> <br> <label>Course</label><input class="form-control " type="text" name="crse" placeholder="Course"required/><br>';
          } 
          else if(name=='Bachelors') {
            document.getElementById('div1').innerHTML='<br><label>College</label><input class="form-control " type="text" name="uni" value="National College of Computer Studies" readonly/><br><label>Course</label><select name="crse" class="form-control" required="required"><option selected="selected"></option><option value="BIM">BIM</option><option value="BHM">BHM</option><option value="BScCSIT">BScCSIT</option></select><br>';
          }
          else if(name=='Plus 2') {
            document.getElementById('div1').innerHTML='<br><label>College</label><input class="form-control " type="text" name="uni" value="NCCS Higher Secondary School" readonly/><br><label>Course you have choosen</label><input class="form-control " type="text" name="crse" placeholder="Course" required/><br>';
          }
          else {
            document.getElementById('div1').innerHTML='';
          }
        }

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

          $('#pdynamic_field').append('<tr id="row'+j+'"><td><input type="text" name="projects[]" placeholder="Name of project" class="form-control name_list" /><br><input type="text" name="platform[]" class="form-control " placeholder="Project Platform (eg. java,php,android )"><br><input type="text" name="links[]" placeholder="Link of the project" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove2">X</button></td></tr>');
        });

         $(document).on('click', '.btn_remove2', function(){
          var button_id = $(this).attr("id"); 
          $('#row'+button_id+'').remove();
        });

          var k=1;
         $('#ogpadd').click(function(){
          j++;

          $('#orgdynamic_field').append('<tr id="row'+k+'"><td><label>Organization Name</label><input type="text" name="orgn[]" class="form-control"  /><br><label>Joined Date</label><input type="Date" name="sdate[]" class="form-control" /><br><label>Resigned Date</label><input type="Date" name="ldate[]" class="form-control" /></td><td><button type="button" name="remove" id="'+k+'" class="btn btn-danger btn_remove2">X</button></td></tr>');
        });

         $(document).on('click', '.btn_remove3', function(){
          var button_id = $(this).attr("id"); 
          $('#row'+button_id+'').remove();
        });

       });
          
              
          //validation code here
          $(function(){
            /* 
          $("#submit").click(function(){
                 
                 $val=$(".stat").find(":selected").text();
                 if($val==0){
                     alert("please enter stat");
                 }
             });*/
          
          
          $('#fn').hide();
          $('#ln').hide();
              
              
          var mn_err=true;
          var ln_err=true;
          var exp_err=true;
          var qly_err=true;
          var skills_err=true;
          var platform_err=true;
          var links_err=true;
          var stat_err=true;
          var or_err=true;
          var cvpdf_err=true;
                      
          
          $('#fname').click(function(){
              fn_check();
          });
              
          $('#lname').keyup(function(){
              ln_check();
          });
          $('#mname').keyup(function(){
              mn_check();
          });
          
          
          $('#skills').focusout(function(){
                skills_check();
          }           
          );
          $('#skills').keyup(function(){
                skills_check();
          }           
          );
        
              
            
          $('#platform').keyup(function(){
              platform_check();
          });
          $('#platform').focusout(function(){
              platform_check();
          });
          $('#links').keyup(function(){
              links_check();
          });
          $('#project').keyup(function(){
              project_check();
          });
          $('#project').focusout(function(){
              project_check();
          });
          $('#org').keyup(function(){
              organization_check();
          });
                        
          
          
          function fn_check(){
              /*var firstname=$('#fname').val();
              if(firstname.length == ''){
                  $('#fn').show();
                  $('#fn').html("**firstname cannot be empty**");
                  $('#fn').focus();
                  fn_err=false;
                  return false;
              }else{
                  $('#fn').hide();
              }
              
              if((firstname.length<3) || (firstname.length>15)){
                  $('#fn').show();
                  $('#fn').html("**firstname must be between 3  to 15 character long**");
                  $('#fn').focus();
                  
                  
                  fn_err=false;
                  return false;
                         
              }else{
                  $('#fn').hide();
              }*/
          }
              
              //for lastname
          function ln_check(){
              var lastname=$('#lname').val();
              if(lastname.length == ''){
                  $('#ln').show();
                  $('#ln').html("**lastname cannot be empty**");
                  $('#ln').focus();
                  ln_err=false;
                  return false;
              }else{
                  $('#ln').hide();
              }
                        
              if(lastname.length<3 || lastname.length>10){
                  $('#ln').show();
                  $('#ln').html("**lastname must be between (1-10) character**");
                  $('#ln').focus();           
                  ln_err=false;
                  return false;
                         
              }else{
                  $('#ln').hide();
              }
          }
          
              
          function mn_check(){
              var middlename=$('#mname').val();
                                    
              if(middlename.length>10){
                  $('#mn').show();
                  $('#mn').html("**middlename must be between (1-10) character**");
                  $('#mn').focus();           
                  ln_err=false;
                  return false;
                         
              }else{
                  $('#mn').hide();
              }
          }
          
        function skills_check(){
              var skills=$('#skills').val();
              if(skills.length == ''){
                  $('#sk').show();
                  $('#sk').html("**skills cannot be empty**");
                  $('#sk').focus();
                  skills_err=false;
                  return false;
              }else{
                  $('#sk').hide();
              }
                
          }
        function project_check(){
              var project=$('#project').val();
              if(project.length == ''){
                  $('#pr').show();
                  $('#pr').html("**project name cannot be empty**");
                  $('#pr').focus();
                  project_err=false;
                  return false;
              }else{
                  $('#pr').hide();
              }
                        
          }
              function links_check(){
              var links=$('#links').val();
              if(links.length == ''){
                  $('#li').show();
                  $('#li').html("**enter project link if any**");
                  $('#li').focus();
                  links_err=false;
                  
              }else{
                  $('#li').hide();
              }
                        
          }
              function platform_check(){
              var platform=$('#platform').val();
              if(platform.length == ''){
                  $('#pl').show();
                  $('#pl').html("**platform cannot be empty**");
                  $('#pl').focus();
                  platform_err=false;
                  return false;
              }else{
                  $('#pl').hide();
              }
                        
          }      
           function organization_check(){
              var org=$('#org').val();
              if(org.length == ''){
                  $('#or').show();
                  $('#or').html("**enter organization name you have worked if any**");
                  $('#or').focus();
                  or_err=false;
                  
              }else{
                  $('#or').hide();
              }
                        
          }
            
              
              
              
              //submit button
              $("#submit").click(function(){
                 
                  //above function validation
                  ln_err=true;
                  mn_err=true;
                  project_err=true;
                  skills_err=true;
                  platform_err=true;
                  links_err=true;
                  or_err=true;
                  cvpdf_err=true;

                  
                  ln_check();
                  mn_check();
                  skills_check();
                  project_check();
                  platform_check();
                  
                  
                 /*$val=$("#stat").find(":selected").text();
                 if($val==0){
                     alert("please enter stat");
                 }*/
                 $exp=$("#exp").find(":selected").text();
                 $qly=$("#qly").find(":selected").text();
                 $stat=$("#stat").find(":selected").text();
                  
                 if($exp==0){
                $('#ex').show();
                $('#ex').html("**experiences cannot be empty**");
                $('#ex').focus(); 
                
                 }
                if($qly==0){
                $('#ql').show();
                $('#ql').html("**qualification cannot be empty**");
                $('#ql').focus(); 
                
                }  
                if($stat==0){
                $('#st').show();
                $('#st').html("**status cannot be empty**");
                $('#st').focus(); 
                
                }  
               /* if($exp==0 || $qly==0 || $stat==0){
                    return false;
                }*/
                  
                if((ln_err== true) && (mn_err==true) && (skills_err==true) && (project_err==true) && (platform_err==true) && ($exp==0 || $qly==0 || $stat==0)){
                      return true;
                  }else{
                      return false;
                  }  
             }); 
          
          });
          
    </script></body></html>