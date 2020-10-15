<!DOCTYPE html>
<html>
<head>
	<title>Market Place</title>
	<link rel="stylesheet" type="text/css" href="css/generate-link-css.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <script src="js/promoter-dashboard-js.js"></script>
	<script src="js/generate-link-js.js"></script>
</head>
<body>
	<!-------------- Top-Navigation-Bar ---------------------->
	     <div id="main" class="navigation">
		      <ul>
            <li id="open-btn" onclick="openNav()">&#9776;</li>
            <li><a href="">Affiliox</a></li></a>
            <li id="user-name">user-name</li>
          </ul>
          <hr>

	     <div class="container">
          <h2><i class="fas fa-link"></i></i>&nbsp; &nbsp;Generate Link</h2>

        <div class="area">
          <p>Genrate Link</p>
            <label>Encrypted Link:</label>
            <input type="text" name="link" id="myInput" placeholder="You can Copy this Link">
            <button onclick="myFunction()">Copy</button>
        </div> <!-- area -->	
        
	     </div> <!-- container -->

		<div class="footer">
  			<ul>
          <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</li>
          <li><a href="">Privacy & Policy</a></li>
          <li>© Affiliox</li>
        </ul>
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