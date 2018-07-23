<?php
include('session.php');
// left out ' '  around session.php, then when I did, log on no longer working. changed it back.
// require session.php; Didn't work ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="profile">
		<b id="welcome"> Welcome : 
			<i> <?php echo $login_session; ?> </i>
		</b>
		<!-- echo to print and back -->
		<!-- b changed to strong and back -->
		<b id="logout"><a href="logout.php">Log Out</a></b>
	</div>
</body>
</html>
