<?php

$User_id = $_POST['User_id'];
$Username = $_POST['Username'];
$gender = $_POST['gender'];

$Phone_no = $_POST['Phone_no'];
$Email = $_POST['Email'];
$House_no = $_POST['House_no'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$Password = $_POST['password'];

$target_dir = "uploads/";
$U_img = basename($_FILES["fileToUpload"]["name"]);
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


//create connection
$connection = mysqli_connect("localhost","root","","project");

//Check connection
if($connection->connect_error)
{
	die("Connection failed" . $connection->connect_error);
}

$sql = "INSERT INTO user (Username,gender,u_img,Phone_no,Email,House_no,Street,City,Pincode,password) VALUES 
('$Username','$gender','$U_img','$Phone_no','$Email','$House_no','$Street','$City','$Pincode','$Password')"; // inserts value into table users

if (mysqli_query($connection, $sql)) {



  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  
  } 
  else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      

    } 
    else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  



header("Location: http://localhost/project/login.php"); 
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);

?>






   
