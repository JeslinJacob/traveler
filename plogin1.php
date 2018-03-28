<?php
session_start();
?>


<?php
include_once("db/connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$myquery="select paid,email  from patientdetails where username='$username' and password='$password'";
//echo $myquery;
$result=mysql_query($myquery);


if($row=mysql_fetch_array($result))
{
	//echo "login".$_SESSION['uid']=$username;
	// echo "login is successfull  welcome ";
	$_SESSION['patientid']=$row["paid"];
	$_SESSION['patientemail']=$row["email"];
	header('Location:patientViewFormat.php');
	// echo "<td><a href='patientview.php'> my details </a></td>";
	// echo"<br>";
 //    echo "<td><a href='flightbooking.php'> flight booking </a></td>";
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