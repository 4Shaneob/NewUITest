<?php
  include('login.php'); // Includes Login Script

  if(isset($_SESSION['login_user'])){
    header("location:item_Selection.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <title>Login</title>
   
  </head>

<body>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    	<div class="container">
			<!--<a class="navbar-brand" href="#">It's PopcornTime!</a>
 -->       	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 0px">
            	<span class="navbar-toggler-icon"></span>
        	</button>
        	<!-- Nav bar links/list -->
	        <div class="collapse navbar-collapse" id="navbarResponsive">
	        	<ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="item_Selection.html">Order</a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href=""> <!--  href="login.html" -->Account<span class="caret"></span></a> 
                <ul class="dropdown-menu dropLink">
                  <li><a style="background-color: #343A40 !important;" class="linkbutton nav-link dropLink" href="LoginIndex.php">Login</a><!--  href="login.html"  Login.html--></li>
                  <li>
                    <a style="background-color: #343A40 !important;" class="linkbutton nav-link dropLink isDisabled" href="register.html">Register</a>
                  </li>
                </ul>
              </li>
		            <li class="nav-item">
		           		<a class="nav-link" href="logout.php">Logout</a>
		            </li>
		        </ul>
	        </div>
       	</div>
      </nav>
<!-- END OF NAV -->

<!-- style="position: absolute; left:-5000px;" aria-hidden="true"> -->

<!-- Header/Main Body with Picture -->
    <header class="startup text-center text-white d-flex">
      <div class="container my-auto">
      	<div class="row">
      		<div class="col-lg-12 my-auto">
      			<br>
      		</div>
      	</div>

        <div class="row">
        	<div class="col-lg-12 my-auto">
      			<br>
      		</div>
          <div class="col-lg-12 my-auto">
            <!-- action="/action_page.php" onsubmit="return validateForm()" -->
          	<form class="form2" name="myForm" method="post">
          		<h1>Login</h1>
          		<h3>Please Log in</h3>
      				<table class="myTable">
      					<tr>
      						<td><label>Email: </label></td>
                  <!-- added bits from the login.php, id, removed email from name -->
      						<td><input id="name" type="text" name="username" placeholder="Username"></td>
      					</tr>
      					<br>
      					<tr></tr>
      					<br>
      					<tr>
      						<td><label>Password: </label></td>
      						<td><input type="Password" name="password"></td>
      					</tr>
      					<br>
      					<tr>
      						<td></td>
      						<td><input type="submit" name="submit" value="Submit"></td>
      					</tr>
      				</table>
              <span><?php echo $error; ?></span>
      			</form>
          </div>
        </div>
      </div>
    </header>

<!-- Footer -->
    <footer>
        <p class="text-left text-white" style="margin-bottom: 0;">Copyright &copy; It's PopcornTime 2018</p>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/JavaScript/script.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS from a CDN. This way you don't have to include the bootstrap file yourself -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- My own stylesheet -->
    <link href="style.css" rel="stylesheet">
  </body>
</html>