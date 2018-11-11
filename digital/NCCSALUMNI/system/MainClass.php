<?php
Class mainClass{
	public $host="localhost";
	public $user="root";
	public $pass="";
	public $db="digital";

	public function connect_db(){
		$con=new Mysqli($this->host,$this->user,$this->pass,$this->db);
		if($con->error){
			echo $con->error;
		}
		else{
			return $con;
		}
	}

	public function adminLogin($Username,$Password)
	{
		$con=$this->connect_db();
		$sql="SELECT * FROM adminlogintable WHERE Username='$Username' AND Password='$Password'";
		$res=$con->query($sql);
		if($res->num_rows>0){
			$row=$res->fetch_object();
			Session_start();
			$_SESSION['Username']=$row->Username;
			return 'Success';
		}
	}

	public function adminRegistration($fullname,$username,$password,$cfpassword)
	{
		$con=$this->connect_db();
		if ($password!=$cfpassword) {
			header("location:wrong.html");
		} 
		else {
			$sql="INSERT INTO adminregistertable (Fullname,Username,Password,ConfirmPassword) values 
			('$fullname','$username','$password','$cfpassword')";
			$con->query($sql);
			if($con->error){
				echo $con->error;
			}
			$this->indexAddAdmin($username,$password);
		}
		$con->close();
	}

	public function indexAddAdmin($uname,$pwd) {
		$con=$this->connect_db();
		$sql="INSERT INTO adminlogintable (Username,Password) values('$uname','$pwd')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	}

	public function userLogin($Username,$Password){
		$con=$this->connect_db();
		$sql="SELECT * FROM userlogintable WHERE Username='$Username'";// AND Password='$Password'";
		
        $res=$con->query($sql);
		if($res->num_rows>0){
			$row=$res->fetch_object();
            session_start();
			$_SESSION['username']=$row->Username;
            return 'Success';
            /*echo password_verify($Password,$row->Password);
			
            if(password_verify($Password,$row->Password)){	
                
        }*/
			/*session_start();
			$_SESSION['username']=$row->Username;
            return 'Success';
*/		}
            
        
	}

	public function userRegister($TUNumber,$Password,$CFPassword) {
		$con=$this->connect_db();

		if ($Password!=$CFPassword) {
			header("location:wrong.html");
		} 
		else {
			$sql = "INSERT into userRegistrationForm (TURegCode,Password,ConfirmPassword) values ('$TUNumber','$Password','$CFPassword')";
			$con->query($sql);
			if($con->error){
				echo $con->error;
				header("location:index.html");
			}
			$this->indexAddUser($TUNumber,$Password);
		}
		$con->close();
	}

	public function insertStudentRecords($TURegCode,$FirstName,$MiddleName,$LastName,$Address,$MobileNumber,$ResidentNumber,$Gender,$Dateofbirth,$Email){
		$con=$this->connect_db();
		$sql="INSERT INTO studentrecord (TURegCode,FirstName,MiddleName,LastName,Address,MobileNumber,ResidentNumber,Gender,DOB,Email) values ('$TURegCode','$FirstName','$MiddleName','$LastName','$Address','$MobileNumber','$ResidentNumber','$Gender','$Dateofbirth','$Email')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}

		$this->addRegCode($TURegCode,$FirstName,$MiddleName,$LastName);
		$this->updatedisplayPurpose($TURegCode);
		return 'Success';
		
	}

	public function addRegCode($regno,$fn,$mn,$ln) {
		$con=$this->connect_db();
		$sql="INSERT INTO studentdata (TURegCode,FirstName,MiddleName,LastName) values ('$regno','$fn','$mn','$ln')";
		$con->query($sql);
		if($con->error) {
			echo $con->error;
		}
	}

	public function indexAddUser($tunum,$pwd) {
		$con=$this->connect_db();
		$sql="INSERT INTO userlogintable (Username,Password) values('$tunum','$pwd')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	}

	public function displayStudentRecordTable(){
		$con=$this->connect_db();
		$sql = "SELECT * FROM studentrecord";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration Number</th><th>Full Name</th><th>Address</th><th>Phone</th><th>Gender</th><th>Date of Birth</th><th>Email</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Address"]."</td><td>" . $row["Phone"]."</td><td>" . $row["Gender"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Email"]. "</td></tr>";
			}
			echo "</table></center>";
		} else {
			echo "0 results";
		}
	}

	public function searchStudents($searchOption,$searchValue){
		$con=$this->connect_db();
		$sql="SELECT * FROM studentrecord WHERE " .$searchOption. " LIKE '%".$searchValue."%'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration Number</th><th>Full Name</th><th>Address</th><th>Phone</th><th>Gender</th><th>Date of Birth</th><th>Email</th><th>Area of Project</th> </tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Address"]."</td><td>" . $row["Phone"]."</td><td>" . $row["Gender"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["Email"]."</td><td>".$row["Projects"]. "</td></tr>";


			}
			echo "</table> </center>";
		}
		else{
			echo "<center><table><tr><th>TU Registration Number</th><th>Full Name</th><th>Address</th><th>Phone</th><th>Gender</th><th>Date of Birth</th><th>Email</th></tr></table></center>";
		}
	}
