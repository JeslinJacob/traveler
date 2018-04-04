<?php
include_once("db/connection.php");
$qry="UPDATE `aircraftdetails` SET atype='$_POST[atype]',identificationnumber='$_POST[identificationnumber]',engintype='$_POST[engintype]',capacity='$_POST[capacity]' WHERE aid='$_POST[aid]'";


 if(mysql_query($qry))
 {
 	?>

	<script>alert('succesfully updated');
	window.location.href='adminAircraftViewFormat.php';
	
	</script>
	<?php
		

 }


 ?>
