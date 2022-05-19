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
			
<!--------Founders----------->
<?php
	 echo "<section class='about'>";
	 	
	 	echo "<h1>Your Are One Of Us</h1>";
	 	echo"<p>To fulfill our goals, we plant trees, engage thousands of volunteers of all ages in tree planting and care, provide year-round continuing education courses, monitor the nation's forest, develop interactive online tree tools and work with elected officials, developers, and community groups to protect and care for existing trees and to encourage the addition of new ones. Thus, we need your green hand.</p>

	 </section>";
	 ?>

	 <?php
echo"<section class='about_us'>
	<div class='row'>
		<div class='about_col'>";
		
			echo "<h1>The IT Brothers</h1>";
			echo"<h5>Community Founders</h5>";
			echo"<p>The IT Brothers are the founder of the Greenhand Community. <br>They are:</p>";

			echo "<h2>Jet Francis Q. Podaca</h2>";
			echo "<h5>Founder</h5>";
	 		echo"<p>Before he founded the Greenhand Community along with Mark Vincent Leaño, he is a graduate of a computer-related course but he mastered the environment-related course first in both national and international universities and become a volunteer of various environment-friendly organization in his country, the Philippines. He is the youngest son of Monching Podaca, an Environmental Expert and Mary Ann Podaca, a politician. He was born on October 01 and he is now 25 years old where almost his past 10 years was spent for the community, the Greenhand Community today.  <br>
	 			Now, he is a master in both computers and environment though took more experiences on being an environmentalist, or as the founder of the Greenhand Community. He loves more being in the community he founded along with his colleagues. He acts as the head of the community as facilitates and leads the organization to fulfill their long-term goals.</p>
	 			<br>";


	 		echo"<h2>Mark Vincent Leaño</h2>";
	 		echo "<h5>Founder</h5>";
	 		echo"<p>He is also one of the founders of Greenhand Community, a longtime friend of Jet Francis Podaca. He is also a graduate of a computer-related course yet despite of being in that area of expertise, he mastered the environment-related course in the same universities as Jet Francis Podaca, the one who inspired him to be an environmentalist and be one of the founder. He is from a wealthy family but chosen to give a greenhand service to the community. He is an industrious man who also have other works other than being one of the founder. He is the son of Mhay Leaño and Alberto Leaño who are both environmental engineers. He was born on June 02 and he is now 24 years old, a young founder who spent years in giving service as his co-founder. <br>
	 			Now, he's still working as one of the founder applying his wisdom from his areas of expertise. He also acts as the planner of the community as he composed several plans and programs to fulfill the goals of the Greenhand Community.</p>";
	 	
			
		echo"
		</div>
		<div class='about_col'>
			<div class='camp-col'>
	 			<img src='images/founder1.JPG'> 
	 			<div class='layer'>
	 				<h3>Jet Francis Podaca</h3>
	 			</div>			
	 		</div>
	 		<div class='camp-col'>
	 			<img src='images/founder2.jpg'> 
	 			<div class='layer'>
	 				<h3>Mark Vincent Leaño</h3>
	 			</div>			
	 		</div>
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