<?php
include_once("db/connection.php");
$username=$_POST["username"];

$password=$_POST["password"];
$myquery="select loginid from login where username='$username' and password='$password'";
//echo $myquery;
$result=mysql_query($myquery);


if(!$row=mysql_fetch_array($result))
{
	//echo "login".$_SESSION['uid']=$username;
	// echo "login is successfull  welcome ";
	$_SESSION['loginid']=$row["loginid"];
	header("Location:adminMainPage.php");
	// echo "<br>";
	// echo "<td><a href='adminuserview.php'> User Details </a></td>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<td><a href='adminpatientview.php'> Patient Details </a></td>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<td><a href='admindoctorview.php'> Doctor Details </a></td>";
	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// echo "<td><a href='adminpilotview.php'> Pilot Details </a></td>";
	
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