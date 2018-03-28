<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `pilotdetails` WHERE plid='$id'";
if (mysql_query($qry)) {
	mysql_close($con);
	?>

	<script>alert('deleted succesfully');
	window.location.href='adminPilotViewFormat.php';
	
	</script>
	<?php
}

?>