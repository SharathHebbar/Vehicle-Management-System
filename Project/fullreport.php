<?php
    session_start();
     $connection= mysqli_connect("localhost","root","","project");
	 $user = strval($_SESSION['Email']);
	
     $sql1 = "SELECT * FROM user WHERE Email = '$user' " ;
     $userdetails= mysqli_query($connection,$sql1); 
     $q1 = $userdetails;

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
<div class="container">
	<center>
                <div class="details">
                 <a href="report.php"><button class="btn btn-primary">BACK</button></a>
                 <a href="Logout.php"><button class="btn btn-primary">LOGOUT</button></a><br/><br/>
	 </div>   
               </center>
  <br><br>
  <center>
<div class="container">
<div class="row">
<hr>
<div class="col-md-4">
           <!--Displaying User Details-->
                    <h2>User Details</h2>
                    <br>
                    <?php while($row = mysqli_fetch_assoc($userdetails)) {   ?>
                    <div class="card">
                    <img src= "<?php echo $row['u_img'] ?>" name ="pimg" alt="Avatar"  >
                    <br>
                    <br>
                    <b><?php echo "ID: ",$row['User_id']; ?></b> <br>
                    <b><?php echo "Name: ",$row['Username']; ?></b> <br>
                    <b><?php echo "Phone: ",$row['Phone_no']; ?></b> <br>
                    <b><?php echo "Email: ",$row['email'] ?></b> <br>
                    <b><?php echo "Address: No.", $row['House_no'];
                             echo " ";
                             echo $row['Street']; 
                             echo " ";
                             echo $row['City'];
                             echo " ";
                             echo $row['Pincode'];?></b> <br>
                    </div>
                    <?php   } ?>
</div>
                    </div>

                    <div class="row"> 
                    <hr>
        <!--Displaying Vehicle Details-->
        <h2>Vehicle</h2>
                        <br>
                    <?php
                         $connection= mysqli_connect("localhost","root","","project");
                         $user = strval($_SESSION['Email']);
                       
                         $sql1 = "SELECT * FROM user WHERE Email = '$user' " ;
                         $userdetails= mysqli_query($connection,$sql1); 
                    ?>
                   
                    <?php while($a1 =  mysqli_fetch_assoc($userdetails)){ ?> 
                       
                       
                       <?php  $uid = $a1['User_id'];
                        $sql2 = "SELECT * FROM `vehicle` WHERE V_user_id = '$uid'";
                        $vehicle = mysqli_query($connection,$sql2);
                        
                    while($row = mysqli_fetch_assoc($vehicle)) {  ?> 
                     
                     <div class="col-md-4">
                        <div class="card">
                    <img src= "<?php echo $row['v_img'] ?>" alt="Avatar" width = "200vh" >
                    <br>
                    <br>
                    <b><?php echo "ID: ",$row['V_id']; ?></b> <br>
                    <b><?php echo "Vehicle Type: ",$row['V_type']; ?></b> <br>
                    <b><?php echo "Register Number: ",$row['V_reg_no']; ?></b> <br>
                    <b><?php echo "Manufactured Year: ",$row['Mfg_year'] ?></b> <br>
                    <b><?php echo "Insurance Number: ", $row['Ins_no']; ?></b> <br>
                    <b><?php echo "Enginee Number ",$row['Eng_no']; ?></b> <br>
                    </div>
                    <form method="POST" action="deletevehicle.php">
                    <input type="hidden" name="vid" value = "<?php echo $row['V_id']; ?>"/>
                    <button type="submit" name="submit" class="btn btn-primary">DELETE VEHICLE</button>
                    </form>
                    </div>
                   
                    <?php  } ?>
                    
                    <?php } ?>  
                    
                </div>
                <form method="POST" action="vehicle.html">
                    <button type="submit" name="submit" class="btn btn-primary">ADD VEHICLE</button>
                    </form>

