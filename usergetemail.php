<?php

session_start();

require_once('PHPmailer/PHPMailerAutoload.php');
$name=$_GET["name"];
$date=$_GET["date"];
$reportingtime=$_GET["reportingtime"];
$takeoff=$_GET["takeoff"];
$arrival=$_GET["arrival"];
$goods=$_GET["goods"];

$user_email=$_SESSION['useremail'];



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
	$mail->AddAddress(''.$user_email);
	if(!$mail->Send())
	{
		echo "email is not send";
	}
	else{
		header("Location:userFlightViewFormat.php");
	}


?>