<?php

$B_id = $_POST['B_id'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];
$Amt_paid = $_POST['Amt_paid'];
$Status = $_POST['type'];
$B_veh_id = $_POST['B_veh_id'];


//create connection
$connection = mysqli_connect("localhost","root","","project");

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}

$sql = "INSERT INTO booked (Date,Time,Amt_paid,Status,B_veh_id) VALUES 
('$Date','$Time','$Amt_paid','$Status','$B_veh_id')"; // inserts value into table users

if (mysqli_query($connection, $sql)) {
  //echo "New record created successfully";
header("Location: http://localhost/project/index.php"); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>






   
