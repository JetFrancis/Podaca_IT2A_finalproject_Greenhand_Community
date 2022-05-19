<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Greenhand Community</title>
	<link rel="icon" type="image/x-icon" href="#">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>




<!----------THIS IS ONLY A WELCOME PAGE NOT A HOMEPAGE------->


<?php
echo"<body>
	<section class='headermain'>
		<nav>
			<a href='index.php'><img src='images/logo.png'></a>
			<div class='nav-links' id='navLinks'>";

			/*for responsive design only*/
				echo "<i class='fa fa-times' onclick='hideMenu()'></i>
				<ul>
					<li><a href='about-intro.php'>ABOUT</a></li>
				</ul>
			</div>
			<i class='fa fa-bars' onclick='showMenu()'></i>
		</nav>'";

		echo"<div class='text-box'>";
		echo"<h3>Welcome to</h3>";
		echo"<h1>Environment-Friendly Community</h1>";
		echo"<p>Earth need a helping hand. We know we can do better with your help.
		</p>";
		echo "<a href='home.php' class='hero-btn'>Enter Greenhand Community</a>
		
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
	<p>Greenhand Commmunity <i class="fa fa-flag"></i>. Founded by IT Brothers</p>
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