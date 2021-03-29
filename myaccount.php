<?php
	session_start();
?>

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

		<div class="content">
			<aside>
				<?php include "sidebar.php"; ?>
			</aside>

			<?php include "twitter_timeline.php"; ?>

			<div class = "section-divide">
				<section class="permissions" >
				<?php 
					if(isset($_SESSION['username'])){
						echo "<p>Welcome back " . $_SESSION['username'] . "! </p>";
						if($_SESSION['user_privilege'] == 1){ // Standard user
							echo "<p>Account Status: Standard</p>";
						} else if($_SESSION['user_privilege'] == 2){ // Admin user
							echo "<p>Account Status: Admin</p>";
					
						} else if($_SESSION['user_privilege'] == 3){ // Manager
							echo "<p>Account Status: Manager</p>";
						}
					}
				?>
				</section>
			
			</div>
		</div>

		
		<?php include "footer.php"; ?>
		

	</body>
</html>
