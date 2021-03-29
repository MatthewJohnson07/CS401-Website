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

			<section class= "posting">
				<p>Create a new post!</p>

				<div class = "full-post">
					<form action = "posting_inc.php" method = "post" id="postInfo">
						<span><input type = "text" name = "title" class = "post-group" placeholder = "Enter Title (Max 100 Characters)" required /></span>
						<div class = "area">
							<span><textarea maxlength = "100" name = "content" form = "postInfo" class = "post-group" id = "textBox" placeholder = "Text (Optional)"></textarea></span>
						</div>
						
						<span><button type = "submit" class = "submit-btn" name = "post-submit">Submit</button></span>
						
					</form>
				</div>
			</section>
		</div>

	</div>

		
	<?php include "footer.php"; ?>
		

	</body>


</html>