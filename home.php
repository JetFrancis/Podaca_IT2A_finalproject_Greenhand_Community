<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Greenhand Community</title>
	<link rel="icon" type="image/x-icon" href="assets/icon.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section class="header">
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

	<div class="text-box">
		<h1>You are inside the community</h1>
		<p>
			Earth need a helping hand. We know we can do better with your help.
		</p>
		<a href="trees.php" class="hero-btn">Plant Trees With Us</a>
		
	</div>
	</section>

	 <!--------ABOUT---------->
	 <?php
	 echo "<section class='about'>";
	 	
	 	echo "<h1>Our Community</h1>";
	 	echo"<p>To fulfill our goals, we plant trees, engage thousands of volunteers of all ages in tree planting and care, provide year-round continuing education courses, monitor the nation's forest, develop interactive online tree tools and work with elected officials, developers, and community groups to protect and care for existing trees and to encourage the addition of new ones. </p>";

	 		echo"<div class='row'>
	 			<div class='about-col'>
	 			
	 			<h3>Our Story</h3>
	 			<p>We are a Philippine-based community, established in 2001, founded by IT Brothers, committed to restoring, enhancing, and protecting the wildlife on the nation and across nations as well. </p>
	 			
	 			</div>";
	 		echo"<div class='about-col'>
	 				<h3>Our Mission</h3>
	 				<p>Since 2001, Greenhand Community mission has been to restore, enhance, and protect the forest around the world by the  productions, research, and plantation of trees in response to the continuous negative changes on earth.</p>
	 			</div>";
	 		echo"<div class='about-col'>
	 				<h3>Our Vision</h3>
	 				<p>A green and clean Earth growing with sustainable resources and with the community members around the world committed in reaching trillions of trees planted on earth by 2035.</p>
	 		
	 		</div>
	 	</div>

	 </section>";
	 ?>

<!--------CAMP----------->
<?php
	 	echo"<section class='camp'>";
	 	
	 	echo"<h1>Our Global Campsite</h1>";
	 	echo"<p>Since 2010, we established camp sites in some places around the world sponsored by various agencies and individual for the benefit of all members of the community. Most popular and used camp today was Vietnam, Canada, and Philippines as they engage more on tree planting activities according to statistics.</p>";
	 	
	 	echo"<div class='row'>
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
	 		
	 	</div>
	 	<a href='campsite.php' class='hero-btn green-btn'>See More</a>
	 </section>";
	

/*--------Program-----------*/
echo "<section class='program'>
	<h1>Our Programs</h1>
	<p>We are delighted to present our worlwide programs since the community was founded. Come and join us soon!</p>

	<div class='row'>
		<div class='program-col'>
			<img src='images/greenplanting.jpg'>";
			echo"<h3>Bring Back The Green Program</h3>";
			echo"<p>A recent program proposed by the founder of the community this year 2022. It is tree planting activity planned to do every year.</p>";
			
		
		echo "</div>
		<div class='program-col'>
			<img src='images/billiontrees.jpg'>
			
			<h3>One Billion Tree Planting Project</h3>
			<p>The Greenhand Community's Plant a Billion Trees is a major forest restoration program. Our goal is to plant a billion trees across the planet to slow the connected crises of climate change and biodiversity loss. It was already started since 2019 and will continuously do every two years.</p>";
			
			
		echo"</div>
		<div class='program-col'>
			<img src='images/plant5.jpg'>
			
			<h3>Plant Five Per One Program</h3>
			<p>Since the pandemic broke out, the youth are encourageed to plant five trees on their sorrounding places. Five trees per one individual is already a great help to earth and its biodicerity.</p>
			
		</div>
	</div>

</section>";

/*---------feedbacks----------*/

echo "<section class='feedbacks'>
	<h1>Our Community Member Says</h1>
	<p>We had the green hand that nurture trees on forest across countries and we are ready to serve Earth to bring back its rich resources and health life (by founder). See what other says of what the community offers and proved. </p>

	<div class='row'>
		<div class='feedbacks-col'>
			<img src='images/user1.jpg'>
			<div>
				<p>It is really important to engage in such activies like this. I enjoy being in the community and I felt always on a good hand. I will keep being in the community and do what I can for the Earth.</p>
				<h3>John Paul Rey</h3>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star-o'></i>
			</div>
		</div>
		<div class='feedbacks-col'>
			<img src='images/user2.jpg'>
			<div>
				<p>Since 2005, I am already a member of this community. I just wanted to say that being on this community is really an opportunity not only for me but for us. Let your helping hand become part of us for Earth. Be with us for the good of all.</p>
				<h3>Imelda Reya</h3>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star'></i>
				<i class='fa fa-star-half-o'></i>
			</div>
		</div>
	</div>
</section>";

/*----------CALL TO ACTION----------*/

echo"<section class='cta'>
	<h1>Be A Member Of Our Community <br> With Everyone Around The World</h1>
	<a href='contact.php' class='hero-btn'>CONTACT US</a>
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