<!DOCTYPE html>
<html>
<head>
	<title>Withdraw Earnings</title>
	<link rel="stylesheet" type="text/css" href="css/withdraw-earnings-css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
	<script src="js/withdraw-earnings-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	<div id="main" class="navigation">
		<ul>
			<li onclick="openNav()">&#9776;</li>
		</ul>
		<hr>	
	<div class="container">
		<div class="title">
			<p>Balance Withdrawal Form</p>
		</div> <!-- title -->

		<p><b>Withdraw Earn:</b> Use this page to transfer your balance to your preferred method of payout. You should have minimum payout amount available in your account. To see the list and status of your payouts. <a href="payout-history.php">Click Here</a></p>

		<div class="money-withdrawal-form">
			<form>
				<table>
				<tr>
					<td>Tansfer Method :</td>
					<td>
						<select>
							<option>Paypal</option>
							<option>Bank Transfer</option>
						</select>
					</td>
				</tr>
					<tr>
						<td>Current Amount :</td>
						<td>26.14 $USD</td>
					</tr>
					<tr>
						<td>Change Amount :</td>
						<td><input type="number" name="amount"></td>
					</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="Submit">
					</td>
					<td>
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
			</form>
		</div> <!-- money-withdrawal-form -->
	</div> <!-- container -->

		<div class="footer">
  			<p style="float: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  			tempor incididunt ut labore et dolore magna aliqua.</p>
  			<p style="float: right; margin-right: 180px;">© Affiliox</p>
  			<a href="" style="float: right; margin-right: 150px; margin-top: 15px;">Privacy & Policy</a>
		</div>	<!-- footer -->	
	</div> <!-- navigation -->

	<div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<a href="promoter-dashboard.php">User profile<i class="far fa-user"></i></a>
  		<a href="market-place.php">Marker Place<i class="fab fa-shopify"></i></a>
  		<a href="promoter-statistics.php">Statstics<i class="fas fa-chart-line"></i></i></a>
  		<a href="withdraw-earnings.php">Transactions<i class="fas fa-money-check-alt"></i></a>
  		<a href="review-feedback.php">Feedback<i class="fas fa-phone-square"></i></i></a>
  		<a href="#">Support<i class="fas fa-envelope-open-text"></i></a>
	</div> <!-- sidenav -->
	<span onclick="openNav()"></span>

</body>
</html>
