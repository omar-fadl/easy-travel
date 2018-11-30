<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="The best Website for booking airline tickets">
		<meta name="keywords" content="trip,travel,passenger,booking ticket">
		<title>Easy-Travel|Contact Us</title>
     
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
                <link rel="stylesheet" href="css/font-awesome.min.css">
	</head>
	<body>
 
        	<!-- Start Navbar -->
		<div class="navbar">
            <!-- For Responsive -->
				<button class="btn-nav" onclick="showList();">
					<span></span>
					<span></span>
					<span></span>
				</button>
            <div id="logo">
                <img id="lgimg" src="images/logo.png" width="40px" height="40px">
                <h1>Easy-Travel</h1>
            </div>
		<ul id='list'>
				<li ><a href="index.php">Home</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>  
				<li ><a href="timetable.php">Time lines</a></li>
				<li id="book"><a href="booking.php">Booking</a></li>
             	<li><a href="ret.php">Retrieve</a></li>   
                <li><a href="login.html">Login</a></li>
		
                <li ><a href="register.html">Sign Up</a></li>
			</ul>
		</div>
		<!-- End Navbar -->
        
			<!-- Start Slideshow -->
		<div class="slideshow">
            <img id="slide" src="images/slider/4.jpg" alt="" width="100%">
            <button class="btn btn-left" onclick="back()">&#10094;</button>
            <button class="btn btn-right" onclick="next()">&#10095;</button>
		</div>
		<!-- End Slideshow -->

		<!-- Start Login -->
		<div id="log" class="login">
			<div class="container">
				
				<!--<div class="info">-->
					<!--<h2 class="h1">New Customer</h2>-->
					<!--<p class="lead">Join happy customers with us to be up-to-date on our recent offers and big deals.</p>   -->
					<!--<a href="register.html">Signup</a> -->
				<!--</div>-->
				<div class="account">
					<h2 class="h1">Client profile</h2>
					<form class="form-control"  action="validate_profile.php" method="post">
						<input type="text" name="phone" placeholder="Phone">
						
						<input type="submit" name="submit" value="Veiw">
					</form>
				
				</div>
			</div>
		</div>
		<div class="clear-fix"></div>
		<!-- End SignUp -->

	
		<!-- Start Footer -->
		<!-- Start Footer -->
		<div class="footer">
			<div class="container">
				<div id="contactus">
                     <ul>
                         <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-snapchat-square" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li><a href=""><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>
         
                      </ul>
                     </div>
				<div class="copyright">All Copyright Received &copy; 2018 <span>Easy-Travel</span>.com</div>
			</div>
		</div>
		<!-- End Footer -->
		<!-- End Footer -->
                    <div onclick="topFunction()" id="scrolltop"><span class="fa fa-chevron-up"></span></div>

		<script src="js/plugin.js"></script>
	</body>
</html>