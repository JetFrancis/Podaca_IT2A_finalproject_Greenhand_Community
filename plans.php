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

	<!------------------About Plans---------------->
<?php
echo"<section class='about_us'>
	<div class='row'>
		<div class='about_col'>";

			 	echo"<p>PLANS</p>
	 				<br>";
			echo "<h1>We want to plant more trees!</h1>";
			echo"<p>Calculating backward from the long-term environmental vision, Greenhand Community have set 2030 as a milestone for achieving the vision. We formulate concrete targets and plans as the Endless Green Program (EGP) nearly every three years in accord with the period of a mediumterm management plan to promote it.
			In the EGP, we identify “four environmental themes (social issues), which are of much interest to stakeholders and closely related to our business, and we work on them at three phases: procurement; business activities; and products and services. This is only a sample plans got from https://www.daiwahouse.com/English/sustainable/eco/egp/.</p>";
			echo "<h2>Establishing targets through 'backcasting'</h2>";
	 		echo"<p>In identifying the targets for our four themes introduced above, we applied the technique of 'backcasting' for the Long-Term Environmental Vision we formulated as our objective for 2055, when Daiwa House Industry will mark its 100th anniversary. We have identified the period from 2025 to 2040 as our milestones, and have indicated the levels to be attained after three years (daiwahouse.com).";
	 		echo"<h2>Endless Green Program</h2>";
	 		echo"<p>In the Endless Green Program 2022, which expands the scope of application to all the Group companies including overseas ones, we are going to accelerate integrated environmental management within our community and globally based on the life cycle approach to ensure that corporate profitability can coexist with environmental sustainability. In particular, we place emphasis on the carbonfree initiative, which is raised as one of the policies in our 6th Medium-Term Management Plan (daiwahouse.com). </p>";
	 		echo "<h2>Key policies of Endless Green Program 2022</h2>";
	 		echo"<p>1. Promoting “carbon-free” in the fields of products and business activities</p>
	 			<p>2. Promoting win-win cooperation for reducing environmental risks in supply chains</p>
	 			<p>3. Promoting the development and dissemination of environmentally conscious products and services for boosting business competitiveness</p>
	 			<p>4. Advancing strategic eco communication for improving environmental brand.</p>
	 			<p>5. Enhancing integrated environmental management within the Group and globally for advancing environmental management</p><br>


			
		</div>
		<div class='about_col'>
			<img src='images/plan1.jpg'>
			<img src='images/aboutus.jpg'>
			<img src='images/aboutus2.jpg'>
			<img src='images/plan2.jpg'>
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