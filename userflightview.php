<?php
session_start();
?>

<?php
include_once("db/connection.php");
$sql=("SELECT * FROM flightbooking where pemail in (select pemail from userdeatils where uid='$_SESSION[userid]')");
//$sql=("SELECT * FROM flightbooking ");
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Name</th>
<th>Date of Journey</th>
<th>Reporting Time</th>
<th>Time of Takeoff</th>
<th>Date of Arrival</th>
<th>Amount of Goods</th>

</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['reportingtime']."</td>";
echo "<td>".$row['takeoff']."</td>";
echo "<td>".$row['arrival']."</td>";
echo "<td>".$row['goods']."</td>";

echo "<td><a href='usergetemail.php?name=".$row['name']."&date=".$row['date']."&reportingtime=".$row['reportingtime']."&takeoff=".$row['arrival']."&arrival=".$row['arrival']."&goods=".$row['goods']."'>Get conformation Email</a></td>";
echo "</tr>";
}

mysql_close($con);
?>