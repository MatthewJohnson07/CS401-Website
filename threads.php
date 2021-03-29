<?php
	session_start();
?>

<html>
	<head>
		<title>Collaborate The Game</title>
		<link rel="stylesheet" href = "posts.css"/>
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
				<?php 
				require_once 'dbh_inc.php';
				require_once 'functions_inc.php';
				
				
				if(isset($_SESSION['username'])){
					
					
					// User is an Admin or Manager
					if($_SESSION['user_privilege'] == 2 OR $_SESSION['user_privilege'] == 3){

						
						echo "<div class = 'createPostBtn'>
								<form action = 'createPost.php'>
									<input type='submit' value = 'Create Post' name = 'createPost'/>
								</form>
							  </div>";

					}

				}
				
				
				$posts = getPosts($connection);

					?>	
					<table class = "posts-table">
							<thead>
								<tr>
									<th>Title</th>
									<th><userTag>Author</userTag></th>
									<th>Date Created</th>
								</tr>
							</thead>
							<tbody> 	
								<?php
									foreach ($posts as $post) {
										echo
											"<tr><td>" . htmlspecialchars($post['title']) . "</td>" .
											"<td>" . htmlspecialchars($post['username']) . "</td>" .
											"<td>" . htmlspecialchars($post['created_on']) . "</td></tr>";
									}
								?>
							</tbody>
					</table>
				
			</div>

		</div>

		<footer>
			<?php include "footer.php"; ?>
		</footer>

	</body>
</html>
