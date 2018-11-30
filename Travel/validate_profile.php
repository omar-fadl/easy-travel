<!DOCTYBE html>
<html>
<head>
	<style>
	 table
			{
				width: 1000px;
				margin: 0 auto;
				border: 2px solid #333;
				font-size: 24px;
				
			}
			
			th
			{
				background-color: #93436b
			}
			
		 tr:nth-child(odd)
			{
				background-color: #666;
			}
			tr:hover
			{
				background-color:aqua;
			}
		 h1
		{
			margin: 0 auto 20px;;
			width: 200px;
			color: #000000;
			
			
			
			
		}
		h2
		{
		margin: 0 auto 20px;;
			width: 400px;
			color: #000000;	
		}
	
	</style>
</head>
<body>
	<h1>Your Profile</h1>
	<table>
	 <tr>
					<th>Id</th>
					<th>Departure Country</th>
					<th>Destination Country</th>
					<th>class</th>
					<th>Ticket tybe</th>
		            <th>Travel Date</th>
		            <th>Return Date</th>
				</tr>
	
	<?php
require "database_connection.php";

$phone=$_POST['phone'];

//if(isset($_SESSION['name']))
//{
$escaped_phone = mysqli_real_escape_string($conn, $phone);

  $sql = "Select * from ticket where uesr_phone = '$escaped_phone';";
  $result = $conn->query($sql);
  //echo "$result->num_rows ";

  if($result->num_rows !=0){
 
while($row=mysqli_fetch_array($result))
{
echo "
      <tr>
						<td>".$row['id']."</td>
						<td>".$row['dept_country']."</td>
						<td>".$row['dest_country']."</td>
						<td>".$row['class']."</td>
						<td>".$row['ticket_type']."</td>
						<td>".$row['travel_date']."</td>
						<td>".$row['return_date']."</td>
						
						</tr>";

}
	  
	  
  }
  else{
  	echo"<h2>sorry,You do not have any tickets<h2>";
  }
//}
//		else 
//			echo "log in first";
?>
		</table>
    <h1 style='text-align:center' > <a href='index.php'>Continue</a></h1>
	
</body>

</html>

