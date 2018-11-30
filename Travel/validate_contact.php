<?php

require "database_connection.php";

$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];


	$sql = "Insert into contact values ('$name', '$phone','$email','$comment');";
		$conn->query($sql);
		if($conn->affected_rows > 0){
		   //open_new_session($name);
			header("Location:index.php");
		}
	 else
		 print("something goes wrong");

?>