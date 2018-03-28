<?php
session_start();
?>



<?php
include_once("db/connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$myquery="select did from doctordetails where username='$username' and password='$password'";

$result=mysql_query($myquery);


if($row=mysql_fetch_array($result))
{
	$_SESSION['doctorid']=$row["did"];
	header("Location:doctorViewFormat.php");

	
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