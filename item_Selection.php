<?php include('session.php'); ?>
<!-- New UI -->
<!DOCTYPE html>
<html>
<head>
  <!-- PayPal Buttons: https://developer.paypal.com/docs/classic/paypal-payments-standard/integration-guide/html_example_cart/ -->
  <!--  Disbale links in Nav Bar: https://css-tricks.com/how-to-disable-links/-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
     <!-- My own stylesheet -->
    <link href="style.css" rel="stylesheet">

    <title>Order</title>
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
	                <a class="nav-link" href="index.html">Home
	                  <span class="sr-only">(current)</span>
	                </a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="item_Selection.php">Order</a>
	              </li>
	              <li class="nav-item dropdown">
	                <a class="dropdown-toggle nav-link isDisabled" data-toggle="dropdown" href=""> <!--  href="login.html" -->
	                  Account
	                  <span class="caret"></span>
	                </a> 
	                <ul class="dropdown-menu">
	                  <li>
	                    <a class="linkbutton isDisabled" href="">Login</a> <!--  href="login.html"  Login.html-->
	                  </li>
	                  <li>
	                    <a class="linkbutton isDisabled" href="">Register</a> <!--  href="register.html" -->
	                  </li>
	                </ul>
	               </li>
  			        <li class="nav-item isDisabled">
  			        	<a class="nav-link" href="#">Contact</a>
  			        </li>
		        </ul>
	        </div>
       	</div>
      </nav>
<!-- END OF NAV -->

<!-- Header/Main Body with Picture -->
    <header class="startup text-center text-white d-flex ">
      <div class="container my-auto">
      	<div class="column" style="align-content: center!important">
          <div id="profile">
            <div class="row">
              <div class="col-lg-12 my-auto col-sm-12 portfolio-item">
                <b id="welcome"> Welcome : 
                  <i> <?php print $login_session; ?> </i>
                </b>
              </div>
            </div>
            <!-- echo to print and back -->
            <!-- b changed to strong and back -->
            <div class="row">
              <div class="col-lg-12 my-auto col-sm-12 portfolio-item">
                <b id="logout"><a href="logout.php">Log Out</a></b>
              </div>
            </div>
          </div>
<!-- SEAT AND SCREEN -->
          <div class="row">
        		<div class="col-lg-12 my-auto col-sm-12 portfolio-item">
        			<label for="country">Screen: </label>
    			    <select id="country" name="country" style="background-color: #808080c2; opacity: 0.6; color: white">
    			      <option value="Select Screen">Select Screen</option>
    			      <option value="Screen 1">Screen 1</option>
    			      <option value="Screen 2">Screen 2</option>
    			      <option value="Screen 3">Screen 3</option>
    			    </select>
            	</div>
          </div>
          <div class="row">
        		<div class="col-lg-12 my-auto col-sm-12 portfolio-item">
        			<label for="seatNumber">Seat Number: </label>
  			    <input type="text" name="seatNumber" placeholder="Enter your Seat Number" style=" background-color: #808080c2; opacity: 0.6; color: white">
      			</div>
    		  </div>
 <!--        </div>
      </div> -->
<!-- END SEAT AND SCREEN   -->

<!-- BASKET BUTTON         -->
<!--         <div class="row">
      		<div class="col-lg-12 my-auto col-sm-12 portfolio-item">
      			<button class="basketBtn">
          			<a href="basket.html" style="color: white;">Basket</a>  
          		</button>
          	</div>
        </div>
 -->
        <div class="row">
          <div class="col-lg-12 my-auto">
          	<h4>Please select the items you would like, then the size and click the add to cart</h4>
          </div>
        </div>

<!-- ITEMS         -->
        <div class="row">
	        <div class="col-lg-12 col-sm-12 portfolio-item">
	          <div class="card h-50" style="height: 100%!important; color: white; background-color: transparent; border: none; padding: 0px">
