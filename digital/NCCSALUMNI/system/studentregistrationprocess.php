<html>
    <head>
    </head>
<body>
    <?php
        $turegcode=$_POST['turegno'];
        include('MainClass.php');
        $obj=new MainClass;
        $con=$obj->connect_db();
        $sql="SELECT Email from studentrecord WHERE TURegCode='$turegcode'";
        $result = $con->query($sql);
     while($row = $result->fetch_assoc()) {
	       $email=$row["Email"];
         echo $email;
	    }
    ?>
   
    </body></html>