/*
	public function searchEmployedStudentTable($name){
		$con=$this->connect_db();
		$sql="SELECT * FROM DBEmployed WHERE FullName LIKE'%" . $name  ."%'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Organization</th><th>Qualification</th><th>Skills</th><th>Income</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Organization"]."</td><td>" . $row["Qualification"]."</td><td>" . $row["Skills"]. "</td><td>" . $row["Income"]."</td></tr>";
			}
			echo "</table></center>";
		}
		else{
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Organization</th><th>Qualification</th><th>Skills</th><th>Income</th></tr></table></center>";
		}
	}

	public function searchSelfEmployedStudentTable($name){
		$con=$this->connect_db();
		$sql="SELECT * FROM DBSelfEmployed WHERE FullName LIKE'%" . $name  ."%'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Business</th><th>Number of Employee</th><th>Skills</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Business"]."</td><td>" . $row["NoOfEmployee"]."</td><td>" . $row["Skills"]."</td></tr>";
			}
			echo "</table></center>";
		}
		else{
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Business</th><th>Number of Employee</th><th>Skills</th></tr></table></center>";
		}
	}

	public function searchUnemployedStudentTable($name){
		$con=$this->connect_db();
		$sql="SELECT * FROM DBUnemployed WHERE FullName LIKE'%" . $name  ."%'";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Reason</th><th>Seek</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Reason"]."</td><td>" . $row["Seek"]."</td></tr>";
			}
			echo "</table></center>";
		}
		else{
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Reason</th><th>Seek</th></tr></table></center>";
		}
	}*/

	public function displayEmployedTable(){
		$con=$this->connect_db();
		$sql = "SELECT * FROM employed";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Qualification</th><th>Skills</th><th>Experience</th><th>Organization</th><th>Satisfaction</th><th>Projects</th><th>Links</th><th>Platform</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Qualification"]."</td><td>" . $row["Skills"]."</td><td>" . $row["Experience"]."</td><td>" . $row["Organization"]. "</td><td>".$row["Satisfaction"]."</td><td>".$row["projects"]."</td><td>".$row["links"]."</td><td>".$row["platform"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
	}

	/*public function displaySelfEmployedTable(){
		$con=$this->connect_db();
		$sql = "SELECT * FROM SelfEmployed";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration Number</th><th>Full Name</th><th>Qualification</th><th>Skills</th><th>Experience</th><th>Organization</th><th>Company Started</th><th>Projects</th><th>Links</th><th>Platform</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Qualification"]."</td><td>" . $row["Skills"]."</td><td>" . $row["Experience"]. "</td><td>".$row["Organization"]."</td><td>".$row["CompanyStarted"]."</td><td>".$row["projects"]."</td><td>".$row["links"]."</td><td>".$row["platform"]."</td></tr>";
			}
			echo "</table></center>";
		} else {
			echo "0 results";
		}
	}

	//esma change gareko cha
	public function displayUnemployedTable(){
		$con=$this->connect_db();
		$sql = "SELECT * FROM unemployed";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
			echo "<center><table><tr><th>TU Registration No</th><th>Full Name</th><th>Qualifications</th><th>Skills</th><th>Experience</th><th>Reason</th><th>Seeking Job</th><th>Projects</th><th>Links</th><th>Platform</th></tr>";
	    // output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["TURegCode"]. "</td><td>" . $row["FullName"]. "</td><td>" . $row["Qualification"]."</td><td>" . $row["Skills"]."</td><td>".$row["Experience"]."</td><td>".$row["Reason"]."</td><td>".$row["Seeking"]."</td><td>".$row["projects"]."</td><td>".$row["links"]."</td><td>".$row["platform"]."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 results";
		}
	}*/
	public function getContact($fn,$ln,$adr,$sub) {
		$con=$this->connect_db();
		$sql="INSERT INTO contacttable (FirstName,LastName,Address,Subject) values ('$fn','$ln','$adr','$sub')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	}
	
	//yo change gareko cha
/*	public function delEmp($reg) {
		$con=$this->connect_db();
		$q = "DELETE FROM employed WHERE TURegCode='$reg'"; 
		$con->query($q);
		if($con->error){
			echo $con->error;
		}
	}//end of delEmp

	//king: yo change gareko cha
	public function delSelf($reg) {
		$con=$this->connect_db();
		$q = "DELETE FROM selfemployed WHERE TURegCode='$reg'"; 
		$con->query($q);
		if($con->error){
			echo $con->error;
		}
	}//end of delSelf

	//king: yo change gareko cha
	public function delUnEmp($reg) {
		$con=$this->connect_db();
		$q = "DELETE FROM unemployed WHERE TURegCode='$reg'"; 
		$con->query($q);
		if($con->error){
			echo $con->error;
		}
	}//end of delUnEmp*/

 	//employed table ma update gareko cha!  
	/*public function employedUpdate($tu,$fn,$quality,$skl,$ex,$org,$satisfied,$projects,$links,$platform) {
		$con=$this->connect_db();
		$query = "INSERT into employed (TURegCode,FullName,Qualification,Skills,Experience,Organization,Satisfaction,projects,links,platform) 
		values ($tu,$fn,$quality,$skl,$ex,$org,$satisfied,$projects,$links,$platform)";	

		$con->query($query);
		if($con->error){
			echo $con->error;
		}

		$this->delSelf($tu);
		$this->delUnemp($tu);	
	} //end of employedUpdate

	//eta change gareko cha hai
	public function selfEmployedUpdate($tu,$fn,$quality,$skl,$ex,$org,$number,$projects,$links,$platform) {
		$con=$this->connect_db();
		$query = "INSERT into selfemployed (TURegCode,FullName,Qualification,Skills,Experience,Organization,CompanyStarted,projects,links,platform) 
		values ($tu,$fn,$quality,$skl,$ex,$org,$number,$projects,$links,$platform)";	
		$con->query($query);
		if($con->error){
			echo $con->error;
		}

		$this->delEmp($tu);
		$this->delUnemp($tu);

	}//end of selfEmployedUpdate

	//eta change gareko cha hai
	public function unemployedUpdate($tu,$fn,$quality,$skl,$ex,$why,$seek,$projects,$links,$platform) {
		$con=$this->connect_db();
		$query = "INSERT into unemployed (TURegCode,FullName,Qualification,Skills,Experience,Reason,Seeking,projects,links,platform) 
		values ($tu,$fn,$quality,$skl,$ex,$why,$seek,$projects,$links,$platform)";	
		$con->query($query);
		if($con->error){
			echo $con->error;
		}

		$this->delSelf($tu);
		$this->delEmp($tu);

	}//end of unemployedUpdate*/

	public function requestRegistration($turegno,$email){
		$con=$this->connect_db();
		$sql="INSERT INTO registrationrequest (TURegCode,RegistrationEmail) values('$turegno','$email')";
		$con->query($sql);
		if($con->error){
			$Message="Your request is already submitted! Please check your mail";
			echo "<script type='text/javascript'>alert(\"$Message\");";
			echo 'window.location.href="index.html";';
			echo "</script>";  
		}
		/*return 'Success';*/
	}

	public function registerRequestReject($turegno){
		$con=$this->connect_db();
		$sql="DELETE  from registrationrequest where TURegCode='$turegno'";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}

	}
	/*This inserts the new accepted request in the userlogin table*/
	public function userlogintable($username,$password){
		$con=$this->connect_db();
		$sql="INSERT INTO userlogintable (Username,Password) values('$username','$password')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
            
		}
		/*return 'Success';*/
	}

	//esle diplayPurpose table ma TURegCode add garcha, admin le student add garda yo table ma TURegCOde add garcha
	public function updatedisplayPurpose($regno) {
		$con=$this->connect_db();
        $sql="INSERT INTO displayPurpose (TURegCode) values ('$regno')";
        $con->query($sql);
        if($con->error){
            echo $con->error;
        }
	}

    //for displaying student inforamtions
    //es bata displayPurpose table ma information update huncha when student update their information
	public function displayPurpose($skl,$projects,$links,$platform){
		$con=$this->connect_db();
		$sql="UPDATE displayPurpose SET Skills='$skl',projects='$projects',links='$links',platform='$platform'";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}

    }//end of displayPurpose

    //employed table ma data insert garna ko lagi
  /*  public function employedTable($tu,$fn,$quality,$skl,$ex,$org,$satisfied,$projects,$links,$platform) {
    	$con=$this->connect_db();
    	$sql="INSERT INTO employed (TURegCode,FullName,Qualification,Skills,Experience,Organization,Satisfaction,projects,links,platform) values ('$tu','$fn','$quality','$skl','$ex','$org','$satisfied','$projects','$links','$platform')";
    	$con->query($sql);
    	if($con->error){
    		echo $con->error;
    	}
	}//end of employedTable
*/
	//slefemployed table ma data insert garna ko lagi
	/*public function selfemployedTable($tu,$fn,$quality,$skl,$ex,$org,$time,$projects,$links,$platform) {
		$con=$this->connect_db();
		$sql="INSERT INTO selfemployed (TURegCode,FullName,Qualification,Skills,Experience,Organization,CompanyStarted,projects,links,platform) values ('$tu','$fn','$quality','$skl','$ex','$org','$time','$projects','$links','$platform')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	}//end of selfemployedTable

	//unemployed table ma data insert garna ko lagi
	public function unemployedTable($tu,$fn,$quality,$skl,$ex,$why,$seek,$projects,$links,$platform) {
		$con=$this->connect_db();
		$sql="INSERT INTO unemployed (TURegCode,FullName,Qualification,Skills,Experience,Reason,Seeking,projects,links,platform) values ('$tu','$fn','$quality','$skl','$ex','$why','$seek','$projects','$links','$platform')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	}*/

	//InsertData into studentData table lai update gareko le yo method lai comment gareko ho
	/*public function insertData($tu,$fn,$mn,$ln,$quality,$col,$cr,$skl,$ex,$org,$projects,$links,$platform,$stat,$location,$path) {
		$con=$this->connect_db();
		$query = "INSERT into studentdata (TURegCode,FirstName,MiddleName,LastName,Qualification,College,Course,Skills,Experience,Organization,projects,platform,links,Status,location,path) 
		values ('$tu','$fn','$mn','$ln','$quality','$col','$cr','$skl','$ex','$org','$projects','$links','$platform','$stat','$location','$path')";	
		$con->query($query);
		if($con->error){
			echo $con->error;
		}*/
		//displayPurpose($tu,$skl,$projects,$links,$platform);

	/*}//end of insertData*/

	//yo update garna try gareko
	/*public function updateData($tu,$fn,$mn,$ln,$quality,$col,$cr,$skl,$ex,$org,$projects,$links,$platform,$stat) {
		$con=$this->connect_db();
		$query = "UPDATE studentdata SET FirstName='$fn',MiddleName='$mn',LastName='$ln',Qualification='$quality',College='$col',Course='$cr',Skills='$skl',Experience='$ex',Organization='$org',projects='$projects',platform='$platform',links='$links',Status='$stat' WHERE TURegCode='$tu'";	
		$con->query($query);
		if($con->error){
			echo $con->error;
		}
	}//end of updateData*/
