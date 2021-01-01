<?php
   
   $did = $_POST['did'];
   $conn=mysqli_connect("localhost","root","","project"); 

   $sql="DELETE FROM `driver` WHERE D_id='$did'";
 
   $result=mysqli_query($conn,$sql);
   
   
   if(mysqli_query($conn,$sql)){
       header("Location: fullreport.php");
   }
   
   else{
         echo "Not deleted";
   }
   
?>
