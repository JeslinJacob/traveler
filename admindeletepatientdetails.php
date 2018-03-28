<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `patientdetails` WHERE paid='$id'";

if(mysql_query($qry))
{
	mysql_close($con);
	?>

	<script>alert("deleted record");
	window.location.href='adminPatientViewFormat.php';
	
	</script>
	<?php
}
	


?>