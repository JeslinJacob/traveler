<?php
include_once("db/connection.php");
$name=$_POST["name"];
$address=$_POST["address"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$mcondition=$_POST["mcondition"];
$username=$_POST["username"];
$password=$_POST["password"];

echo"name:.".$name."<br>";
echo"address:.".$address."<br>";
echo"mob:.".$mob."<br>";

echo"email:.".$email."<br>";
echo"mcondition:.".$mcondition."<br>";
echo"username:.".$username."<br>";
echo"password:.".$password."<br>";
$sql="INSERT INTO `patientdetails`( `name`, `address`,`mob`, `email`, `mcondition`, `username`, `password`) VALUES ('$name','$address','$mob','$email','$mcondition','$username','$password')";

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