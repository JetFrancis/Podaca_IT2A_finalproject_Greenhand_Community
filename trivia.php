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
			
<!--------types of trees----------->
<?php
echo"<section class='program'>
	<p>TRIVIA</p>
	<br>
	<h1>Trivia To Share</h1>
	<p>Different trivia from different trees we mostly plant.</p>";

	echo"<div class='row'>
		<div class='program-col'>
			<img src='images/mangroves.jpg'>
			<h4>Did you know that Mangroves helps our ecosystem?</h4>
			<p>Mangroves’ roots, trunks and canopy can reduce around 60% the force of oncoming waves. Mangroves can also provide adaptive defences for sea level rise: They produce and accumulate organic matter, and trap and retain mineral sediment. They also host a variety of species, offering nutrients to the marine food web for endangered mammals, reptiles, amphibians and birds, and providing spawning grounds for fish and shellfish.</p>
		
		</div>";
	echo"<div class='program-col'>
			<img src='images/oak.jpg'>
			<h4>Why is it called Angel Oak Tree? And where is located the oldest angel oak tree in the world?</h4>
			<p>The oak derives its name from the estate of Justus Angel and his wife, Martha Waight Tucker Angel. Local folklore tells stories of ghosts of former enslaved people appearing as angels around the tree. The Angel Oak happens to be one of the oldest trees east of the Mississippi River. The exact age of the tree is up for debate, but many estimate it to be around 15,000 years old! Its strong branches have miraculously survived everything from floods to a category five hurricane.</p>
			
		</div>";

	echo"<div class='program-col'>
			<img src='images/Bamboo.jpg'>
			<h4>Why bamboo are so special?</h4>
			<p>Bamboo releases 35% more oxygen than hardwood forests of equivalent sizes. Virtually every part of the bamboo plant can be used, and bamboo harvesting results in very low levels of waste. Bamboo does not require the use of pesticides or artificial fertilizers to grow.</p>

		</div>
	</div>";
	echo"<div class='row'>
		<div class='program-col'>
			<img src='images/aspen.jpg'>
			<h4>What is interesting facts about ASPEN TREE?</h4>
			<p>Aspen can grow from 49 to 98 feet in height, depending on the species. It usually grows to the height of 65 feet. Aspen has green, round or oval leaves that are serrated on the edges. Color of the leaves changes from green to golden yellow during the autumn. Aspen produces cylindrically-shaped clusters of flowers called catkins. Aspen blooms during March and April. Flowers can be seen on the tree before first leaves appear.</p>


		</div>";
	echo"<div class='program-col'>
			<img src='images/avocado.jpg'>
			<h4>Avocados much more nutritious than other fruits. </h4>
			<p>Avocados have higher levels of potassium than bananas. In fact, the levels are almost double-a single avocado contains 975 milligrams of potassium, compared to 487 milligrams in a banana. Researchers found that eating an avocado daily can improve LDL cholesterol levels (that’s the bad cholesterol) in people who struggle with obesity or are overweight.</p>
			
		</div>";
	echo"<div class='program-col'>
			<img src='images/birch.jpg'>
			<h4>Satisfying facts about Birch Tree</h4
			<p>Birch is deciduous tree that belongs to the family Betulaceae. There are around 60 different species of birch that grow in temperate climate around the world. Birch requires well-drained soil, enough moisture and direct sunlight for the proper growth. It usually grows near the lakes and rivers. Birch is known as pioneer species because it easily populates habitats destroyed by fire. This plant is mainly cultivated because of its ornamental morphology and high-quality wood. Out of 60 birch species, 11 are listed as endangered mainly due to habitat destruction and various fungal diseases.</p>
		</div>
		</div>";

	echo"</div>
	<div class='row'>
		<div class='program-col'>
			<img src='images/cacao.jpg'>
			<h4>What satisfying facts about the Cacao Tree?</h4>
			<p>The cacao tree is a small tree originally grown in tropical South America. It only grows to 4 to 8 meters in height. Its seeds are called cocoa and are used to produce cocoa butter, chocolate drinks, and chocolate. Now the trees are grown in plantations in many tropical countries. Cacao trees are grown commercially to grow raw material, which, in turn, goes towards the production of various goods.</p>

		</div>";
	echo"<div class='program-col'>
			<img src='images/lemon.jpg'>
			<h4>Why Lemons brings nutritious elements in the human body?</h4>
			<p>Lemon is an evergreen plant that belongs to the family Rutaceae. It originates from Asia, but it can be found in tropical and sub-tropical regions throughout the world today. Lemon is important part of human diet, but it has numerous other, equally valuable properties. Lemon is best known as a rich source of vitamin C. Other than that, lemon contains valuable minerals such as potassium, zinc, calcium and magnesium. </p>
			
		</div>";
	echo "<div class='program-col'>
			<img src='images/palm.jpg'>
			<h4>Palm Tree</h4>
			<p>Palm tree grows only in the tropical climate. This plant live on the sandy soil, requires a lot of sunlight and regular rainfalls. Palm tree does not tolerate low temperatures and low percent of humidity. Cultivated plants are prone to insect attacks which can decrease production of fruit worth of hundreds of million dollars. Palms is important part of human diet because it contains valuable vitamins and minerals.</p>
			
		</div>
	</div>

</section>";
?>

	


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