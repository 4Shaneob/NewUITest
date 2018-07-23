<?php 
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = " Log in first.";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}
 ?>

 <!DOCTYPE html>
 <html>
 
 <head>
 	<title>Home</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 
 <body>
 	<div class="content">
 		<!-- notification message -->
 		<?php if (isset($_SESSION['success'])) : ?>
 			<div class="error success">
 				<h3>
 					<?php 
 					echo $_SESSION['success'];
 					unset($_SESSION['success']);
 					// echo ($query);
 					?>
 				</h3>
 			</div>
 		<?php endif ?>

 		<!-- LOGGED IN USER -->
 		<?php if(isset($_SESSION['username'])) : ?>
 			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
 			<p><a href="index.php?logout='1'" style="color:red;">Logout</a></p>
 			<!-- test -->
 			<!-- <?php  
 			// $quest = "SELECT * FROM users";
 			// $db1 = mysqli_query($db, $quest); 
 			?>
 			<p><?php // print_var($db1); ?></p> -->
 			<!-- test 2 -->
	 		<!-- 	<p> 
	 			<?php $sql// = mysqli_query("SELECT *
	   //  		FROM `users`;"); 	
				// while($row = fetch_assoc()){
	 		// 	   echo $row['username'] . '<br />';
				// }	
				//  ?> -->
			</p>
 		<?php endif ?>

 </body>
 </html>