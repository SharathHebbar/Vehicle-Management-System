<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","Project"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $Email=mysqli_real_escape_string($connection,$_POST['Email']);
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM User WHERE Email='$Email' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['Email']=$Email;
            header('Location:index.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <center><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a></center>
                    <center><strong>Unsuccessful Login!</strong>  </center>
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="landing_page.css">
</head>
<body style="background-color:white";>
  
  
    <br>
    <br/><br>

   <center>
    <div class="details"> <a href="Welcome.html"><button class="btn">Home</button></a><br/><br/></div> </center>
     <div class="row">
       <div class="col-md-3"></div>
        <div class="col-md-6"> 
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Login</h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
	<div class="details">
                  <input id="username" type="text" class="form-control" name="Email" placeholder="Email">  
                <br/>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                </div>
             <br/>
            <div class="input-group">
                  <a href="forgot.php">Forgot Password</a>
                </div>
               
		</div>
              </form>  
              <br> 
              
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
     
    
   

</body>
</html>