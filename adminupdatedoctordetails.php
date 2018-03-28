<?php
include_once("db/connection.php");
$qry="UPDATE `doctordetails` SET name='$_POST[name]',location='$_POST[location]',speciality='$_POST[speciality]',mob='$_POST[mob]',email='$_POST[email]',username='$_POST[username]',password='$_POST[password]' WHERE did='$_POST[did]'";

 if(mysql_query($qry))
 {
 	mysql_close($con);
 	?>

	<script>alert('updated successfully');
	window.location.href='adminDoctorViewFormat.php';
	
	</script>
	<?php
		
 }

//mysql_close($con);

 ?>
