<!DOCTYPE html>
<html>
<head>
	<title>Payout History</title>
	<link rel="stylesheet" type="text/css" href="css/payout-history-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="js/payout-history-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="navigation">
		<ul>
			<li onclick="openNav()">&#9776;</li>
			<li><a href="">Affiliox</a></li></a>
			<li style="float: right;">user-name</li>
		</ul>
		<hr>	
		<!-- inner part of the evry dashboard -->
								
		<div class="table">
			<ul>
				<li><i class="fas fa-exchange-alt"></i></li>
				<li>Payout History</li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<table style="width:100%">
  				<tr>
    				<th>Transaction ID</th>
    				<th>Amount</th>
    				<th>Trnasfer Method</th>
    				<th>Status</th>
    				<th>Date</th>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
  				<tr>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
    				<td></td>
  				</tr>
			</table>
		</div> <!-- table -->	
			
		<div class="footer">
  			<p style="float: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua.</p>
  			<p style="float: right; margin-right: 180px;">© Affiliox</p>
  			<a href="" style="float: right; margin-right: 150px; margin-top: 15px;">Privacy & Policy</a>
		</div>	<!-- inner-part -->	
	</div> 
	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div>
	<span onclick="openNav()"></span>

</body>
</html>

