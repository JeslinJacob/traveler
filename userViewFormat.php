<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php

session_start();
include_once("db/connection.php");
$sql="SELECT * FROM `userdeatils` where uid='$_SESSION[userid]'";
//echo $sql;
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{

	$id=$row['uid'];

$name=$row['name'];
$address=$row['address'];
$mob=$row['mob'];
$p_email=$row['pemail'];
$user_email=$row['uemail'];
$relation=$row['relation'];
$username=$row['username'];
$password=$row['password'];


// echo "<td><a href='editpatientdetails.php?id=$row[paid]'>Edit</a></td>";

}

mysql_close($con);


?>
<html>
	<head>
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
					<div id="gtco-logo"><a href="mainpage.php">HUSKY ANGELS <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="mainpage.php">home</a></li>
						<li><a href="userFlightViewFormat.php">fight booking</a></li>
						
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner"  style="background-image: url(images/patients-header.jpg) ">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">important</span>
							<h1>VIEW DETAILS AND EDIT</h1>	
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Patient Login</h3>
					<form  action="updateuserdetails.php" method="POST" >
						
																							
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">name</label>
														<input type="text"  class="form-control" name="name" value='<?php echo "".$name ?>' required>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">address</label>
														<input type="text"  class="form-control" name="address" value='<?php echo "".$address ?>' required/>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Mobile</label>
														<input type="text"  class="form-control" name="mob" value='<?php echo "".$mob ?>' required/>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">user email</label>
														<input type="text"  class="form-control" name="uemail" value='<?php echo "".$user_email ?>' required/>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Patient email</label>
														<input type="text"  class="form-control" name="pemail" value='<?php echo "".$p_email ?>' required/>
													</div>
												</div>


														<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Relation with patient</label>
														<input type="text"  class="form-control" name="relation" value='<?php echo "".$relation ?>' required/>
													</div>
												</div>



												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Username</label>
														<input type="text"  class="form-control" name="username" value='<?php echo "".$username ?>' required/>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Password</label>
														<input type="password"  class="form-control" name="password" value='<?php echo "".$password ?>' required/>
													</div>
												</div>

													<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="edit details" name="submit" >
													</div>
												</div>

												  <input type="hidden" name="uid" value='<?php echo "".$id ?>' >

											</form>	

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://GetTemplates.co">GetTemplates.co</a></li>
						</ul>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>USER REGISTER</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@GetTemplates.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://GetTemplates.co/" target="_blank">GetTemplates.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

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

