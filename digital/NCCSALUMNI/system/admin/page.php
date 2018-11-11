    <?php
        $tuid=$_GET['tuid'];
      include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
        $obj=new MainClass;
        $obj->registerRequestReject($tuid);
        header("location:admininbox.php");
?>
        
  