<?php
// start the session function
SESSION_START();

//create a redefined username and password
$acc_username = "mrkvncnt147369@gmail.com";
$acc_password = "nemesisprime147369";
$acc_itbrothers = "Green Warriors";
$acc_location = "Marinduque Province - Region IV-B";

//check the current url for the redirections
$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 


//condition to know if the button is clicked
if(isset($_REQUEST['login_button']))
	{
		//get the username and password from the form and compare to the predefined username and password
		//if the user name is wrong
		if($_REQUEST['form_username'] != $acc_username)
			{
				header("Location: ".$url_add."?notexist");
			}
		//if the username is right but the password is wrong
		else if ($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password)
			{
				header("Location: ".$url_add."?wrongpass");
			}
		//if the username and password is correct
		else if ($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] == $acc_password)
			{
				header("Location: ".$url_add."?success");

				//create a session variable
				$_SESSION['ses_username'] = $acc_username;
				$_SESSION['ses_password'] = $acc_password;
				$_SESSION['ses_itbrothers'] = $acc_itbrothers;
				$_SESSION['ses_location'] = $acc_location;
			}//end of correct username and password 
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Greenhand Community</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/login.css">
	 <style>
body {
    background: url(images/background.avif);
    min-height: 100vh;
    overflow-x: hidden
}</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
							<form action="" method="POST" class="form">
								<h3 class="text-center mb-4">Login</h3>
			      				<div class="form-group">
					      			<input type="text" class="form-control rounded-left" placeholder="Username" name = "form_username" required>
				      			
					      			<?php
					      				//this is the messaging
				    	  			if(isset($_REQUEST['notexist']) === true){
				      					echo "<div class = 'alert alert-danger' role = 'alert'> Username does not exist... </div>";
				      				}
				      				else if (isset($_REQUEST['wrongpass']) === true){
				      					echo "<div class = 'alert alert-warning' role = 'alert'> Incorrect password... </div>";
				  	    			}
				    	  			else if (isset($_REQUEST['success']) === true){
				      					echo "<div class = 'alert alert-success' role = 'alert'> Redirecting... </div>";
				     		 				header ("Refresh: 5;url = index.php");
				      				}
				      				else if (isset($_REQUEST['logout']) === true){
				      					echo "<div class = 'alert alert-info' role = 'alert'> Thank You... </div>";
				      				}
				      				else if (isset($_REQUEST['logfirst']) === true){
				      					echo "<div class = 'alert alert-info' role = 'alert'> Please Login... </div>";
				      				}
				      				else if (isset($_REQUEST['ses_itbrothers']) === true){
				      					echo "<div class = 'alert alert-warning' role = 'alert'> You still logged in. Please <a href ='index.php'>click here </a> to proceed. </div>";
				      				}
				      				?>

				      			</div>
			           			<div class="form-group d-flex">
			              			<input type="password" class="form-control rounded-left" placeholder="Password" name = "form_password" required>
			            		</div>
									<div class="link">
										<a href="#">Forgot Password ?</a>
									</div>
					            <div class="form-group">
					            	<button type="submit" class="btn" name="login_button">Get Started</button>
					            </div>
			          		</form>
		</div>
	</section>
	</body>
</html>