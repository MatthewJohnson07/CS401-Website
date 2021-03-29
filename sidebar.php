	<div class="wrapper">
		<div class ="sidebar">
			<ul>
				<li><a href="baseballthread.php">Baseball</a></li>
				<li><a href="basketballthread.php">Basketball</a></li>
				<li><a href="footballthread.php">Football</a></li>
				<li><a href="#">Golf</a></li>
				<li><a href="#">Hockey</a></li>
				<li><a href="#">Softball</a></li>
				<li><a href="#">Tennis</a></li>
				<li><a href="#">Volleyball</a></li>
			</ul>
			<div id= "sidebar-nav">
				<ul>
					<li><a href="#">Favorites</a></li>

					<?php 
					if(isset($_SESSION['username'])){

						echo "<li><a href='logout_inc.php'> Log Out </a></li>";
						
					} else {
						echo "<li><a href='signup.php'>Log in</a></li>";
					}
					?>

					
				</ul>
			</div>
		</div>
	</div>
