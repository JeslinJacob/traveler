<?php
session_start();
include_once("db/connection.php");
$sql=("SELECT * FROM `userdeatils");
$result=mysql_query($sql);
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>

	<head>
		<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Husky angels</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">HUSKY ANGELS <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						
						  	<li ><a href="adminPatientViewFormat.php">View Details</a></li>
                         	<li ><a href="adminFlightBookingViewFormat.php">Flightbookings</a></li>
                          	<li ><a href="adminAircraftViewFormat.php">Aircraft View</a></li>
                          	<li ><a href="adminAddAircraftDetailsFormat.php">Add Aircraft</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/patients-header.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">manage our users</span>
							<h1>Our Users</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	<form action="adminPatientViewFormat.php">
		
<div class="col-md-12" style="
    width:  11%;
    transform: translate(335%%,27%);
">
		<input type="submit" class="btn btn-primary btn-block" value="previous" name="submit" >
	</div>
	</form>

	<form action="adminDoctorViewFormat.php">
		
<div class="col-md-12" style="
    width:  11%;
    transform: translate(372%%,27%);
">
		<input type="submit" class="btn btn-primary btn-block" value="next" name="submit" >
	</div>
	</form>
	
<table style=" transform: translate(1%,16%);
    position:  absolute;
    width:  68%;
    top: 100%;
    left: 11%;" >
  <tr>
    <th>Name</th>
	<th>Address</th>
	<th>mob</th>
	<th>email</th>

	<th>Medical Condition</th>
	<th>Username</th>
	<th>password</th>
  	</tr>
  <?php
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
echo "<td><a href='adminedituserdetails.php?id=$row[uid]'>Edit</a></td>";
echo "<td><a href='admindeleteuserdetails.php?id=$row[uid]'>Delete</a></td>";
echo "</tr>";
}
//header('location:ulogin.php');	
mysql_close($con);


  ?>
 
</table>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

