<?php
include_once("db/connection.php");

 $reg=$_POST["reg"];

if($reg=="patientreg")
{
	header('location:PatientRegFormat.php');
}
else if ($reg=="userreg")
	{

		header('location:UserRegFormat.php');
}
elseif ($reg=="plreg") {
	header('location:PilotRegFormat.php');
}elseif ($reg=="docreg") {
	header('location:DoctorRegFormat.php');
}else{
	echo "select a valid option";

}

// echo"reg:.".$reg."<br>";

mysql_close($con);
?>