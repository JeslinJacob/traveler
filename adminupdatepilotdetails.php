<?php
include_once("db/connection.php");
$qry="UPDATE `pilotdetails` SET name='$_POST[name]',hours='$_POST[hours]',certification='$_POST[certification]',noofaircraft='$_POST[noofaircraft]',username='$_POST[username]',password='$_POST[password]' WHERE plid='$_POST[plid]'";
 

if (mysql_query($qry)) {
	mysql_close($con);
	?>

	<script>alert('updated succesfully');
	window.location.href='adminPilotViewFormat.php';
	
	</script>
	<?php
}
//mysql_close($con);

 ?>
