<?php
session_start();

$Veh_his_id = $_POST['Veh_his_id'];
$Status = $_POST['Status'];
$Mileage = $_POST['Mileage'];
$Distance = $_POST['Distance'];
$Accident = $_POST['Accident'];
$vid = $_POST['V_id'];


//create connection
$connection = mysqli_connect("localhost","root","","project");

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}

$sql = "INSERT INTO vehicle_history (Status,Mileage,Distance,Accident,v_id) VALUES 
('$Status','$Mileage','$Distance','$Accident','$vid')"; // inserts value into table users

if (mysqli_query($connection, $sql)) {
  //echo "New record created successfully";
header("Location: http://localhost/project/index.php"); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>






   
