<?php
include_once("db/connection.php");
$qry="UPDATE `aircraftdetails` SET atype='$_POST[atype]',identificationnumber='$_POST[identificationnumber]',engintype='$_POST[engintype]',capacity='$_POST[capacity]' WHERE aid='$_POST[aid]'";
 echo $qry;
 mysql_query($qry);
 header('location:aircraftview.php')
//mysql_close($con);

 ?>
