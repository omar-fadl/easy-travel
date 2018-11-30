<?php
require "database_connection.php";

$name=$_POST['username'];
$pass=$_POST['password'];


$escaped_name = mysqli_real_escape_string($conn, $name);

  $sql = "Select * from users where username = '$escaped_name' AND password='$pass';";
  $result = $conn->query($sql);
  //echo "$result->num_rows ";
  if($result->num_rows !=0){
      //Welcome
      //Welcome
      //Direct to the main page
	//  echo "in";
  	  open_new_session($name);
      header("Location:index.php");
  }
  else{
  	die("Wrong User Name or Password");
  }

function open_new_session($name){
  session_start();
  $_SESSION["name"] = $name;
  $_SESSION["time"] = time();
}  
