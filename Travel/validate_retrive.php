<?php

require 'database_connection.php';

  
$travel_date=$_POST['tr_date'];
$return_date=$_POST['ret_date'];
$class = $_POST['ticketClass'];
$ticket_type = $_POST['ticketType'];
//$id=$_POST['id'];
  $idd = $_POST["id"];  
	
	
               $sql = "UPDATE  ticket SET class='$class',ticket_type='$ticket_type',travel_date='$travel_date',return_date='$return_date' where id= '$idd';";
			$conn->query($sql);
			if($conn->affected_rows > 0){
			   echo"<h1>your update successfuly done</h1>";
                echo"<h1 style='text-align:center' > <a href='index.php'>Continue</a></h1>";
			}
		 else
			 print("something goes wrong");
	

/*else
{
	header("Location:login.html");
}*/



	

