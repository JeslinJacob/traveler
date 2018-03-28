



<?php
include_once("db/connection.php");
$name=$_POST["name"];
$hours=$_POST["hours"];
$certification=$_POST["certification"];
$noofaircraft=$_POST["noofaircraft"];
$username=$_POST["username"];
$password=$_POST["password"];
echo"name:.".$name."<br>";
echo"hours:.".$hours."<br>";
echo"certification:.".$certification."<br>";
echo"noofaircraft:.".$noofaircraft."<br>";
echo"username:.".$username."<br>";
echo"password:.".$password."<br>";

$sql="INSERT INTO `pilotdetails`( `name`, `hours`, `certification`, `noofaircraft`, `username`, `password`)VALUES ('$name','$hours','$certification','$noofaircraft','$username','$password')";

echo $sql;
 

if(!mysql_query($sql,$con))
{
	die('error'.mysql_error());
	
}
else
{
	header('location:mainpage.php');	
mysql_close($con);
}
//mysql_close($con);

?>