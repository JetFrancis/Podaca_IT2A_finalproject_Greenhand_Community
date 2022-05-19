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

		<h1>We Makes The Foundation!</h1>
		<br>
		<br>
		<a href="founders.php" class="hero-btn">FOUNDERS</a>
		<a href="volunteer.php" class="hero-btn">VOLUNTEERS</a>

	</section>

<!--------CAMP----------->
<?php
	 	echo"<section class='camp'>
	 	<br>";
	 	echo"<h1>We, Volunteers Around the World</h1>";
	 	echo"<p>Some of our volunteers are all comes from different countries, and they are willing to help to preserve our 
	 	environment. One tree can save our entire planet, so plant with us.</p>";
	 	
	 		echo"
	 		<div class='row'>
		 		<div class='camp-col'>
		 			<img src='images/volunteer1.jpeg'> 
		 			<div class='layer'>
	 					<h3>PHILIPPINES</h3>	</div>
		 		</div>
		 		<div class='camp-col'>
		 			<img src='images/volunteer2.jpeg'> 
		 			<div class='layer'>
	 					<h3>SINGAPORE</h3>	</div>
		 		</div>			
		  		<div class='camp-col'>
		 			<img src='images/volunteer3.jpeg'> 
		 			<div class='layer'>
	 					<h3>THAILAND</h3>	</div>
		 		</div>			
	 		</div>
	 		
	 	</div>";
	 	echo"<div class='row'>
		 		<div class='camp-col'>
		 			<img src='images/volunteer4.jpg'> 	
		 			<div class='layer'>
	 					<h3>CANADA</h3>	</div>
		 		</div>
		 		<div class='camp-col'>
		 			<img src='images/usavolunteer.png'> 
		 			<div class='layer'>
	 					<h3>UAE</h3>	</div>
		 		</div>			
		 		<div class='camp-col'>
		 			<img src='images/usavol.jpg'> 
		 			<div class='layer'>
	 					<h3>USA</h3>	</div>
		 		</div>			
	 		</div>
	 		
	 	</div>";
	 	echo"<div class='row'>
	 		 <div class='camp-col'>
	 			<img src='images/volunteer7.jpeg'>
	 			<div class='layer'>
	 					<h3>SPAIN</h3>	</div> 
	 		</div>	
	 		<div class='camp-col'>
		 			<img src='images/malaysiavolunteer.jpg'> 
		 			<div class='layer'>
	 					<h3>MALAYSIA</h3>	</div>
		 		</div>			
		 		<div class='camp-col'>
		 			<img src='images/londonvolunteer.jpg'> 
		 			<div class='layer'>
	 					<h3>LONDON</h3>	</div>
		 		</div>
	 	</div>
	 </section>";
	?>


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