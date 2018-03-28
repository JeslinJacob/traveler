<?php
include_once("db/connection.php");
$sql=("SELECT * FROM flightbooking");
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

//echo "<td><a href='#'>Get conformation Email</a></td>";
echo "</tr>";
}

mysql_close($con);
?>