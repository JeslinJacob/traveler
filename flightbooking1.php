<?php
include_once("db/connection.php");
require_once('PHPmailer/PHPMailerAutoload.php');

$name=$_POST["name"];
$date=$_POST["date"];
$reportingtime=$_POST["reportingtime"];
$takeoff=$_POST["takeoff"];
$arrival=$_POST["arrival"];
$goods=$_POST["goods"];
$pemail=$_POST["pemail"];


echo"name:.".$name."<br>";
echo"date:.".$date."<br>";
echo"reportingtime:.".$reportingtime."<br>";
echo"takeoff:.".$takeoff."<br>";
echo"arrival:.".$arrival."<br>";
echo"goods:.".$goods."<br>";
echo"pemail:.".$pemail."<br>";


$mailbody='<h1 style="color: #5e9ca0;">Your Flight Is Booked</h1>
<h2 style="color: #2e6c80;">Important note:</h2>
<p>The flight for you have been successfully booked and all the necessary arrangements are already made , therefore please make sure that you use the services correctly.</p>
<p>In case you want to cancel the booking please contact admin 10 days prior to date that you booked for.</p>
<p>Please take&nbsp; a print out of this confirmation email as your pass</p>
<h2 style="color: #2e6c80;">Travel Details:</h2>
<ol style="list-style: none; font-size: 14px; line-height: 32px; font-weight: bold;">
<li style="clear: both;">Name of patient&nbsp; &nbsp; :'.$name.' </li>
<li style="clear: both;">Date of Journey&nbsp; &nbsp; :&nbsp;'.$date.' </li>
<li style="clear: both;">Reporting Time&nbsp; &nbsp; &nbsp;: '.$reportingtime.'</li>
<li style="clear: both;">Time of Takeoff&nbsp; &nbsp; &nbsp;: '.$takeoff.'</li>
<li style="clear: both;">Date of Arrival&nbsp; &nbsp; &nbsp; &nbsp;: '.$arrival.'</li>
<li style="clear: both;">Amount of Goods&nbsp; &nbsp;:'.$goods.' </li>
</ol>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p><strong>&nbsp;</strong></p>';

	$mail= new PHPmailer();
	$mail->IsSmtp();
	$mail->SMTPDebug=1;

	$mail->SMTPAuth=true;
	$mail->SMTPSecure ='ssl';
	$mail->Host='smtp.gmail.com';
	$mail->Port='465';
	$mail->isHTML();
	$mail->Username = 'edappallystas@gmail.com'; //pass: stas12345
	$mail->Password ='stas12345';
	$mail->SetFrom("edappallystas@gmail.com");
	$mail->Subject='Flight confirmation';
	$mail->Body="".$mailbody;
	$mail->AddAddress(''.$pemail);
	if(!$mail->Send())
	{
		echo "email is not send";
	}
	else{
		echo "email sent";
	}

$sql="INSERT INTO `flightbooking`( `name`, `date`, `reportingtime`, `takeoff`, `arrival`, `goods`,`pemail`) VALUES ('$name','$date','$reportingtime','$takeoff','$arrival','$goods','$pemail')"; 

if(!mysql_query($sql,$con))
{
	die('error'.mysql_error());
	
}

else
	{
		mysql_close($con);
	
		header("Location:flightbooking.php");
		
	}


?>