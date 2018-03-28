<?php
include_once("db/connection.php");
$id=$_GET['id'];
$qry="DELETE FROM `userdeatils` WHERE uid='$id'";
//echo $qry;


if(mysql_query($qry))
{
	mysql_close($con);
	?>

	<script>alert("deleted record");
	window.location.href='adminUserViewFormat.php';
	
	</script>
	<?php
}


?>