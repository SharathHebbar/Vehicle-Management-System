<?php
     session_start();
     $connection= mysqli_connect("localhost","root","","project");
	 $user = strval($_SESSION['Email']);
	
     $sql = "SELECT * FROM user WHERE Email = '$user' " ;
     $res= mysqli_query($connection,$sql);   
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
   

    
</head>

<body style="background-color:white";>
<center>
<div class="container">
    <br>
                <div class="details">
                 <a href="index.php"><button class="btn btn-primary">BACK</button></a>
                 <a href="Logout.php"><button class="btn btn-primary">LOGOUT</button></a><br/><br/>
	 </div>   
               

  <br><br>
  <?php while($row = mysqli_fetch_assoc($res)) {   ?>
  <div class="card">
         
         <img src= "<?php echo $row['u_img'] ?>" name ="pimg" alt="Avatar"  >
         <br>
         <h2><b><?php echo $row['Username']; ?></td></b></h2> <br>
         <form method="POST" action="fullreport.php">
         <button type="submit" name="submit" class="btn btn-primary">MORE</button>
         </form>
         </div>
         <?php   } ?>

</center>
</body>
</html>