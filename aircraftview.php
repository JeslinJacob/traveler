


<?php
include_once("db/connection.php");
$sql="SELECT * FROM `aircraftdetails`";
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Aircraft Type</th>
<th>Identification Number</th>
<th>Engin Type</th>
<th>Capacity</th>


</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['atype']."</td>";
echo "<td>".$row['identificationnumber']."</td>";
echo "<td>".$row['engintype']."</td>";
echo "<td>".$row['capacity']."</td>";

echo "<td><a href='editaircraftdetails.php?id=$row[aid]'>Edit</a></td>";  
echo "<td><a href='deleteaircraftdetails.php?id=$row[aid]'>Delete</a></td>";
echo "</tr>";
}
//header('location:dlogin1.php');	
mysql_close($con);
?>