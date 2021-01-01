<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","Project"); 
    
    $msg="";
    if(isset($_POST['continue'])){
        $Email=mysqli_real_escape_string($connection,$_POST['Email']);
        
        $newpass=mysqli_real_escape_string($connection,$_POST['newpass']); 
        
        $login_query="UPDATE User SET password='$newpass' WHERE Email='$Email'";
        
        $login_res=mysqli_query($connection,$login_query);

            header('Location:page1.php');
         
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Account</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="landing_page.css">
    <link rel="stylesheet" href="login.css">
</head>

<body>
<body style="background-color:white";>
<br>
<br>
<br/>
    <form action="forgot.php" method="POST">
    <center>
       
        <br/>
                
    <h3>Forgot your password </h3>
    <div class="details">
    <input type ="text" placeholder="Enter E-mail id" name ="Email" data-type="E-mail"   required=required>
    <br/> 
    <input type ="password" placeholder="Enter new password" name ="newpass" required=required> 
    <br/>
    <button class="btn btn2" type="submit" name = "continue">Continue</button>
</div>    
</center>
    </form>
</body>
</html>