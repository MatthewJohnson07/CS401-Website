<?php
	session_start();
?>

<html>
	<head>
		<title>Collaborate The Game</title>
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

			<div class="post-space">
				<div class="main-post">
					<img src = "https://cdn.theathletic.com/app/uploads/2019/03/19155751/trout-1024x707.jpg" alt = "Trout" width ="500" height ="345"/>
					<div class = "post-heading"><a href = "baseballthread.php">Exit Velocity vs. Bat Acceleration</a></div>
					<div class = "post-author">Written by Matthew Johnson</div>
				</div>
				
				<div class="main-post">
					<img src = "https://thespun.com/wp-content/uploads/2020/11/GettyImages-1284649656.jpg" alt = "Brees" width = "500" height= "345"/>
					<div class = "post-heading"><a href = "footballthread.php">Common Skills Among Undersized QBs</a></div>
					<div class = "post-author">Written by Adam Smith</div>
				</div>

				<div class="main-post">
					<img src = "https://images2.minutemediacdn.com/image/upload/c_fill,w_720,ar_3:2,f_auto,q_auto,g_auto/shape/cover/sport/dataimagewebpbase64UklGRpClAABXRUJQVlA4IISlAABQAQW-df12920ea39613e845a2a3445d23329f.jpg" alt = "Isaiah" width = "500" height= "345"/>
					<div class = "post-heading"><a href = "basketballthread.php">Buzzer Beater Shots: Build Confidence</a></div>
					<div class = "post-author">Written by Riley Riles</div>
				</div>

				<div class="main-post">
					<img src = "https://cdn.vox-cdn.com/thumbor/F42K090kveoV0tt5sRFxkTh45gk=/0x431:4770x3712/1200x800/filters:focal(1632x533:2522x1423)/cdn.vox-cdn.com/uploads/chorus_image/image/68869672/1228836968.0.jpg" alt = "Tatis Jr" width = "500" height= "345"/>
					<div class = "post-heading"><a href = "baseballthread.php">Grow The Game</a></div>
					<div class = "post-author">Written by Alan Atkinson</div>
				</div>
			</div>
		
		</div>
		
		<?php include "footer.php"; ?>
		
	</body>
</html>
