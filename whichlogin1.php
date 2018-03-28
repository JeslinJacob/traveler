<?php
include_once("db/connection.php");

 $login=$_POST["login"];
 echo "hh  : ".$login;

if($login=="palog")
{
	header('location:PatientLoginFormat.php');
}
else if ($login=="userlog")
	{

		header('location:UserLoginFormat.php');
}
elseif ($login=="pllog") {
	header('location:PilotLoginFormat.php');
}elseif ($login=="doclog") {
	header('location:DoctorLoginFormat.php');
}elseif ($login=="alogin") {

	header('location:AdminLoginFormat.php');
}
else{
	echo "select a valid option";

}

// echo"reg:.".$reg."<br>";

mysql_close($con);
?>