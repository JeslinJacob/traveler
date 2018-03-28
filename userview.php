<?php
session_start();
?>



<?php
include_once("db/connection.php");
$sql="SELECT * FROM `userdeatils` where uid='$_SESSION[userid]'";
//echo $sql;
$result=mysql_query($sql);
echo "<table border='1'>;
<tr>
<th>Name</th>
<th>Address</th>
<th>mob</th>
<th>User email</th>
<th>Patient email</th>
<th>Relation</th>
<th>Username</th>
<th>password</th>

</tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['mob']."</td>";
echo "<td>".$row['uemail']."</td>";
echo "<td>".$row['pemail']."</td>";
echo "<td>".$row['relation']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['password']."</td>";
echo "<td><a href='edituserdetails.php?id=$row[uid]'>Edit</a></td>";
echo "</tr>";
}
//header('location:ulogin.php');	
mysql_close($con);
?>