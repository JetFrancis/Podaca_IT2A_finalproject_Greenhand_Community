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

		<h1>About Us</h1>
	</section>

<!------------------About Us Page---------------->
<?php
echo"<section class='about_us'>
	<div class='row'>
		<div class='about_col'>";
		
			echo "<h1>We are the Environment-Friendly Community</h1>";
			echo"<p>Since 2001, Greenhand Community mission has been to restore, enhance, and protect the forest around the world by the  productions, research, and plantation of trees in response to the continuous negative changes on earth.</p>";
			echo "<h2>Our Community</h2>";
	 		echo"<p>To fulfill our goals, we plant trees, engage thousands of volunteers of all ages in tree planting and care, provide year-round continuing education courses, monitor the nation's forest, develop interactive online tree tools and work with elected officials, developers, and community groups to protect and care for existing trees and to encourage the addition of new ones. 
	 			<br>We are a Philippine-based community, established in 2001, founded by IT Brothers, committed to restoring, enhancing, and protecting the wildlife on the nation and across nations as well. </p>";
	 		echo"<h2>Mission</h2>";
	 		echo"<p>Since 2001, Greenhand Community mission has been to restore, enhance, and protect the forest around the world by the  productions, research, and plantation of trees in response to the continuous negative changes on earth.</p>";
	 		echo "<h2>Vision</h2>";
	 		echo"<p>A green and clean Earth growing with sustainable resources and with the community members around the world committed in reaching trillions of trees planted on earth by 2035.</p>
	 	
			
		</div>
		<div class='about_col'>
			<img src='images/aboutus.jpg'>
			<img src='images/banner2.jpg'>
			<img src='images/aboutus2.jpg'>
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