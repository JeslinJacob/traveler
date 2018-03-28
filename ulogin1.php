<?php
session_start();
?>



<?php
include_once("db/connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$myquery="select uid,uemail from userdeatils where username='$username' and password='$password' and status=1";
//echo $myquery;
$result=mysql_query($myquery);


if($row=mysql_fetch_array($result))
{
	//echo "login".$_SESSION['uid']=$username;
	// echo "login is successfull  welcome ";
	$_SESSION['userid']=$row["uid"];
	$_SESSION['useremail']=$row["uemail"];
	header('Location:userViewFormat.php');
	// echo "<td><a href='userview.php'> my details </a></td>";
	// echo"<br>";
 //    echo "<td><a href='userflightview.php'> view booking </a></td>";
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