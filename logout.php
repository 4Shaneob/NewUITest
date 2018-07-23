<?php
session_start();
if (session_destroy()) //Destroy all sessions
{
<<<<<<< HEAD
	header("Location: index.html"); //Redirecting to Home Page
=======
	header("Location: index.php"); //Redirecting to Home Page
>>>>>>> beb637e1d62f8d5999c202fe2eeb501a3b814466
}
?>