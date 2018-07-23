<!-- http://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->

<!-- CHANGED from include:  https://www.w3schools.com/php/php_includes.asp -->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2> 
	</div>
	<!-- DOES not seem to be reading insert query from the server PHP file only the session info and the link
	if I  place the INSERT INTO query in to the registration file to inserts it twice in to DB, one blank row then another with data -->
	<?php $db = mysqli_connect('localhost', 'root', '', 'registration'); ?>
	<?php  ?>
	<form method="post" action="register.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username: </label>
			<input type="text" name="username" value="<?php echo $username; ?>" >			
		</div>
		<div class="input-group">
			<label>Email: </label>
			<input type="email" name="email" value="<?php echo $email; ?>" >			
		</div>
		<div class="input-group">
			<label>Password: </label>
			<input type="password" name="password_1" >			
		</div>
		<div class="input-group">
			<label> Confirm Password: </label>
			<input type="password" name="password_2" >			
		</div>
		<div class="input-group">
  	  		<button type="submit" class="btn" name="reg_user">Register</button>
  		</div>
  		<p>
  			| Already a member? <a href="login.php"> Sign in</a> |
  		</p>
  		<p>NOT FUCKING STORING TO DB</p>
	</form>
	<!-- <div id="test code"> if removed does not send to database.
		IF REMOVED DOES NOT INSERT DATA TO DB.
	 	<p>
	 		// <?php 
	 		//	$db = mysqli_connect('localhost', 'root', '', 'registration');
	 			// Check connection
	 		//	if (!$db) {
	 		//		echo "Failed to connect to MySQL: " . mysqli_connect_error();
			//	} 
		
			//	$query = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
			//	if(!mysqli_query($db, $query)) {
			//		    die("GOD DAMMIT");
			//	}
			// ?>
		</p>		
	</div>
 -->

</body>
</html>