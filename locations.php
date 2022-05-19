<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Greenhand Community</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="sub-header">
		<nav>
			<a href="index.php"><img src="images/logo.png"></a>
			<div class="nav-links" id="navLinks"> 
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="home.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<li><a href="trees.php">TREES</a></li>
					<li><a href="blog.php">BLOG</a></li>
					<li><a href="getinvolved.php">TAKE ACTION</a></li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="founders.php">FOUNDATION</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>

		<h1>Plant Trees With Us</h1>
		<br>
		<br>
		<a href="trees.php" class="hero-btn">TYPES</a>
		<a href="locations.php" class="hero-btn">LOCATIONS</a>
		<a href="plans.php" class="hero-btn">PLANS</a>
		<a href="trivia.php" class="hero-btn">TRIVIA</a>

	</section>
			
<!--------Program----------->
<?php
echo"<section class='program'>";
	
	 	echo"<section class='camp'>";
	 	
	 	echo"<p>LOCATIONS</p>
	 	<br>";
	 	echo"<h1>Where We Plants</h1>";
	 	echo"<p>Since 2005, we planted to various places from local to abroad. There are still places that lacks of trees, below are some of them.</p>";
	 	
	 	echo"<div class='row'>
	 		<div class='camp-col'>
	 			<img src='images/lamdong.jpg'> 
	 			<div class='layer'>
	 				<h3>Lam Dong, Vietnam</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/bohol.jpg'> 
	 			<div class='layer'>
	 				<h3>Bohol, Philippines</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/sumatra.jpg'> 
	 			<div class='layer'>
	 				<h3>Sumatra, Indonesia</h3>
	 			</div>			
	 		</div>
	 	</div>";
	 	echo"<div class='row'>
	 		<div class='camp-col'>
	 			<img src='images/location1.jpg'> 
	 			<div class='layer'>
	 				<h3>Daintree, Austrilia</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/location2.jpg'> 
	 			<div class='layer'>
	 				<h3>Central Luzon, Philippines</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/Canada.jpg'> 
	 			<div class='layer'>
	 				<h3>Quebec, Canada</h3>
	 			</div>			
	 		</div>
	 	</div>";
?>
	 </section>

	


</section>
<!----------Footer---------->
<section class="footer">
	<h4>About Us</h4>
	<p>We are a Philippine-based community, established in 2001 committed to restoring, enhancing, <br>and protecting the wildlife on our nation and across nations as well. Join us!</p>
	<div class="icons">
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-instagram"></i>
		<i class="fa fa-youtube"></i>
	</div>
	<p>Greenhand Commmunity <i class="fa fa-flag-o"></i> Founded by IT Brothers</p>
</section>



<!-----------------javascript for toggle menu----------------->
	<script type="text/javascript">
		
		var navLinks = document.getElementById("navLinks");

		function showMenu() {
			navLinks.style.right = "0";
		}
		function hideMenu() {
			navLinks.style.right = "-200px";
		}


	</script>
</body>
</html>