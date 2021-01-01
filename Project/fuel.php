<?php


$F_type = $_POST['F_type'];
$Expenses = $_POST['Expenses'];
$Litres = $_POST['Litres'];
$Date = $_POST['Date'];
$vid = $_POST['V_id'];



//create connection
$connection = mysqli_connect("localhost","root","","project");

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}

$sql = "INSERT INTO fuel (F_type,Expenses,Litres,F_Date,v_id) VALUES 
('$F_type','$Expenses','$Litres','$Date','$vid')"; // inserts value into table users

if (mysqli_query($connection, $sql)) {
  //echo "New record created successfully";
header("Location: http://localhost/project/index.php"); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>






   
