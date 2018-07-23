<!-- http://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<p>Login</p>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">z
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div class="input-group">
		<div>
			<button type="submit" class="btn" name="login_user"> Login </button>
		</div>
		
		<p>
			Register here. <a href="register.php"> Register </a>
		</p>
	</form>
</body>
</html>