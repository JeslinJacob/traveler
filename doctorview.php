<?php
session_start();
?>



<?php
include_once("db/connection.php");
$sql="SELECT * FROM `doctordetails` WHERE  did='$_SESSION[doctorid]'";
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Name</th>
<th>Location</th>
<th>Speciality</th>
<th>Phone</th>
<th>Email</th>
<th>Username</th>
<th>password</th>

</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['location']."</td>";
echo "<td>".$row['speciality']."</td>";
echo "<td>".$row['mob']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td><a href='editdoctersdetails.php?id=$row[did]'>Edit</a></td>";
echo "</tr>";
}
//header('location:dlogin1.php');	
mysql_close($con);
?>