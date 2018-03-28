<?php
include_once("db/connection.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM `aircraftdetails` WHERE aid='$id'";
echo $sql;
$result=mysql_query($sql);
if($row=mysql_fetch_array($result))
{
	?>
	<html>
	<body>
	<form action="updateaircraftdetails.php" method="POST">

	<table border="1">

  
  <tr>  
  <td>Aircraft Type</td>
  <td><input type="text" name="atype" value="<?php echo $row[1];?>"></td>
  </tr>
  <tr>  
  <td>Ientificationnumber</td>
  <td><input type="text" name="identificationnumber" value="<?php echo $row[2];?>"></td>
  </tr>
  <?php
   echo "<input type='hidden' name='aid' value='$id'>";
  ?>
   <tr>
 <td>Engintype</td>
 <td><input type="text" name="engintype" value="<?php echo $row[3];?>"></td>
 </tr>
  <tr>  
  <td>Capacity</td>
  <td><input type="text" name="capacity" value="<?php echo $row[4];?>"></td> 
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