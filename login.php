<html>
	<head>
		<title>My Account</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" type="image/jpg" href="img/logo.jpg" />
	</head>
	<body>
		<div class= "header">
			<?php include "navigation.php"; ?>
		</div>

		<div class= "content">
			<aside>
				<?php include "sidebar.php"; ?>
			</aside>

			<div class = "login-box">
				<h1>Login</h1>
				<form method="post" action="login_handler.php">
					 <div class="input_box">
							<label for="email">Email:</label>
							<input type="text" id="email" name="email">
					  </div>

					  <br/>

					  <div class="input_box">
							<label for="password">Password:</label>
							<input type="password" id="password" name="password">
					  </div>

					  <input type="submit" value="Submit">
				</form>
			</div>
			

		</div>

		<?php include "footer.php"; ?>
		
	</body>
</html>
