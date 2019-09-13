<?php

	$myvar= $_POST['formVar'];
	$mysqli = new mysqli('localhost','root','','reg');
		
	
    //if(isset($_POST['submit1'])) {
	
 $result=mysqli_query($mysqli,"SELECT seats FROM `bus` WHERE bus='$myvar'");
$row = mysqli_fetch_assoc($result); 
$base_pay = $row['seats']; 
     if($base_pay=='0')
	 { 
          
   header("location:full.php"); 
   
	 }
	 else
	 
	 {
	    $query = "UPDATE bus SET seats= seats-1 WHERE bus='$myvar'";
      	            
	   $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
	     header("location:seatbooked.php"); 
   
		  
       //$count = $result;
        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        //if ($count == 1){
			
  // ===  header("location:../index.php"); 
     //   }
	//}
	}

?>


<!--<html>
<head>
  <body>
  <form action="Seat.php" method="POST">
   <input type="submit" name="submit1" value="Submit">
 </form>
  
  





</body>
</html>-->