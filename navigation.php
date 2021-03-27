<div class = "logo">
		<a href = "home.php"> <img src="img/logo.jpg" alt="logo" class="logo"/> </a>
	</div>

	<div class= "header-links">
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="threads.php">Threads</a></li>

				<?php 
					if(isset($_SESSION['username'])){
						echo "<li><a href='myaccount.php'>" .$_SESSION['username'] . "</a></li>";
					} else {
						echo "<li><a href='signup.php'>Sign up</a></li>";
					}
					
					
				?>
			</ul>
		</nav>
	</div>