/*To checck whether the user is already registered?*/
    public function checkUser($turegno){
       $con=$this->connect_db();
		$sql="SELECT * FROM userlogintable WHERE Username='$turegno' ";
		$res=$con->query($sql);
		if($res->num_rows>0){
			$row=$res->fetch_object();
            return 'Success';
		}
	}
	 /*If the user is not registered then this function will be called*/
    public function registrationRequest($turegno,$email){
        $con=$this->connect_db();
        $query="INSERT INTO registrationrequest (TURegCode,RegistrationEmail,Date) values('$turegno','$email',now())";
        	$con->query($query);
			if($con->error)
            {
				 echo $con->error;
            }
        else{
            return 'Success';
        }
      
    }
	
	/*Yo euta thapnu parxa yesle request accept bhayo bhane table bata request delte garxa*/
public function deleteregistrationRequest($tucode){
    $con=$this->connect_db();
    $sql="DELETE  FROM registrationrequest WHERE TURegCode='$tucode'";
    $con->query($sql);
    if($con->error){
        echo $con->error;
        
    }
}

public function updatePassword($username,$password) {
	$con=$this->connect_db();
	  
		
    if(!$con->error){
        echo $con->error;
        $sql = "UPDATE userlogintable SET Password='$password' WHERE Username='$username'";
		$con->query($sql);
        return 'Success';
    }
	}
    
    /*Yo method le student ko profile ko information update garxa*/
    
    public function updateProfile($tu,$fn,$mn,$ln,$quality,$col,$cr,$skl,$ex,$OrganizationName,$StartDate,$LeaveDate,$projects,$links,$platform,$stat,$location,$path){
        $con=$this->connect_db();
        $sql="UPDATE studentdata SET MiddleName='$mn',LastName='$ln',Qualification='$quality',College='$col',Course='$cr',Skills='$skl',Experience='$ex',OrganizationName='$OrganizationName',JoinedDate='$StartDate',ResignedDate='$LeaveDate',projects='$projects',platform='$platform',links='$links',Status='$stat',location='$location',path='$path' WHERE TURegCode='$tu'";
        $con->query($sql);
        if($con->error){
            echo $con->error;
        }
        else{
        	$this->updateStudentRecord($tu,$mn,$ln);
            //$this->insertProjectDisplay($tu,$skl,$links,$projects,$platform);
            return 'Success';
        }
    }

    //esle stduentdata ma update garyo vane studentrecord ma pani update gardincha ! (middlename and lastname !!)
    public function updateStudentRecord($tu,$mn,$ln) {
    	$con=$this->connect_db();
        $sql="UPDATE studentrecord SET MiddleName='$mn',LastName='$ln' WHERE TURegCode='$tu'";
        $con->query($sql);
        if($con->error){
            echo $con->error;
        }
    }
    /* public function insertProjectDisplay($tu,$skl,$links,$projects,$platform) {
    	$con=$this->connect_db();
        $sql="UPDATE displaypurpose SET Skills='$skl',projects='$projects' links='$links',platform='$platform' WHERE TURegCode='$tu'";
        $con->query($sql);
        if($con->error){
            echo $con->error;
        }
    }*/
    
    
    
	
    //yo event details haru insert garna ko lagi
	public function events($etitle,$edate,$etime,$elocation,$edescription) {
		$con=$this->connect_db();
		$sql = "INSERT into eventdetails (Title,EventDate,EventTime,Location,Description) VALUES ('$etitle','$edate','$etime','$elocation','$edescription')";
		$con->query($sql);
		if($con->error){
			echo $con->error;
		}
	} 
    
    

}//end of mainClass
?>