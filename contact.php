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

		<h1>Contact Us</h1>
	</section>

<!------------------Contact Us---------------->
<?php
echo "<section class='location'>

	<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248331.68898140892!2d121.78643589263623!3d13.462836425141305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a2e027d7b6652b%3A0x656e28e76cffe108!2sSanta%20Cruz%2C%20Marinduque!5e0!3m2!1sen!2sph!4v1652422838692!5m2!1sen!2sph' width='600' height='450' style='border:0;'' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
	
</section>";

echo "<section class='contact-us'>
	<div class='row'>
		<div class='contact-col'>
			<div>
				<i class='fa fa-home'></i>
				<span>
					<h5>ABC Street, XZY Building</h5>
					<p>Santa Cruz, Marinduque</p>
				</span>
			</div>
			<div>
				<i class='fa fa-phone'></i>
				<span>
					<h5>+63 9277409741</h5>
					<p>Monday to Saturday, 8AM to 5PM</p>
				</span>
			</div>
			<div>
				<i class='fa fa-envelope-o'></i>
				<span>
					<h5>itbrothers@gmail.com</h5>
					<p>Email us your query</p>
				</span>
			</div>
			
		</div>
		<div class='contact-col'>
			<form action='error.php'>

				<input type='text' name='name' placeholder='Enter your name' required>
				<input type='email' name='email' placeholder='Enter your email address' required>
				<input type='text' name='subject' placeholder='Enter your subject' required>
				<textarea rows='8' name='message' placeholder='Message' required></textarea>
				<button type='submit' class='hero-btn green-btn'>Send Message</button>
			</form>
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