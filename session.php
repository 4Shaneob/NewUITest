<?php
//Establishing Connection with Server by passing servername, user_id and password as a param
$connection = mysqli_connect("localhost", "root", "");

//seclet DB
$db = mysqli_select_db($connection, "company");
session_start(); // Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];
// echo $user_check;
//SQL Query to fetch complete Info of User
$ses_sql=mysqli_query($connection, "SELECT username FROM login WHERE username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
// echo $row;
$login_session = $row['username'];
// echo $login_session;

if(!isset($login_session)){
	mysqli_close($connection); //Closing connection
	//header('Location: index.php'); // Redirecting to home page
}
?>