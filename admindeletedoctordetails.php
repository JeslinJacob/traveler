<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `doctordetails` WHERE did='$id'";
//echo $qry;
if(mysql_query($qry))
{
	mysql_close($con);
	?>

	<script>alert("deleted record");
	window.location.href='adminDoctorViewFormat.php';
	
	</script>
	<?php
}
	
?>