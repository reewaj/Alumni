<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj=new MainClass;
$con=$obj->connect_db();

$tu = $_POST['regno'];
$fn = $_POST['fullname'];
$ex = $_POST['exp'];
/*
$skl = count($_POST['skills']);
*/
$quality = $_POST['qly'];
$stat = $_POST['stat'];
$number=count($_POST['skills']);//skills[]
$number2=count($_POST['projects']);
$number3=count($_POST['links']);
$number4=count($_POST['links']);

/*$con=$this->connect_db();
		$sql="INSERT INTO employed (TURegCode,FullName,Qualification,Skills,Experience,Organization,Satisfaction) values ('$tu','$fn','$quality','$skl','$ex','$org','$satisfied')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}*/
$var=0;
$var=array();
for($i=0;$i<$number;$i++){
    
    if(trim($_POST['skills'][$i] != '')){
       
			/*$sql = "INSERT INTO employed(Skills,) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
			mysqli_query($connect, $sql);*/
        $var[$i]=$_POST["skills"][$i];
        
        
    }
 
}
 $skl=implode(":::",$var);

$var2=0;
$var2=array();
for($j=0;$j<$number2;$j++){
    
    if(trim($_POST['projects'][$j] != '')){
       
        $var2[$j]=$_POST["projects"][$j];
        
        
    }
 
}
 $projects=implode(" ,-, ",$var2);

$var3=0;
$var3=array();
for($a=0;$a<$number3;$a++){
    
    if(trim($_POST['links'][$a] != '')){
       
        $var3[$a]=$_POST["links"][$a];
        
        
    }
 
}
 $links=implode(":::",$var3);

$var4=0;
$var4=array();
for($c=0;$c<$number4;$c++){
    
    if(trim($_POST['platform'][$c] != '')){
       
        $var4[$c]=$_POST["platform"][$c];
        
        
    }
 
}
 $platform=implode(":::",$var4);


        

$obj->displayPurpose($tu,$skl,$projects,$links,$platform);
if($stat == 'Employed') {
	$org = $_POST['orgn'];
	$satisfied = $_POST['satisfy'];

	$obj->employedTable($tu,$fn,$quality,$skl,$ex,$org,$satisfied,$projects,$links,$platform);
    header("location:studentpage.html");
}
else if($stat == 'Self-Employed') {
	$org = $_POST['orgn'];
	$number = $_POST['time'];
	$obj->selfemployedTable($tu,$fn,$quality,$skl,$ex,$org,$number,$projects,$links,$platform);
    header("location:studentpage.html");
    
}
else if($stat == 'Unemployed') {
	$why = $_POST['why'];
	$seek = $_POST['look'];
	$obj->unemployedTable($tu,$fn,$quality,$skl,$ex,$why,$seek,$projects,$links,$platform);
    header("location:studentpage.html");
}


?>
