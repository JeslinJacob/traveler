<?php
	$_SERVER_NAME	= "localhost";
	$_USER_NAME		= "root";
	$_PASSWORD		= "";
	$_DATABASE		= "aircraft";
	
	$con=mysql_connect($_SERVER_NAME,$_USER_NAME,$_PASSWORD) or die(mysql_error());
	mysql_select_db($_DATABASE) or die(mysql_error());
?>