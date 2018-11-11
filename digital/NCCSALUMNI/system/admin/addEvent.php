<?php
include('C:\xampp\htdocs\digital\NCCSALUMNI\system\MainClass.php');
$obj = new MainClass;

$etitle = $_POST['evttitle'];
$edate = $_POST['evtdate'];
$etime = $_POST['evttime'];
$elocation = $_POST['evtlocation'];
$edescription = $_POST['evtdescription'];
/*$estatus = $_POST['evtstatus'];*/

$obj->events($etitle,$edate,$etime,$elocation,$edescription);
$successMessage="Event has been posted";
             echo "<script type='text/javascript'>alert(\"$successMessage\");";
             echo 'window.location.href="addEvent.html";';
             echo "</script>";
?>