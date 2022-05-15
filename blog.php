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
					<li><a href="">PROFILE</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>

		<h1>Our Certificates & Achievements For 2022</h1>
	</section>

	<!---------Blog Page------------>

	<?php
	echo"<section class='blog-content'>
		<div class='row'>
			<div class='blog-left'>";
				echo"<img src='images/awards.jpg'>";
				echo"<h2>Our Certificates & Achievements For 2022</h2>";
				echo"<p>It has been a pleasure to te community to recieve certifications, partnership, and sponsors from the activities that 	this community doing since 2001 when it was founded. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
				<br>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur<br>
				<br>We are thakful that this community was founded because of its various achievements so far.
				</p>";


				echo"<div class='comment-box'>";
					echo"<h3>Leave a comment</h3>";
					echo"<form class='comment-form' action='error.php'>
						<input type='text' placeholder='Enter Name'>
						<input type='email' placeholder='Enter Email'>
						<textarea rows='5' placeholder='Your comment'></textarea>
						<button type='submit' class='hero-btn green-btn'>POST COMMENT</button>
					</form>
				</div>";


			echo"
			</div>
			<div class='blog-right'>
				<h3>Post Categories</h3>
				<div>
					<span>Trees Life</span>
					<span>21</span>
				</div>
				<div>
					<span>Nature Photography</span>
					<span>44</span>
				</div>
				<div>
					<span>Global Warming</span>
					<span>48</span>
				</div>
				<div>
					<span>Deforestation</span>
					<span>55</span>
				</div>
				<div>
					<span>Livelihood</span>
					<span>69</span>
				</div>
				<div>
					<span>Tree Planting</span>
					<span>86</span>
				</div>
				<div>
					<span>Earth and Trees</span>
					<span>99</span>
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