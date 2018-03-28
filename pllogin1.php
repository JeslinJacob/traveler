<?php
session_start();
?>



<?php
include_once("db/connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$myquery="select plid from pilotdetails where username='$username' and password='$password'";
//echo $myquery;
$result=mysql_query($myquery);


if($row=mysql_fetch_array($result))
{
	//echo "login".$_SESSION['uid']=$username;
	
	$_SESSION['pilotid']=$row["plid"];
	?>

	<script>alert('login success');
	window.location.href='pilotViewFormat.php';
	
	</script>
	<?php
	 
	
}
else
	{
	?>

	<script>alert('wrong username and password');
//window.location.href='login.php';
	
	</script>
	<?php
		
		
	}
?>