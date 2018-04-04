<?php
include_once("db/connection.php");
$atype=$_POST["atype"];
$identificationnumber=$_POST["identificationnumber"];
$engintype=$_POST["engintype"];
$capacity=$_POST["capacity"];

$sql="INSERT INTO `aircraftdetails`(`atype`, `identificationnumber`, `engintype`, `capacity`) VALUES ('$atype','$identificationnumber','$engintype','$capacity')";


 

if(!mysql_query($sql,$con))
{
	die('error'.mysql_error());
	
}
else
	{
		mysql_close($con);
	?>

	<script>alert('sussfully added');
	window.location.href='adminAddAircraftDetailsFormat.php';
	
	</script>
	<?php
		
		
	}


?>