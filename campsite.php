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

		<h1>Community Campsites</h1>
	</section>

<!--------CAMP----------->
<?php
	 	echo"<section class='camp'>";
	 	
	 	echo"<h1>Our Global Campsite</h1>";
	 	echo"<p>Since 2010, we established camp sites in some places around the world sponsored by various agencies and individual for the benefit of all members of the community and some are partnered by different organization. </p>";
	 	
	 		echo"
	 		<div class='row'>
	 		<div class='camp-col'>
	 			<img src='images/Canada.jpg'> 
	 			<div class='layer'>
	 				<h3>CANADA</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/indonesia.jpg'> 
	 			<div class='layer'>
	 				<h3>VIETNAM</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/philippines.jpg'> 
	 			<div class='layer'>
	 				<h3>PHILIPPINES</h3>
	 			</div>			
	 		</div>
	 		
	 	</div>";
	 	echo"<div class='row'>
	 		<div class='camp-col'>
	 			<img src='images/longitude.jpg'> 
	 			<div class='layer'>
	 				<h3>INDONESIA</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/mombo.jpg'> 
	 			<div class='layer'>
	 				<h3>BOTSWANA</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/paperbark.jpg'> 
	 			<div class='layer'>
	 				<h3>AUSTRILIA</h3>
	 			</div>			
	 		</div>
	 		
	 	</div>";
	 	echo"<div class='row'>
	 		<div class='camp-col'>
	 			<img src='images/japan.jpg'> 
	 			<div class='layer'>
	 				<h3>JAPAN</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/china.png'> 
	 			<div class='layer'>
	 				<h3>CHINA</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/kenyaa.jpg'> 
	 			<div class='layer'>
	 				<h3>KENYA</h3>
	 			</div>			
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