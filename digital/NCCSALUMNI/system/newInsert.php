<?php
//<span id="or" class="text-danger font-weight-bold"></span>
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;

$con=$obj->connect_db();

$tu = $_POST['regno'];

$fn = $_POST['firstname'];
$mn = $_POST['middlename'];
$ln = $_POST['lastname'];

$ex = $_POST['exp'];
$quality = $_POST['qly'];

$col = $_POST['uni'];
$cr = $_POST['crse'];

$stat = $_POST['stat'];
$orgn = $_POST['orgn'];
$sdate=$_POST['sdate'];
$ldate=$_POST['ldate'];

$number=count($_POST['skills']);//skills[]
$number2=count($_POST['projects']);
$number3=count($_POST['platform']);
$number4=count($_POST['links']);
$number5=count($_POST['orgn']);
$number6=count($_POST['sdate']);
$number7=count($_POST['ldate']);

$filename = $_FILES['cvpdf']['name'];
$temp_name = $_FILES['cvpdf']['tmp_name'];
$size = $_FILES['cvpdf']['size'];
$fileerror = $_FILES['cvpdf']['error'];
$filetype = $_FILES['cvpdf']['type'];

$fileext=explode('.',$filename);
$actualext=strtolower(end($fileext));

$allowed= array('pdf','doc','docx');


$imagefilename = $_FILES['image']['name'];
$image_temp_name = $_FILES['image']['tmp_name'];
$imagesize = $_FILES['image']['size'];
$imagefileerror = $_FILES['image']['error'];
$imagefiletype=$_FILES['image']['type'];

$imagefileext=explode('.',$imagefilename);
$imageactualext=strtolower(end($imagefileext));

$imageallowed= array('jpeg','JPEG','JPG','jpg','png','PNG');


/*
$location='pdf/'.$pdfcv;
move_uploaded_file($temp_name, $location);*/

		$var=0;
		$var=array();
		for($i=0;$i<$number;$i++){
			
			if(trim($_POST['skills'][$i] != '')){

			$var[$i]=$_POST["skills"][$i];
		}
	}
	$skl=implode(" | ",$var);

	$var2=0;
	$var2=array();
	for($j=0;$j<$number2;$j++){
		
		if(trim($_POST['projects'][$j] != '')){
			
			$var2[$j]=$_POST["projects"][$j];
	
		}
		
	}
	$projects=implode(" | ",$var2);

	$var3=0;
	$var3=array();
	for($a=0;$a<$number3;$a++){
		
		if(trim($_POST['platform'][$a] != '')){
			
			$var3[$a]=$_POST["platform"][$a];
			
			
		}
		
	}
	$platform=implode(" | ",$var3);

	$var4=0;
	$var4=array();
	for($c=0;$c<$number4;$c++){
		
		if(trim($_POST['links'][$c] != '')){
			
			$var4[$c]=$_POST["links"][$c];
			
			
		}
		
	}
	$links=implode(" | ",$var4);

$var5=0;
	$var5=array();
	for($d=0;$d<$number5;$d++){
		
		if(trim($_POST['orgn'][$d] != '')){
			
			$var5[$d]=$_POST["orgn"][$d];
			
			
		}
		
	}
	$OrganizationName=implode(" | ",$var5);

$var6=0;
	$var6=array();
	for($e=0;$e<$number5;$e++){
		
		if(trim($_POST['sdate'][$e] != '')){
			
			$var6[$e]=$_POST["sdate"][$e];
			
			
		}
		
	}
	$StartDate=implode(" | ",$var6);

$var7=0;
	$var7=array();
	for($f=0;$f<$number7;$f++){
		
		if(trim($_POST['ldate'][$f] != '')){
			
			$var7[$e]=$_POST["ldate"][$f];
			
			
		}
		
	}
	$LeaveDate=implode(" | ",$var7);


	//$obj->displayPurpose($tu,$skl,$projects,$links,$platform);
	
if(in_array($imageactualext,$imageallowed)){   //in_array($actualext,$allowed)
    if(in_array($actualext,$allowed)){
    if($fileerror===0 || $imagefileerror===0){
        if($size<1000000 ){
            //if we have to upload same name file again
            //$newfilename=uniqid('',true).".".$actualext;
            //$newimagename=uniqid('',true).".".$imageactualext;
            $location='admin/pdf/'.$filename;
            $path='admin/image/'.$imagefilename;
            move_uploaded_file($temp_name, $location);
            move_uploaded_file($image_temp_name, $path);

            $newlocation = trim($location,"admin/");
            
           
	      
           /* header("location:insert.php?uploadsuccess");*/
            $result= $obj->updateProfile($tu,$fn,$mn,$ln,$quality,$col,$cr,$skl,$ex,$OrganizationName,$StartDate,$LeaveDate,$projects,$links,$platform,$stat,$newlocation,$path);
            
            if($result=='Success'){
             $Message="Your information has been updated successfully";
             echo "<script type='text/javascript'>alert(\"$Message\");";
             echo 'window.location.href="viewProfile.php";';
             echo "</script>";
            }
            
        }
        else{
            echo "Error to upload the image";
                //header("location:insert.php");
        }
        
    }else{
        echo "there is an error uploading your file ";
        //header("location:insert.php");
    }
    
}
    echo "you cannot upload file of this type";
    
}else{
    echo "you cannot upload file of this type";
        //header("location:insert.php");

}
    
	?>
