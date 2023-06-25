<?php
 include 'websiteheader.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="signup-style.css">
		<title> Sign Up </title>
	</head>
	<body>
		<main>
			<div class="drcn1" style="text-align:center">
			<h1 id="heading1" style="font-family: Cursive; font-size:30px; color:#b3203b; text-align: center; background-color: #bfe3b4; margin:default; padding:10px; width:100%"> Create a New Account </h1>
		</div>
				<form class="signup" action="includes/signup.inc.php" method="post"><br /><br />
					<input type="text" name="user_firstname" placeholder="First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="user_lastname" placeholder="Last Name"><br /><br />
					<input type="text" name="user_idname" placeholder="User Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type ="text" name="user_email" placeholder="Email"><br /><br />
					<input type="password" name="user_pass" placeholder="Password">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="password" name="user_pass-repeat" placeholder="Repeat The Password"><br /> <br />
					<div class="btn_holder">
						<button class="submit" name="signup-submit">SignUp</button>
					</div>
				</form>
			</div>
		</main>
		<pre>








		</pre>
		<?php 
	include 'websitefooter.php'
	?>

	</body>
</html>
