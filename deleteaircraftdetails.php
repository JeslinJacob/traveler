<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `aircraftdetails` WHERE aid='$id'";
//echo $qry;
if(mysql_query($qry))
{
	echo "delete successfully";
}
header('location:aircraftview.php');	
mysql_close($con);

?>