<!DOCTYPE html>
<html>
<head>
	<title>Update Promoter</title>
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/update-promoter-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<script src="js/update-promoter-js.js"></script>
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
		<h2><i class="fas fa-user"></i>&nbsp; &nbsp; Edit Profile Details</h2>
		<div class="inner-part">
			<form action="" method="post">
				<table>
					<tr>
						<td id="td-1">Your ID:</td>
						<td id="td-2"><input type="number" name="userID" readonly></td>
					</tr>
					<tr>
						<td id="td-1">Name:</td>
						<td id="td-2"><input type="text" name="name" min="0" max="50"></td>
					</tr>
					<tr>
						<td id="td-1">Address line - 1:</td>
						<td id="td-2"><input type="text" name="aLine1"></td>
					</tr>
					<tr>
						<td id="td-1">Address line - 2:</td>
						<td id="td-2"><input type="text" name="aLine2"></td>
					</tr>
					<tr>
						<td id="td-1">City:</td>
						<td id="td-2"><input type="text" name="city"></td>
					</tr>
					<tr>
						<td id="td-1">Country:</td>
						<td id="td-2"><input type="text" name="country"></td>
					</tr>
					<tr>
						<td id="td-1">Status:</td>
						<td id="td-2"><input type="text" name="status"></td>
					</tr>
					<tr>
						<td id="td-1">Birthday:</td>
						<td id="td-2"><input type="number" name="dob" placeholder="year-mm-dd" pattern="[1-9]{4}-[1-12]{2}-[1-30]{2}"></td>
					</tr>
					<tr>
						<td id="td-1">Email:</td>
						<td id="td-2"><input type="email" name="email"></td>
					</tr>
					<tr>
						<td id="td-1">Phone Number:</td>
						<td id="td-2"><input type="number" name="phoneNo" placeholder="000-0000000" pattern="[0]{1}[7]{1}[0-9]{1}-[0-9]{3}-[0-9]{4}"></td>
					</tr>
					<tr>
						<td id="td-1"></td>
						<td id="td-2"><input type="submit" name="submit" value="Submit" id="td-3"></td>
					</tr>
				</table>
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