<!-- Code for REAL paypal functionality  https://www.paypal.com/cgi-bin/webscr-->
                  <form target=".self" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post"> 
                    <input type="hidden" name="business" value="Cinema@movies.com">

                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">

                    <input type="hidden" name="item_name" value="Popcorn">
                    <input type="hidden" name="currency_code" value="EUR">

                    <input type="hidden" name="on1" value="Size">
                    <label class="u" for="os1"><h5>Popcorn</h5></label>
                    <select name="os1" id="os1">
                        <option value="Select a size">-- Select a size --</option>
                        <option value="Small">Small - €3.95 </option>
                        <option value="Medium">Medium - €4.95 </option>
                        <option value="Large">Large - €5.95 </option>
                    </select>

                    <input type="hidden" name="option_index" value="1">
                    <input type="hidden" name="option_select0" value="Small">
                    <input type="hidden" name="option_amount0" value="3.95">
                    <input type="hidden" name="option_select1" value="Medium">
                    <input type="hidden" name="option_amount1" value="4.95">
                    <input type="hidden" name="option_select2" value="Large">
                    <input type="hidden" name="option_amount2" value="5.95">


                    <input type="image" name="submit"  src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="Add to Cart">
                    <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                </form>
	          </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-lg-12 col-sm-12 portfolio-item">
	          <div class="card h-50" style="height: 100%!important; color: white; background-color: transparent; border: none; padding: 0px;">
	            <!-- <a href="#"><img class="card-img-top" src="Pictures\BW-Drink2.png" alt=""></a> -->
	            <!--  https://www.paypal.com/cgi-bin/webscr-->
                   	<form target=".self" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                      <input type="hidden" name="business" value="Cinema@movies.com">

                      <input type="hidden" name="cmd" value="_cart">
                      <input type="hidden" name="add" value="1">

                      <input type="hidden" name="item_name" value="Drink">
                      <input type="hidden" name="currency_code" value="EUR">

                      <input type="hidden" name="on0" value="Flavor">
                      <h5 class="u">Drinks</h5>
                      <label for="os0">Flavour</label>
                          <select name="os0" id="os0">
                              <option value="Select a flavour">-- Select a flavour --</option>
                              <option value="Club_Orange">Club Orange</option>
                              <option value="Coca_Cola">Coca Cola</option>
                              <option value="7up">7up</option>
                              <option value="Matcha_Tea">Matcha Tea Latte</option>
                          </select>

                      <input type="hidden" name="on1" value="Size">
                      <label for="os1">Size</label>
                      <select name="os1" id="os1">
                          <option value="Select a size">-- Select a size --</option>
                          <option value="Small">Small - €3.95 </option>
                          <option value="Medium">Medium - €4.95 </option>
                          <option value="Large">Large - €5.95 </option>
                          <option value="Super-Sized">Super-Sized - €6.95</option>
                      </select>

                      <input type="hidden" name="option_index" value="1">
                      <input type="hidden" name="option_select0" value="Small">
                      <input type="hidden" name="option_amount0" value="3.95">
                      <input type="hidden" name="option_select1" value="Medium">
                      <input type="hidden" name="option_amount1" value="4.95">
                      <input type="hidden" name="option_select2" value="Large">
                      <input type="hidden" name="option_amount2" value="5.95">

                      <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="Add to Cart">
                      <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                  </form>
	          </div>
	        </div>
	    </div>
	    <div class="row">
	        <div  class="col-lg-12 col-sm-12 portfolio-item">
	          <div class="card h-50" style="height: 100%!important; color: white; background-color: transparent; border: none; padding: 0px;">
	            <!-- <a href="#"><img class="card-img-top" src="Pictures\BW-Drink2.png" alt=""></a> -->
	            <!--  https://www.paypal.com/cgi-bin/webscr-->
                  <form target=".self" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="business" value="Cinema@movies.com">

                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">

                    <input type="hidden" name="item_name" value="Nachos">
                    <input type="hidden" name="currency_code" value="EUR">

                    <input type="hidden" name="on1" value="Size">
                    <label for="os1" class="u"><h5>Nachos</h5></label>
                    <select name="os1" id="os1">
                        <option value="Select a size">-- Select a size --</option>
                        <option value="Small">Small - €3.95 </option>
                        <option value="Large">Large - €5.95 </option>
                    </select>

                    <input type="hidden" name="option_index" value="1">
                    <input type="hidden" name="option_select0" value="Small">
                    <input type="hidden" name="option_amount0" value="3.95">
                    <input type="hidden" name="option_select1" value="Large">
                    <input type="hidden" name="option_amount1" value="5.95">


                    <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="Add to Cart">
                    <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                  </form>
	          </div>
	        </div>
	    </div>
	    <div class="row" ">
	    	<div  class="col-lg-12 col-sm-12 portfolio-item">
		       <div class="card h-50" style="height: 100%!important; color: white; background-color: transparent; border: none; padding: 0px">
		            <!-- <a href="#"><img class="card-img-top" src="Pictures\BW-Drink2.png" alt=""></a> -->
		            <!--   https://www.paypal.com/cgi-bin/webscr-->
                  <form target=".self" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="business" value="Cinema@movies.com">

                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="add" value="1">

                    <input type="hidden" name="item_name" value="Sweets">
                    <input type="hidden" name="currency_code" value="EUR">

                    <input type="hidden" name="on1" value="Size">
                    <label class="u" for="os1"><h5>Sweets</h5></label>
                    <select name="os1" id="os1">
                        <option value="Select a size">-- Select a Sweet --</option>
                        <option value="Buttons">Buttons - €5.00 </option>
                        <option value="Malteasers">Malteasers - €5.00 </option>
                        <option value="Randoms">Randoms - €5.00 </option>
                        <option value="ColaBottles">Cola Bottles - €5.00 </option>
                        <option value="PicknMix">Pick 'n' Mix - €5.00 </option>
                    </select>

                    <input type="hidden" name="option_index" value="1">
                    <input type="hidden" name="option_select0" value="Buttons">
                    <input type="hidden" name="option_amount0" value="5.00">
                    <input type="hidden" name="option_select1" value="Malteasers">
                    <input type="hidden" name="option_amount1" value="5.00">
                    <input type="hidden" name="option_select2" value="Randoms">
                    <input type="hidden" name="option_amount2" value="5.00">
                    <input type="hidden" name="option_select3" value="ColaBottles">
                    <input type="hidden" name="option_amount3" value="5.00">
                    <input type="hidden" name="option_select4" value="PicknMix">
                    <input type="hidden" name="option_amount4" value="5.00">


                    <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="Add to Cart">
                    <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                </form>

