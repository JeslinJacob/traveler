<?php
include_once("db/connection.php");
$qry="UPDATE `pilotdetails` SET name='$_POST[name]',hours='$_POST[hours]',certification='$_POST[certification]',noofaircraft='$_POST[noofaircraft]',username='$_POST[username]',password='$_POST[password]' WHERE plid='$_POST[plid]'";

 if(mysql_query($qry))
 {
 	?>

	<script>alert('update success');
	window.location.href='pilotViewFormat.php';
	
	</script>
	<?php
		
 }
 
//mysql_close($con);

 ?>
