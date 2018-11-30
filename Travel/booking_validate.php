

<?php

require 'database_connection.php';


$dept_country = $_POST["leaving"];
$dest_country = $_POST["going"];
$phone = $_POST["phone"];
$travel_date=$_POST['departure'];
$return_date=$_POST['return'];
$class = $_POST['ticketClass'];
$ticket_type = $_POST['ticketType'];

session_start();
if(isset($_SESSION['name']))
{
	$sqll="select phone from users where phone = '$phone';";
	$result = $conn->query($sqll);
	
	$row=mysqli_fetch_array($result);
	//echo $row['phone'];
	//echo $result->num_rows;
    
	 if($result->num_rows >0)
	 {
			$sql = "Insert into ticket values (null,'$dept_country', '$dest_country','$class','$ticket_type','$travel_date','$return_date','$phone');";
			$conn->query($sql);
			if($conn->affected_rows > 0){
			   //open_new_session($name);
			   //header("Location:index.php");
               // echo "ddddd";
                 $sql2="select id from ticket where uesr_phone = '$phone' AND dest_country='$dest_country' AND dept_country='$dept_country' AND class='$class' AND ticket_type ='$ticket_type' AND travel_date='$travel_date' AND return_date='$return_date';";
	            $result2 = $conn->query($sql2);
                $row2=mysqli_fetch_array($result2);
	           echo "<p style='color:#900;font-size:20px;text-align:center;border:1px solid #555;width:300px; margin: 50px auto;'> Your Ticket Id Is :  ".$row2['id']."</p>";
			   echo"<h1 style='text-align:center' > <a href='index.php'>Continue</a></h1>";
            }
		 else
			 print("something goes wrong");
	 }
	else
	{
//		die("Enter correct information or signup");
    
	}
}
/*else
{
	header("Location:login.html");
}*/

function open_new_session($name){
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["time"] = time();
} 

	

