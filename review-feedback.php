<!DOCTYPE html>
<html>
<head>
  <title>Promoter Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/review-feedback-css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Nunito&family=Roboto+Mono&display=swap" rel="stylesheet">
  <script src="js/review-feedback-js.js"></script>
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
              
    <div class="container">
      
      <div class="top">
        <h3>Review Feedbacks</h3>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</h4>
      </div> <!-- top -->

      <div class="overall-review">
        <table id="overall-review-table">
          <tr>
            <th>Value</th>
            <th>Rated Method</th>
            <th>Percentage</th>
          </tr>
          <tr>            
              <td>Excellent</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></td>
              <td>60%</td>
            </tr>
            <tr>
              <td>Great</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"><i class="fas fa-star"></td>
              <td>10%</td>
            </tr>
            <tr>
              <td>Average</td>
              <td><i id="star" class="fas fa-star"><i class="fas fa-star"></td>
              <td>15%</td>
            </tr>
            <tr>
              <td>Poor</td>
              <td><i id="star" i class="fas fa-star-half-alt"></i></td>
              <td>10%</td>
            </tr>
            <tr>
              <td>Bad</td>
              <td style="color: red;">Not Rated</td>
              <td>5%</td>
            </tr>
        </table>
        </div> <!--overall-review -->
        <br><br>
        <div class="inner-line">
          <p>Customer Reviews</p>
        </div>

        <div class="customer-review-1">
          <table>
            <tr>
              <td id="cus-name">John Smith</td>
              <td></td>
            </tr>
            <tr>
              <td>Fantastic Store</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
          <table>
            <tr>
              <td id="cus-name">Smith Merry</td>
              <td></td>
            </tr>
            <tr>
              <td>Amaizing! Easy to search and find a needed product.</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
          <table>
            <tr>
              <td id="cus-name">Lilly Benjamin</td>
              <td></td>
            </tr>
            <tr>
              <td>Thanks a lot! Your support was incredibly helpful.</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
          <table>
            <tr>
              <td id="cus-name">Mark Benny</td>
              <td></td>
            </tr>
            <tr>
              <td>Very happy. Quick Deliver and communication</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
          <table>
            <tr>
              <td id="cus-name">James Mary</td>
              <td></td>
            </tr>
            <tr>
              <td>Thank you so much</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
          <table>
            <tr>
              <td id="cus-name">George</td>
              <td></td>
            </tr>
            <tr>
              <td>Fast and fabulous.</td>
              <td><textarea placeholder="Write Reply"></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="button" name="" value="Submit Reply"></td>
            </tr>
          </table>
        </div>
  

    </div> <!-- container -->
    <div class="footer">
        <p style="float: left;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <p style="float: right; margin-right: 180px;">© Affiliox</p>
        <a href="" style="float: right; margin-right: 150px; margin-top: 15px;">Privacy & Policy</a>
    </div>  <!-- inner-part --> 
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