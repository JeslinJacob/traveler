



<?php
include_once("db/connection.php");
$name=$_POST["name"];
$location=$_POST["location"];
$speciality=$_POST["speciality"];
$mob=$_POST["mob"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
echo"name:.".$name."<br>";
echo"location:.".$location."<br>";
echo"speciality:.".$speciality."<br>";
echo"mob:.".$mob."<br>";
echo"email:.".$email."<br>";

echo"username:.".$username."<br>";
echo"password:.".$password."<br>";

$sql="INSERT INTO `doctordetails`(`name`, `location`, `speciality`, `mob`, `email`, `username`, `password`)VALUES ('$name','$location','$speciality','$mob','$email','$username','$password')";

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