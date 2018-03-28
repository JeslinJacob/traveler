<html>
<head>
<title>Aircraft Details</title>
<form action="aircraftdetails1.php" method="post" enctype="multipart/form-data">  
</head>
<body>
<h1>Aircraft Details</h1>
<table border="1">
<tr>
        <td> Aircraft type</td>
        <td><input type="text" name="atype"  required/></td>
</tr> 
<tr> 
        <td>Identification Number</td>   
        <td><input type="text" name="identificationnumber"  required/></td>
</tr>
<tr> 
        <td>Engin Type</td>    
        <td><input type="text" name="engintype"  required/></td>
</tr>
<tr> 
        <td>Capacity</td>    
        <td><input type="text" name="capacity"  required/></td>
</tr>


<tr>  
          
        <td><input type="submit" name="submit" ></td>
</tr>
</table>
</form>
</body>
</html>