<?php
session_start();
if (session_destroy()) //Destroy all sessions
{
	header("Location: index.html"); //Redirecting to Home Page
}
?>