<!-- http://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database -->
<?php 
session_start();

// declare variables then connect Check connection2 (https://stackoverflow.com/questions/22138746/php-form-not-inserting-into-mysql-database[answer by "vinay k hegade"]
$servername = "localhost";
$dbusernasme = "root";
$dbpass = "";
$dbname = "registration";

// initalising variables
$username = " ";
$email = " ";
$errors = array();

// connect to DB
$db = mysqli_connect($servername, $dbusernasme, $dbpass, $dbname);
// Check connection
if (!$db) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Check connection2 (https://stackoverflow.com/questions/22138746/php-form-not-inserting-into-mysql-database)
// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// } 

// REGISTER USER
if (isset($_POST['reg_user'])) { 
	// recieve all input values from the form.
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding unto $errors array
	if (empty($username)) { array_push($errors, "username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if ($password_1 != $password_2) {
		array_push($errors, "Passwords do not match");
	}

	//  checking db to make sure user does not exist with the same username and/or email
	$user_check_query = "SELECT * FROM users WHERE username ='$username' OR email ='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// from: https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
	if (!mysqli_query($db,$user_check_query)) {
		  die('Error2: '. mysqli_error($db));
		}

	if ($user)  {
	//if exists
		if ($user['username'] === $username) {
			array_push($errors, "Username Exists already");
		}

		if ($user['email'] === $email) {
			array_push($errors, "email already exists");
		}
	}

	//  register user only if no errors
	if (count($errors) == 0) {
		$password =md5($password_1); //encrypt password before saving to db

		$query = "INSERT INTO users (username, email, password) 
		VALUES('$username', '$email' '$password')";
		mysqli_query($db, $query);
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "you are logged in now";
		header('location: index.php');
		// test to see if 
		// echo $query;
		// testing
		// echo('mysqli_query');
	}
	// from: https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
	// if (!mysqli_query($db,$query)) {
	// 	  die('Error1: '. mysqli_error($db));
	// 	}
	// echo "1 record added";

// close db connection (https://stackoverflow.com/questions/22138746/php-form-not-inserting-into-mysql-database)
	// $db->close();
}

// end of REGISTER USER
// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username required");
	}
	if (empty($password)) {
		array_push($errors,"Password Required");
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1 ){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "logged in";
			header('location: index.php');
		}
		else {
			array_push($errors, "incorrect details");
		}
	}
}
// end of LOGIN USER

 ?>
