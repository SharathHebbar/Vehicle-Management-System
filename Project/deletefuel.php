<?php
   
 
   $fid = $_POST['fid'];

   $conn = mysqli_connect("localhost","root","","project"); 
   if($conn->connect_error)
   {
       die("Connection failed" . $connection->connect_error);
   }
   
   $sql = "DELETE IF EXISTS FROM `fuel` WHERE F_id='$fid'";
  

           if(mysqli_query($conn,$sql)){
            header("Location: fullreport.php");
           }
     

   else{
         echo "Not deleted";
   }
   
   
   mysqli_close($conn);
   
   ?>
   
   
   
   
   
   

