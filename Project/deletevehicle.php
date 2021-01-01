<?php
   
 
   $vid = $_POST['vid'];

   $conn = mysqli_connect("localhost","root","","project"); 
   if($conn->connect_error)
   {
       die("Connection failed" . $connection->connect_error);
   }
   
   $sql1 = "DELETE FROM `fuel` WHERE V_id='$vid'";
   $sql2 = "DELETE FROM `vehicle_history` WHERE V_id='$vid'";
   $s= "SELECT * FROM drives WHERE V_id = '$vid' ";
   $r2=mysqli_query($connection,$s);
   $d = mysqli_fetch_assoc($r2);
   $did = $d['D_id'];
   $sql3 = "DELETE FROM `driver` WHERE D_id = '$did'";
   $sql4 = "DELETE FROM `vehicle` WHERE V_id='$vid'" ;

 
 
   if(mysqli_query($conn,$sql1) || !(mysqli_query($conn,$sql1))){
       if(mysqli_query($conn,$sql2) || !(mysqli_query($conn,$sql2))){
           if(mysqli_query($conn,$sql3) || !(mysqli_query($conn,$sql3))){
            if(mysqli_query($conn,$sql4))
           {
            header("Location: fullreport.php");
           }
       }}
       
   }
   else{
         echo "Not deleted";
   }
   
   
   mysqli_close($conn);
   
   ?>
   
   
   
   
   
   

