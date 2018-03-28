<?php
include_once("db/connection.php");
$qry="UPDATE `userdeatils` SET name='$_POST[name]',address='$_POST[address]',mob='$_POST[mob]',uemail='$_POST[uemail]',pemail='$_POST[pemail]',relation='$_POST[relation]',username='$_POST[username]',password='$_POST[password]' WHERE uid='$_POST[uid]'";
 
 if(mysql_query($qry))
 {
 	mysql_close($con);
 	?>
	<script>alert('update success');
	window.location.href='userViewFormat.php';
	
	</script>

 	<?php
 }



 ?>
