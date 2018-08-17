<?php
session_start(); //Starting Session
$error='';//Variable to store error message
if (isset($_POST['submit'])){
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "username or password is Invalid";
	}
	else
	{
		//Define $username and $password
		$username = $_POST['username'];
		$password = $_POST['password'];


		//Establishing connection with server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "");
		// localhost to localhost:2000 and back,

		//To Protect from MySQLi injection
		$username = stripslashes($username);
		$password = stripslashes($password);

		// $username = mysqli_real_escape_string('$username');
		// $password = mysqli_real_escape_string('$password');
// echo $username;
		//select DB, "company" can prob be changed?
		$db = mysqli_select_db($connection, "company");

		// SQL query to fetch information of registered users and finds match
		$query = mysqli_query($connection, "SELECT * FROM login WHERE password='$password' AND username='$username'" );
				// echo $query;
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			// == 1,
			$_SESSION['login_user']= $username; // Inializing Session
			header("location:profile.php"); // Redirecting to other page
		} else {
			$error ="Username or Password Invalid";
		}
		// mysqli_close();
		mysqli_close($connection); // Closing connection
	}
}
?>