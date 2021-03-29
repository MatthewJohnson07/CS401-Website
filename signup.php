<?php
	session_start();
?>

<html>
	<head>
		<title>Collaborate The Game</title>
		<link rel="stylesheet" href="signup_style.css">
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="img/logo.jpg" />
	</head>
	<body>
	<div class= "header">
		<?php include "navigation.php"; ?>
	</div>

	<div class="content">
		<?php include "sidebar.php"; ?>

		<?php include "twitter_timeline.php"; ?>

		<div class = "section-divide">
			<div class="signup-register">
				<div class= "form-box">

					<div class = "button-box">
						<div id= "btn"></div>
						<button type="button" class="toggle-btn" onclick="login()">Log In</button>
						<button type="button" class="toggle-btn" onclick="register()">Register</button>
					</div>

					<section class = "signin">
						<form action = "login_inc.php" method = "post" id = "login" class="input-group" >
							<input type="text" name = "email" class = "input-field" placeholder = "Username or Email" required />
							<input type="password" name = "password" class = "input-field" placeholder = "Enter Password" required />
							<button type="submit" name = "submit" class = "submit-btn">Log In</button>
						</form>

						<?php
						if(isset($_GET['loginerror'])){
							if($_GET['loginerror'] == "emptyinput"){
								echo "<p>Fill in all fields</p>";
							} else if($_GET['loginerror'] == "wrongpassword"){
								echo "<p>One of the input fields is incorrect</p>";
							} else if($_GET['success'] == "login"){
								echo "<p>You have successfully logged in!</p>";
							}
						}
						?>
					</section>

					<section class = "signup">
						<form action = "signup_inc.php" method = "post" id = "register" class="input-group" >
							<input type="text" name = "username" class = "input-field" placeholder = "Username" required />
							<input type="email" name = "email" class = "input-field" placeholder = "Email" required />
							<input type="password" name = "password" class = "input-field" placeholder = "Enter New Password" required />
							<button type="submit" name = "submit" class = "submit-btn">Register</button>
						</form>

						<?php
							if(isset($_GET['error'])){
								if($_GET['error'] == "emptyinput"){
									echo "<p>Fill in all fields</p>";
								} else if($_GET['error'] == "invalidusername"){
									echo "<p>Username is invalid</p>";
								} else if($_GET['error'] == "invalidemail"){
									echo "<p>Choose a proper email</p>";
								} else if($_GET['error'] == "stmtfailed"){
									echo "<p>Something went wrong. Please try again</p>";
								} else if($_GET['error'] == "usernametaken"){
									echo "<p>Username has already been taken</p>";
								} else if($_GET['error'] == "none"){
									echo "<p>You have signed up!</p>";
								}
							}
						?>
					</section>

				</div>

				<script>
					var x = document.getElementById("login");
					var y = document.getElementById("register");
					var z = document.getElementById("btn");

					function register() {
						x.style.left = "-400px";
						y.style.left = "50px";
						z.style.left = "110px";
					}

					function login() {
						x.style.left = "50px";
						y.style.left = "450px";
						z.style.left = "0px";
					}

				</script>
			</div>
		</div>
	</div>
		
	<?php include "footer.php"; ?>
		
	</body>
</html>
