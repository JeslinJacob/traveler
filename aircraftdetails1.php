<?php
include_once("db/connection.php");
$atype=$_POST["atype"];
$identificationnumber=$_POST["identificationnumber"];
$engintype=$_POST["engintype"];
$capacity=$_POST["capacity"];


echo"atype:.".$atype."<br>";
echo"identificationnumber:.".$identificationnumber."<br>";
echo"engintype:.".$engintype."<br>";
echo"capacity:.".$capacity."<br>";

$sql="INSERT INTO `aircraftdetails`(`atype`, `identificationnumber`, `engintype`, `capacity`) VALUES ('$atype','$identificationnumber','$engintype','$capacity')";

echo $sql;
 

if(!mysql_query($sql,$con))
{
	die('error'.mysql_error());
	
}
mysql_close($con);

?>