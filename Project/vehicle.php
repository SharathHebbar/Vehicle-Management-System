<?php
//include 'navbar.php';
//create connection
session_start();
$connection = mysqli_connect("localhost","root","","project");
$user = strval($_SESSION['Email']);
	$id = "SELECT * FROM `user` WHERE Email = '$user' ";
	$r = mysqli_query($connection,$id);
	$i =  mysqli_fetch_assoc($r);

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}



$V_id = $_POST['V_id'];

$V_model = $_POST['V_model'];
$V_type = $_POST['V_type'];
$V_reg_no = $_POST['V_reg_no'];
$Mfg_year = $_POST['Mfg_year'];
$Ins_no = $_POST['Ins_no'];
$Eng_no = $_POST['Eng_no'];

$V_user_id = $i['User_id'];


$target_dir = "uploads/";
$V_img = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}




$sql = "INSERT INTO vehicle (V_id,v_img,V_model,V_type,V_reg_no,Mfg_year,Ins_no,Eng_no,V_user_id) VALUES 
('$V_id','$V_img','$V_model','$V_type','$V_reg_no','$Mfg_year','$Ins_no','$Eng_no','$V_user_id')"; // inserts value into table users

if (mysqli_query($connection, $sql)) {
  //echo "New record created successfully";
header("Location: http://localhost/project/index.php"); 
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>





 