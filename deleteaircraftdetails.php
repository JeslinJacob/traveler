<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `aircraftdetails` WHERE aid='$id'";
//echo $qry;
 if(mysql_query($qry))
 {
 	?>

	<script>alert('succesfully deleted');
	window.location.href='adminAircraftViewFormat.php';
	
	</script>
	<?php
		

 }

?>