<!--  https://www.paypal.com/cgi-bin/webscr-->
                <form target="_self" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                      <!-- Identify your business so that you can collect the payments. -->
                      <input type="hidden" name="business" value="Cinema@movies.com">

                      <!-- Specify a PayPal shopping cart View Cart button. -->
                      <input type="hidden" name="cmd" value="_cart">
                      <input type="hidden" name="display" value="1">

                      <!-- Continue shopping on the current webpage of the merchant site. -->
                      <input type="hidden" name="shopping_url" value="www.google.com">

                      <!-- Display the View Cart button. -->
                      <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_LG.gif" alt="Add to Cart">
                      <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
                  </form>
		    </div>
        </div>
    </div>
      </div>
      </div>  
    </header>

    <footer>
        <p class="text-left text-white" style="margin-bottom: 0;">Copyright &copy; It's PopcornTime! 2018</p>
    </footer>

<!-- Footer -->
  <!--   <footer class="py-5 bg-dark footer">
      <div>
 -->

<!-- Pagination -->
      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
	        <!-- <li class="page-item">
	          <a class="page-link" href="#">2</a>
	        </li>
	       
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul> --> 
      <!-- </div> -->
      <!-- /.container -->
      <!-- <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; It's PopcornTime 2018</p>
      </div>

    </footer> -->


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS from a CDN. This way you don't have to include the bootstrap file yourself -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <!-- moved to header css link -->
    <!-- MyScript file -->
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>

<!-- Atempted to make Cinema@movies.com a paypal sandbox business account, but after logging in test@popcorn.com, it got stuck on loading. Deleted woo.com sandbox account. -->