<div class="row">
<hr>
            <!--Displaying Driver Details-->
            <h2>Driver</h2>
            <br>
                    <?php
                      
                      $connection= mysqli_connect("localhost","root","","project");

                      
                      $user = strval($_SESSION['Email']);
                      $id = "SELECT * FROM user WHERE Email = '$user' ";
                      $r = mysqli_query($connection,$id);
                      $i =  mysqli_fetch_assoc($r);
                      
                      $uid = $i['User_id'];
                      
                      $q= "SELECT * FROM vehicle WHERE V_user_id = '$uid'";
                      $r1 = mysqli_query($connection,$q);
                      $v = mysqli_fetch_assoc($r1);
                      $vid = $v['V_id'];
                      $s= "SELECT * FROM drives WHERE V_id = '$vid' ";
                      $r2=mysqli_query($connection,$s);
  
                      ?>

                  <?php while($d = mysqli_fetch_assoc($r2)){
                          $did = $d['D_id'];
                         $sql= "SELECT * FROM `driver` WHERE D_id = '$did' ";
                          $driver = mysqli_query($connection,$sql); 
                          while($row = mysqli_fetch_assoc($driver)) {  ?>
                  <div class="col-md-4">
                  <div class="card">
                  <img src= "<?php echo $row['d_img'] ?>" name ="dimg" alt="Avatar"  >
                  <br>
                  <br>
                  <b><?php echo "ID: ",$row['D_id']; ?></b> <br>
                  <b><?php echo "Name: ",$row['D_name']; ?></b> <br>
                  <b><?php echo "Phone: ",$row['Phone_no']; ?></b> <br>
                  <b><?php echo "License ID: ",$row['D_license'] ?></b> <br>
                  <b><?php echo "Validity:", $row['D_l_valid'];?></b> <br>
                  <b><?php echo "Address: No.", $row['House_no'];
                           echo " ";
                           echo $row['Street']; 
                           echo " ";
                           echo $row['City'];
                           echo " ";
                           echo $row['Pincode'];?></b> <br>
                  </div>
                  <form method="POST" action="deletedriver.php">
                    <input type="hidden" name="did" value = "<?php echo $row['D_id']; ?>"/>
                    <button type="submit" name="submit" class="btn btn-primary">DELETE DRIVER</button>
                    </form>
                  </div>
                
                  <?php }  }?>
                  </div>
</div>
<form method="POST" action="driver.html">
                    <button type="submit" name="submit" class="btn btn-primary">ADD DRIVER</button>
                    </form>
<br>
<div class="row">
<hr>
<!--Displaying Vehicle History Details-->           
<h2>Vehicle History</h2>
<br>
                    <?php
                        $connection= mysqli_connect("localhost","root","","project");
                            
                        $user = strval($_SESSION['Email']);
                        $id = "SELECT * FROM `user` WHERE Email = '$user' ";
                        $r = mysqli_query($connection,$id);
                        $i =  mysqli_fetch_assoc($r);
                        $uid = $i['User_id'];
                        $vehicle = "SELECT * FROM `vehicle` WHERE V_user_id = '$uid'";
                        $r1 = mysqli_query($connection,$vehicle);
                    ?>
                    
                    <?php while($vi = mysqli_fetch_assoc($r1)){
	                    $vid = $vi['V_id'];
	
                        $sql= "SELECT * FROM `vehicle_history` WHERE v_id = '$vid' ";
                        $vehiclehistory=mysqli_query($connection,$sql);

                        while($row = mysqli_fetch_assoc($vehiclehistory)) {  ?>
                   <div class="col-md-4">
                   <div class="card">
                
                    <b><?php echo "ID: ",$row['Veh_his_id']; ?></b> <br>
                    <b><?php echo "Status: ",$row['Status']; ?></b> <br>
                    <b><?php echo "Mileage: ",$row['Mileage']; ?></b> <br>
                    <b><?php echo "Distance: ",$row['Distance']; ?></b> <br>
                    <b><?php echo "Accident: ",$row['Accident'];?></b> <br>
                    </div>
                    
                    <form method="POST" action="deletevehiclehistory.php">
                    <input type="hidden" name="vid" value = "<?php echo $row['Veh_his_id']; ?>"/>
                    <button type="submit" name="submit" class="btn btn-primary">DELETE VEHICLE HISTORY</button>
                    </form>
                    </div>
                    
                   <?php  }  }?>
                   </div>
</div>
<center>
<form method="POST" action="veh_his.html">
                    <button type="submit" name="submit" class="btn btn-primary">ADD VEHICLE HISTORY</button>
                    </form></center>
