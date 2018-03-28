<?php
session_start();
?>



<?php
include_once("db/connection.php");
$sql="SELECT * FROM `patientdetails` where paid='$_SESSION[patientid]'";
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Name</th>
<th>Address</th>
<th>mob</th>
<th>email</th>

<th>Medical Condition</th>
<th>Username</th>
<th>password</th>

</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['mob']."</td>";
echo "<td>".$row['email']."</td>";

echo "<td>".$row['mcondition']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td><a href='editpatientdetails.php?id=$row[paid]'>Edit</a></td>";
echo "</tr>";
}

mysql_close($con);
?>