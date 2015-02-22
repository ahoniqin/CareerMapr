<!doctype html>



<?php


	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'root';
    $dbname = 'hackathon';




$con=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
$result = mysqli_query($con,"SELECT * 
			FROM hackathon.Jobs
			INNER JOIN hackathon.JobsDetail
			ON hackathon.JobsDetail.NOC = hackathon.Jobs.NOC
			WHERE hackathon.JobsDetail.Title = 'real estate assessor'
			ORDER BY 'Jan-15' ASC;");


$num_results =mysqli_num_rows($result);

            for ($i=0; $i<$num_results; $i++) {
                $row = mysqli_fetch_assoc ($result);
           
            }

#mysqli_close($con);






?>







<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Results for UX Designer - CareerMapr</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="img/favicon/favicon-16.png" sizes="16x16">
	<link rel="icon" href="img/favicon/favicon-32.png" sizes="32x32">
	<link rel="icon" href="img/favicon/favicon-48.png" sizes="48x48">
	<link rel="icon" href="img/favicon/favicon-64.png" sizes="64x64">
	<link rel="icon" href="img/favicon/favicon-128.png" sizes="128x128">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body class="results fade">
  
	<script>
		$(document).ready(function(){
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
			  });
			});

		});
	</script>
	
	<!-- Rank Modal Start -->
	<div class="lightbox">
		<div class="modal-wrapper">
			<div class="modal" id="rank-modal">
				<span class="exit exit-x">X</span>
				<h3>How do we rank cities?</h3>
				<p>Another attack. I'll sift through the piles". A little somethin' to get along. If mother calls. Come cut me open. Staying just to get along. I tell the mailman, "Never you mind. She knows well we don't get along. Come cut me open. Turn off the TV, wade in bed. And for him to just get along. I spent the summer on my back. A blue and a red. Best finest surgeon.</p>
				<div class="exit modal-button">Cool, Thanks!</div>
			</div>
		</div>
	</div>
	<!-- Rank Modal End -->
    
    <!-- Start Header -->
	<div class="header">
		<a href="index.html">
			<img src="img/logo_nav.png" alt="CareerMapr" id="full-logo" class="hatch">
		</a>
		<a href="index.html">
			<img src="img/icon_nav.png" alt="CareerMapr" id="icon" class="hatch">
		</a>
		
		<form>
			<input type="text" class="form-control empty" id="iconified" placeholder="What kind of work do you do? &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#xF002;" style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, FontAwesome" autocomplete="off">
		</form>
	</div>
	<!-- End Header -->


	<h3>Top cities for <strong>UX Designer</strong> <span id="how-rank">?</span></h3>

	
	<!-- Start of Container -->
	<div class="container">
		<!-- BC -->
		<div class="result">
			<span class="rank">01</span>
			<img src="img/provinces/BC.png" alt="British Columbia" class="province">
			<h3 class="city-result">Vancouver, BC</h3>
			
			<div class="big-stat-container">
				<div class="big-stat">
					<h4>$50,000</h4>
					<h5>Average Salary</h5>
				</div>
				<div class="big-stat">
					<h4>34K</h4>
					<h5>Jobs Available</h5>
				</div>
			</div>
			
			<div class="cost-living">
				<h6>Cost Of Living</h6>
				<ul class="cost-type">
					<li>Rent/Mortgage</li>
					<li>Groceries</li>
					<li>Entertainment</li>
				</ul>
				<ul class="cost-price">
					<li>$1304</li>
					<li>$592</li>
					<li>$820</li>
				</ul>
			</div>	
		</div>
		
		
		<!-- MB -->
		<div class="result">
			<span class="rank">02</span>
			<img src="img/provinces/MB.png" alt="Manitoba" class="province">
			<h3 class="city-result">Flin Flon, MB</h3>
			
			<div class="big-stat-container">
				<div class="big-stat">
					<h4>$50,000</h4>
					<h5>Average Salary</h5>
				</div>
				<div class="big-stat">
					<h4>34K</h4>
					<h5>Jobs Available</h5>
				</div>
			</div>
			
			<div class="cost-living">
				<h6>Cost Of Living</h6>
				<ul class="cost-type">
					<li>Rent/Mortgage</li>
					<li>Groceries</li>
					<li>Entertainment</li>
				</ul>
				<ul class="cost-price">
					<li>$1304</li>
					<li>$592</li>
					<li>$820</li>
				</ul>
			</div>
		</div>
		
		
		<!-- AB -->
		<div class="result">
			<span class="rank">03</span>
			<img src="img/provinces/AB.png" alt="Alberta" class="province">
			<h3 class="city-result">Lethbridge, AB</h3>
			
			<div class="big-stat-container">
				<div class="big-stat">
					<h4>$50,000</h4>
					<h5>Average Salary</h5>
				</div>
				<div class="big-stat">
					<h4>34K</h4>
					<h5>Jobs Available</h5>
				</div>
			</div>
			
			<div class="cost-living">
				<h6>Cost Of Living</h6>
				<ul class="cost-type">
					<li>Rent/Mortgage</li>
					<li>Groceries</li>
					<li>Entertainment</li>
				</ul>
				<ul class="cost-price">
					<li>$1304</li>
					<li>$592</li>
					<li>$820</li>
				</ul>
			</div>
		</div>
		
		<div class="view-more-container">
			<a href="#list-results">
				<h4>View More Cities</h4>
		</a>
		</div>
		
		
		<!-- List Results -->
		<div id="list-results">
			
			<h3>More cities for UX Designer</h3>
			
			<table>
				<tr>
					<th>City</th>
					<th>Average Salary</th>
					<th>Jobs Available</th>
					<th>Cost Of Living</th>
				</tr>
				<?php 
				while ($row = mysqli_fetch_assoc ($result)) {
                	echo "<tr>";
					echo '<td class="city">'.$row['Geography'] .'</td>';
					echo '<td class="salary">'.$row['Jan-15'] .'</td>';
					//echo '<td class="demand">'. $row['ddd'].'</td>';
					//echo '<td class="living">'. $row['ddd'].'</td>';
           
            	}
					

				?>


				<tr>
					<td class="city"><?php echo $row['Geography'] ?></td>
					<td class="salary"><?php echo $row['Jan-15'] ?></td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
				
				<tr>
					<td class="city">City Name</td>
					<td class="salary">$52,000</td>
					<td class="demand">45K</td>
					<td class="living">$3000</td>
				</tr>
			</table>
		</div>
		
	</div>
	<!-- End of Container -->
	
	<footer>
		<ul>
			<li class="left">
				<img src="img/logo_nav.png" alt="CareerMapr" onClick="location.href='index.html'" style="z-index: 1; cursor: pointer;">	
			</li>
			<a href="about.html">
				<li>About Us</li>
			</a>
			<a href="mailto:april@mixedape.fm">
				<li>Contact</li>
			</a>
			<div class="right">
				<a href="https://www.facebook.com/careermapr" target="_blank">
					<li class="zocial-facebook"></li>
				</a>
				<a href="https://twitter.com/careermapr" target="_blank">
					<li class="zocial-twitter"></li>
				</a>
			</div>
		</ul>
	</footer>

  </body>
</html>