<div class="row">
<hr>
<!--Displaying fuel Details-->
                  <center><h2>Fuel</h2>
                  <br>
                    <?php
                        $connection= mysqli_connect("localhost","root","","project");
                        $user = strval($_SESSION['Email']);
                        $id = "SELECT * FROM `user` WHERE Email = '$user' ";
                        $r = mysqli_query($connection,$id);
                        $i =  mysqli_fetch_assoc($r);
                        $uid = $i['User_id'];
                        
                        $s= "SELECT * FROM `vehicle` WHERE V_user_id = '$uid'";
                        $r1 = mysqli_query($connection,$s);
                        
                    ?>
	                
					<?php while( $fi =  mysqli_fetch_assoc($r1)){
	                $fid = $fi['V_id'];
                  $sql= "SELECT * FROM `fuel` WHERE v_id = '$fid' ";
                  $fuel=mysqli_query($connection,$sql);
                     while($row = mysqli_fetch_assoc($fuel)) {  ?>
                     <div class="col-md-4">
                    <div class="card">
                   
                    <b><?php echo "ID: ",$row['F_id']; ?></b> <br>
                    <b><?php echo "FuelType: ",$row['F_type']; ?></b> <br>
                    <b><?php echo "Expenses: ",$row['Expenses']; ?></b> <br>
                    <b><?php echo "Litres: ",$row['Litres'] ?></b> <br>
                    <b><?php echo "Date:", $row['F_Date'];?></b> <br>
                    </div>
                    <form method="POST" action="deletefuel.php">
                    <input type="hidden" name="fid" value = "<?php echo $row['F_id']; ?>"/>
                    <button type="submit" name="submit" class="btn btn-primary">DELETE FUEL DETAILS</button>
                    </form>
                    </div>
                    
                    <?php  } } ?>
</div>
<center>
<form method="POST" action="fuel.html">
                    <button type="submit" name="submit" class="btn btn-primary">ADD FUEL DETAILS</button>
                    </form></center>
</center>

<div class="row">
<hr>
<!--Displaying Booked Details-->
<center><h2>Booking</h2>
                    <br>
					<?php
                        $connection= mysqli_connect("localhost","root","","project");

                        
                        $user = strval($_SESSION['Email']);
                        $id = "SELECT * FROM `user` WHERE Email = '$user' ";
                        $r = mysqli_query($connection,$id);
                        $i =  mysqli_fetch_assoc($r);
                        $uid = $i['User_id'];
                        $s= "SELECT * FROM `vehicle` WHERE V_user_id = '$uid'";
                        $r1 = mysqli_query($connection,$s);
                    ?>
	        
			<?php while($i1 =  mysqli_fetch_assoc($r1)){
	          $vid = $i1['V_id'];
                         $sql= "SELECT * FROM `booked` WHERE B_veh_id = '$vid' ";
                         $booking=mysqli_query($connection,$sql);
                    while($row = mysqli_fetch_assoc($booking)) {  ?>
                    <div class="col-md-4">
                    <div class="card">
                    
                    <b><?php echo "ID: ",$row['B_id']; ?></b> <br>
                    <b><?php echo "Date: ",$row['Date']; ?></b> <br>
                    <b><?php echo "Time: ",$row['Time']; ?></b> <br>
                    <b><?php echo "Amount Paid: ",$row['Amt_paid'] ?></b> <br>
                    <b><?php echo "Status:", $row['Status'];?></b> <br>
					<b><?php echo "Vehicle ID:", $row['B_veh_id'];?></b> <br>
                    </div>
                    <form method="POST" action="deletebooked.php">
                    <input type="hidden" name="bid" value = "<?php echo $row['B_id']; ?>"/>
                    <button type="submit" name="submit" class="btn btn-primary">DELETE BOOKED DETAILS</button>
                    </form>
                    </div>
                    <?php }  } ?>
</div>
<center>
<form method="POST" action="booked.html">
                    <button type="submit" name="submit" class="btn btn-primary">ADD BOOKING DETAILS</button>
                    </form>
                    </center>
</center>
</div>  <br>
                    </center>
</body> 
</html>