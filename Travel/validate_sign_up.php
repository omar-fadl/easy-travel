<?php

require 'database_connection.php';

$name = $_POST["fullname"];
$username = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$visa=$_POST['visa'];

		$sql = "Insert into users values ('$name', '$pass','$email','$phone','$visa','$username');";
		$conn->query($sql);
		if($conn->affected_rows > 0){
		   open_new_session($name);
		   header("Location:index.php");
		}
     else
		 print("something goes wrong");
function open_new_session($name)
{
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["time"] = time();
} 

	

