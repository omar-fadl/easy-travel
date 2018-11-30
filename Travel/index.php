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
				<li class="active" ><a href="index.php">Home</a></li>
                <li ><a href="profile.php">Profile</a></li>
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

	

	
		
		<!-- Start About Us -->
		<div id="about" class="about-us text-center">
			<div class="container">
				<h1>About Us</h1>
				<p class="lead">You love to travel, and we love to help make travel one of life’s greatest pleasures. That’s why millions of consumers search for and book a wide range of hotels, flights, car rentals, cruises, vacation packages and destination activities with us.</p>
			</div>
		</div>
		<!-- End About Us -->
		
		<!-- Start Our Services -->
		<div class="services text-center">
			<div class="container">
				<h2 class="h1">Our Services</h2>
				<div class="service">
					<img src="images/services/booking.png" alt="booking" width="70" height="70">
					<h4>Booking Tickets</h4>
					<p class="lead">
						Booking a ticket for your next holiday journey has never been easier!
					</p>
				</div>
				<div class="service">
					<img src="images/services/document.png" alt="Document" width="70" height="70">
					<h4>Documents</h4>
					<p class="lead">We’ll help you with any visas or documents along the way...</p>
				</div>
				<div class="service">
					<img src="images/services/plan.png" alt="Plannig" width="70" height="70">
					<h4>Planning Tours</h4>
					<p class="lead">Whatever your dream destination is, we’ll plan your next vacation easily!</p>
				</div>
				<div class="service">
					<img src="images/services/halthy.png" alt="Halthy" width="70" height="70">
					<h4>Travel Insurance</h4>
					<p class="lead">We can supply you with necessary medical insurance across the globe!</p>
				</div>
			</div>
		</div>
		<!-- End Our Services -->

		<!-- Start Special Orders -->
		<div class="special-offer text-center">
			<div class="container">
				<h2 class="h1">Special Offers</h2>
				<?php
					require "database_connection.php";
				
					$result=mysqli_query($conn,"select * from special_offer");
					while($row=mysqli_fetch_array($result))
					{
						echo "<div class='offer'>
							<img src='images/special/".$row['image_src']."' alt='Bangkok'>
						<p>".$row['country_name']."<span> $".$row['price']."</span></p>
					</div>";
					}
					mysqli_close($conn);
				?>
				
			</div>
		</div>
		<!-- End Special Orders -->
        
         <!----------------------------------------------- START Feedback ------------------------------------------->
        
        <div class="feedback text-center">
           <div class="container">
                 <h1>WHAT OUR FANTASTIC CLIENTS SAY</h1>
                <p>Shape your future web project with sharp design and refine coded functions.</p>
                   <div class="users">
                        <div class="opinion">
                            <img src="images/matt-icons_preferences-desktop-personal.png">
                          <p>“Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus. Donec porttitor interdum gravida vestibulum. Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus.”</p>
                            <span>K-Broke</span>
                       </div>  
                       <div class="opinion">
                         <img src="images/matt-icons_preferences-desktop-personal.png">
                          <p>Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus. Donec porttitor interdum gravida vestibulum. In consectetur mauris ut mi vulputate, eget finibus dui dapibus. Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus. Donec porttitor interdum gravida vestibulum.”</p>
                            <span>M-Alei</span>
                       </div> 
                       <div class="opinion" id="last">
                            <img src="images/matt-icons_preferences-desktop-personal.png">
                          <p>“Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus. Donec porttitor interdum gravida vestibulum. Ut elementum hendrerit semper. In consectetur mauris ut mi vulputate, eget finibus dui dapibus.”</p>
                          <span>L-Steve</span>
                       </div> 
                   </div>
                </div>
        </div>
        
      
        
     <!----------------------------------------------- End Feedback ------------------------------------------->
        
        
     <!----------------------------------------------- START TRUST ------------------------------------------->
        
        <div class="trust text-center">
           <div class="container">
             <h1>Trusted BY</h1>
               <h2>We’re trusted by these popular companies</h2><br><br>
                   <h3></h3>
                     <div class="trustcomp">
                           <img src="images/companes/10.png">
                           <img src="images/companes/2.png">
                           <img src="images/companes/3.png">
                           <img src="images/companes/4.png">
                           <img src="images/companes/5.png">
                
                    </div>
            </div>
        
        </div>
        
     <!----------------------------------------------- End TRUST ------------------------------------------->
		<!-- Start Subscribe -->
		<div class="subscribe text-center">
			<div class="container">
				<h2 class="h1">Keep In Touch</h2>
				<p class="lead">Sign Up For Newsletter Dont Worry About Spam We Hate It Too.</p>
				<form>
					<input type="email" name="email">
					<input type="submit" name="submit" value="Subscribe">
				</form>
			</div>
		</div>
		<!-- End Subscribe -->

		<!-- Start Contact Us -->
		<div id="contact" class="contact-us">
			<div class="con">
				<div class="container">
					<p class="lead text-center">We Are Happay To Help You</p>
					<div class="contact-info">
						<p><img src="images/contact/date.png" alt="Clender"><span>Monday-Friday: </span> 9:30 AM to 6:30 PM</p>
						<p><img src="images/contact/location.png" alt="location"><span>Address: </span>123 Some Street,London,UK,CP123</p>
						<p><img src="images/contact/phone.png" alt="phone"><span>Phone: </span>(032) 987-1235</p>
						<p><img src="images/contact/fax.png" alt="fax"><span>Fax: </span>(123) 984-1234</p>
						<p><img src="images/contact/mail.png" alt="email"><span>Email: </span>info@example.com</p>
					</div>
					<div class="contact-comment">
						<form action="validate_contact.php" method="post">
							<input type="text" name="s" placeholder="Typing your name...">
							<input type="email" name="email" placeholder="Typing your E-mail...">
							<input type="text" name="phone" placeholder="Typing your phone...">
							<textarea name="comment" placeholder="Your message..."></textarea>
							<input type="submit" name="submit" value="Contact">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="clear-fix"></div>
		<!-- End Contact Us -->

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
            <div onclick="topFunction()" id="scrolltop"><span class="fa fa-chevron-up"></span></div>

		<script src="js/plugin.js"></script>
            
	</body>
</html>