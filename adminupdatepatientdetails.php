<?php
include_once("db/connection.php");
$qry="UPDATE `patientdetails` SET name='$_POST[name]',address='$_POST[address]',mob='$_POST[mob]',email='$_POST[email]',mcondition='$_POST[mcondition]',username='$_POST[username]',password='$_POST[password]' WHERE paid='$_POST[paid]'";

if(mysql_query($qry))
 {
 	?>

	<script>alert('details updated');
	window.location.href='adminPatientViewFormat.php';
	
	</script>
	<?php
 }
 // header('location:adminpatientview.php')
//mysql_close($con);

 ?>
