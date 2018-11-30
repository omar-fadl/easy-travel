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
		<style>
			table
			{
				width: 800px;
				margin: 0 auto;
				border: 2px solid #333;
				font-size: 24px;
			}
			tr,th
            {
				padding: 5px;
			}
			th
			{
				background-color: darkslategray
			}
			 tr:nth-child(odd)
			{
				background-color: #666;
			}
			tr:hover
			{
				background-color:yellow;
			}
		</style>
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
				<li class="active"><a href="timetable.php">Time lines</a></li>
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

	
	

<div class="timetable">
			<div class="container">
				<p class="lead">View current timetable information and indicate the departure or return date of the flight </p>
				<form action="timetable.php" method="post">
					 <label>From : 
                        <select name="countryFrom"  title="countryFrom">
						<option >--</option>
							<option >egypt</option>
                        </select>
                    </label>
                     <label>To : 
                        <select name="countryTo"  title="countryFrom">
				<option >--</option>
                            <option>iraq</option>
                            <option>syria</option>
                            <option>sudi arabia</option>
                            <option>libia</option>
                        </select>
                    </label>

					<input type="submit" name="show" value="Show Flights">
				</form>
				<table>
				<tr>
					<th>From</th>
					<th>To</th>
					<th>Time</th>
					<th>Travel_comp</th>
					<th>Price</th>
				</tr>
					
            <?php
				require "database_connection.php";
					
					@$co_from=$_POST['countryFrom'];
					@$co_to=$_POST['countryTo'];
					
				$result=mysqli_query($conn,"select * from trip where dept_country='$co_from' AND dest_country= '$co_to';");
				while($row=mysqli_fetch_array($result))
				{
		
					echo "
						<tr>
						<td>".$row['dept_country']."</td>
						<td>".$row['dest_country']."</td>
						<td>".$row['dept_time']."</td>
						<td>".$row['travel_comp']."</td>
						<td>".$row['price'].' $'."</td>
						</tr>";
				}
				mysqli_close($conn);
			?>
					
            </table>
				
			</div>
		</div>

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