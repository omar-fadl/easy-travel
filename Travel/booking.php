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
                <li ><a href="profile.php">Profile</a></li>
				<li ><a href="timetable.php">Time lines</a></li>
				<li  class="active" id="book"><a href="booking.php">Booking</a></li>
             	<li><a href="ret.php">Retrieve</a></li>   
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Sign Up</a></li>
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

        
        
        
	<!-- Start Booking Ticket -->
		<div class="booking">
			<div class="container">
				<div class="booking-form">
					<!-- Form Heading -->
					<div id="phot">
					
					</div>
					<!-- Form Content -->
					<div class="form-content">
						<div class="form-head">
							<h2 class="h1">Flight Reservation Form</h2>
							<p class="lead">Please fill all the details carefully in the form</p>
						</div>
						<form class="form-control" action="booking_validate.php" method="post">
							<ul>
								
                              
								<li>
                                    <label> Contact Number
                                    <input type="text" name="phone" placeholder="Contact Number">
                                    </label>
                                    
                                </li>
                                <li>
									<label >Type of Ticket
									<select name="ticketType">
										<option value="excursion">Excursion</option>
										<option value="oneWay">One Way</option>
										<option value="return">Return</option>
									</select>
                                        </label>
								</li>
								<li>
                                    <label > Leaving From 
                                    <select name="leaving" >
                                    <option>egypt</option>
                                    </select>
                                        </label>
                                    </li>
								<li><label > Going To 
                                    <select name="going" >
                                    <option>iraq</option>
                                        <option>syria</option>
                                        <option>sudi arabia</option>
                                        <option>libia</option>
                                    </select>
                                        </label>
                                </li>
								<li>
									<label>Departure Date</label>
									<input type="date" name="departure">
								</li>
								<li>
									<label>Return Date</label>
									<input type="date" name="return">
								</li>
						
								
								<li>
									<label >Preferred class of travel
									<select name="ticketClass">
										<option value="excursion">Excursion</option>
										<option value="firstClass">First Class</option>
										<option value="economy">Economy</option>
										<option value="business">Business</option>
									</select>
                                        </label>
								</li>
								
								<li><input type="submit" name="submit" value="Send Message"></li>
							</ul>
						</form>
					</div>
					<!-- End Form Content -->
				</div>
			</div>
		</div>
		<div class="clear-fix"></div>
		<!-- End Booking Ticket -->

		
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