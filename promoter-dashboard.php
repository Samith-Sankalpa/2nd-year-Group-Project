<!DOCTYPE html>
<html>
<head>
	<title>Promoter Dashboard</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/promoter-dashboard-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="js/promoter-dashboard-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
		<header>
			<div class="open-btn" onclick="openNav()">&#9776;</div>
			<div class="affiliox"><a href="">Affiliox</a></div>
			<div class="loggedin">Welcome User name</div>
		</header>
		<hr>
		<!-- inner part of the evry dashboard -->
	<div class="container">
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp;Profile Details</h2>
		<div class="inner-part">
			<table>
				<tr>
					<td id="td-1">Your Name:</td>
					<td>Sample name is here</td>
				</tr>
				<tr>
					<td id="td-1">Date of Birth:</td>
					<td>Sample DOB is here</td>
				</tr>
				<tr>
					<td id="td-1">Primary Email:</td>
					<td>sample@gmail.com</td>
				</tr>
				<tr>
					<td id="td-1">Mobile Number:</td>
					<td>Sample number is here</td>
				</tr>
				<tr>
					<td id="td-1">Address:</td>
					<td>Sample address is here</td>
				</tr>
				<tr>
					<td id="td-1">State:</td>
					<td>Sample state is here</td>
				</tr>
			</table>

			<form action="update-promoter.php">
				<input type="submit" name="edit-details" value="Edit Details">
			</form>					
		</div><!-- inner-part -->

	</div> <!-- container -->

		<div class="footer">
  			<ul>
  				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  				tempor incididunt ut labore et dolore magna aliqua.</li>
  				<li><a href="">Privacy & Policy</a></li>
  				<li>© Affiliox</li>
  			</ul>
		</div>	<!-- footer -->	

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>  		
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="support-center.php">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>

