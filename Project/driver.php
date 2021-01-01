<?php
//create connection
$connection = mysqli_connect("localhost","root","","project");

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}


$D_name = $_POST['D_name'];
$gender = $_POST['gender'];

$Phone_no = $_POST['Phone_no'];
$D_license = $_POST['D_license'];
$D_l_valid = $_POST['D_l_valid'];
$House_no = $_POST['House_no'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];

$vid = $_POST['vid'];


$target_dir = "uploads/";
$D_img = basename($_FILES["fileToUpload"]["name"]);
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








$sql1 = "INSERT INTO driver (D_name,gender,d_img,Phone_no,D_license,D_l_valid,House_no,Street,City,Pincode) VALUES 
('$D_name','$gender','$D_img','$Phone_no','$D_license','$D_l_valid','$House_no','$Street','$City','$Pincode')"; // inserts value into table users

if (mysqli_query($connection, $sql1)) {
  
  $sql= "SELECT * FROM `driver` WHERE D_license = '$D_license' ";
  $driver = mysqli_query($connection,$sql); 
  $row = mysqli_fetch_assoc($driver);
  $did = $row['D_id'];

  $sql2 = "INSERT INTO drives(V_id,D_id) VALUES ('$vid','$did')";

if(mysqli_query($connection, $sql2)){
header("Location: http://localhost/project/index.php"); 
}
}
 else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>











   
