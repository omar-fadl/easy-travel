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
				<li id="book"><a href="booking.php">Booking</a></li>
             	<li  class="active"><a href="ret.php">Retrieve</a></li>   
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

	
<!-- Start My Bookings -->
		<div class="my-booking">
			<div class="container">
				<div class="form-control">
					<p class="lead">Enter your details to see and modify your bookings</p>
					<form class="form-control" action="ret.php" method="post">
						<input type="text" name="phone" placeholder="Phone">
						<input type="password" name="pass" placeholder="Password">
						<input type="text" name="ticketId" placeholder="Ticket Id">
				

						<input type="submit" name="submit" value="Search" title="Ticket details">
					</form>
                    
                   
				</div>
                                
				<div class="info lead" style="float:right">
					Our website not only makes everything convenient for you it puts you in control. Now you can conveniently manage your booking online by choosing your seat, selecting required meals, modifying your booking class or even changing your destination. You can also save your valuable time in the airport by paying in advance for excess baggage.
                    Our website not only makes everything convenient for you it puts you in control. Now you can conveniently manage your booking online by choosing your seat, selecting required meals, modifying your booking class or even changing your destination. You can also save your valuable time in the airport by paying in advance for excess baggage Our website not only makes everything convenient for you it.
				</div>

                <div class="tic_info" >
                  <?php
                        require "database_connection.php";

                     @       $id=$_POST['ticketId'];
                      @      $pass=$_POST['pass'];
                      @      $phone=$_POST['phone'];

                        $result=mysqli_query($conn,"select * from ticket where id='$id' AND uesr_phone = '$phone';");
                        $result2=mysqli_query($conn,"select * from users where password='$pass' AND phone= '$phone';");
                        $row=mysqli_fetch_array($result);
                        $row2=mysqli_fetch_array($result2);
                    if($result->num_rows !=0 && $result2->num_rows !=0)
                    {
                     echo "<fieldset><legend>Your Ticket Info</legend>
                     
                     
                     <form method='post' action='validate_retrive.php'>
                     <ul>
                     <li>
                            <label>Ticket id <br>
                            <input type='text' name='id'  value=".$row['id'].">
                            <label>
                    </li>
                               <li>
                             <label>U_phone <br>
                            <input type='text' name='phone' disabled value=".$row['uesr_phone'].">
                            </label>
                            </li>
                            <li>
                            <label>D_Country <br>
                            <input type='text' name='dept' disabled value=".$row['dept_country'].">
                            </label>
                            </li>
                            <li>
                            <label>Dst_Country <br>
                            <input type='text' name='dest' disabled value=".$row['dest_country'].">
                            </label>
                            </li>
                            <li>
                            <label>Tick_Type<br>
                            <select name='ticketType'>
                                        <option value=".$row['ticket_type'].">".$row['ticket_type']."</option>
										<option value='excursion'>Excursion</option>
										<option value='oneWay'>One Way</option>
										<option value='return'>Return</option>
				            </select>
                            </label>
                            </li>
                            <li>
                             <label>Tick_Class <br>
                            <select name='ticketClass'>
                                        <option value=".$row['class'].">".$row['class']."</option>
										<option value='excursion'>Excursion</option>
										<option value='firstClass'>First Class</option>
										<option value='economy'>Economy</option>
										<option value='business'>Business</option>
				            </select>
                            </label>
                            </li>
                            <li>
                            <label>T_Date <br>
                            <input type='date' name='tr_date'  value=".$row['travel_date'].">
                            </label>
                            </li>
                            <li>
                             <label>R_Date <br>
                            <input type='date' name='ret_date'  value=".$row['return_date'].">
                            </label>
                            </li>
                            <li>
                            <input type='submit' name='submit' value='Update'>
                            </li>
                        </ul>
                     </form></fieldset>";
                       // mysqli_close($conn);
                    }
                    
                    ?> 
                
                </div>
			</div>
			<div class="clear-fix"></div>
		</div>
		<!-- End My Bookings -->
            
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