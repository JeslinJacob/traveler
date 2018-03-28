



<?php
include_once("db/connection.php");
$name=$_POST["name"];
$address=$_POST["address"];
$mob=$_POST["mob"];
$uemail=$_POST["uemail"];
$pemail=$_POST["pemail"];
$relation=$_POST["relation"];
$username=$_POST["username"];
$password=$_POST["password"];
echo"name:.".$name."<br>";
echo"address:.".$address."<br>";
echo"relation:.".$relation."<br>";
echo"mob:.".$mob."<br>";
echo"uemail:.".$uemail."<br>";
echo"pemail:.".$pemail."<br>";
echo"username:.".$username."<br>";
echo"password:.".$password."<br>";

$sql="INSERT INTO `userdeatils`(`name`, `address`, `mob`, `uemail`,`pemail`, `relation`, `username`, `password`) VALUES ('$name','$address','$mob','$uemail','$pemail','$relation','$username','$password')";

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