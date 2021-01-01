<?php
   
 
   $vid = $_POST['vid'];

   $conn = mysqli_connect("localhost","root","","project"); 
   if($conn->connect_error)
   {
       die("Connection failed" . $connection->connect_error);
   }
   
   $sql = "DELETE IF EXISTS FROM `vehicle_history` WHERE V_id='$vid'";
   
 

if(mysqli_query($conn,$sql)){
    
            header("Location: fullreport.php");
           }

   else{
         echo "Not deleted";
   }
   
   
   mysqli_close($conn);
   
   ?>
   
   
   
   
   
   

