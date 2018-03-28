<?php
include_once("db/connection.php");
$sql="SELECT * FROM `pilotdetails`";
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Name</th>
<th>Total Flight Hours</th>
<th>Certification</th>
<th>Number Of Aircraft</th>
<th>Username</th>
<th>password</th>

</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['hours']."</td>";
echo "<td>".$row['certification']."</td>";
echo "<td>".$row['noofaircraft']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td><a href='admineditpilotdetails.php?id=$row[plid]'>Edit</a></td>";
echo "<td><a href='admindeletepilotdetails.php?id=$row[plid]'>Delete</a></td>";
echo "</tr>";
}
//header('location:dlogin1.php');	
mysql_close($con);
?>
