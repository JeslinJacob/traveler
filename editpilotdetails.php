<?php
include_once("db/connection.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM `pilotdetails` WHERE plid='$id'";
echo $sql;
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
	?>
	<html>
	<body>
	<form action="updatepilotdetails.php" method="POST">

	<table border="1">

  
  <tr>  
  <td>Name</td>
  <td><input type="text" name="name" value="<?php echo $row[1];?>"></td>
  </tr>
  <tr>  
  <td>Location</td>
  <td><input type="text" name="hours" value="<?php echo $row[2];?>"></td>
  </tr>
  <?php
   echo "<input type='hidden' name='plid' value='$id'>";
  ?>
   <tr>
 <td>Certification</td>
 <td><input type="text" name="certification" value="<?php echo $row[3];?>"></td>
 </tr>
  <tr>  
  <td>Phone number</td>
  <td><input type="text" name="noofaircraft" value="<?php echo $row[4];?>"></td> 
  <tr>  
  
 
 <tr>
 <td>Username</td>
 <td><input type="text" name="username" value="<?php echo $row[5];?>"></td>
 </tr>
 <tr>
 <td>Password</td>
 <td><input type="password" name="password" value="<?php echo $row[6];?>"> </td>
 </tr>

 <tr>
   <td colspan="1" align="center"></td>
   <td> <input type="submit" name="update" value="update"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}
?>