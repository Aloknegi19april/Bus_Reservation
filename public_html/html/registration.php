<?php
@mysql_connect("localhost","root","");
@mysql_select_db("reg");

if(isset($_REQUEST["submit"]))
{
  $user=$_REQUEST["user"];
  $pass=$_REQUEST["pass"];
  $cpass=$_REQUEST["cpass"];
  if($pass==$cpass)
  {
   
  mysql_query("insert into user(user,pass)values('$user','$pass')");
  echo '<script type="text/javascript">alert("Successfully Register !! ")</script>';
}

else
	 echo '<script type="text/javascript">alert("Password not matching !! ")</script>';
}
?>






<html>
<head>
	<title>Bus Reservation Login</title>
	


	
	 <link rel="stylesheet" href="  ../css/Home.css">
	 <link rel="stylesheet" href="  ../css/style.css">
	<link rel="stylesheet" href="  ../css/index.css">
  <script src="  ../js/jquery.min.js"></script>
  <script src="  ../js/popper.min.js"></script>
  <script src="  ../js/bootstrap.min.js"></script>
  <script src="  ../js/1.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body, html {
    height: 100%;
    background-image: url("../images/Home.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0px;
	background-attachment:fixed;

}




</style>
<body>
	
	
<div class="bg">

  <div class="row" >

  	   <div class="col-sm-2">
  	   		<p align="center"><img src="../images/10.png" style=" height: 23vh; width: 20vh; padding-top: 30px; " class="responsive"></p>
		</div>
 
    	<div class="col-sm-9" style="padding-top: 50px;" >
    		<img src="../images/title.png" class="responsive" >

    	</div>

</div> 





<!--=========================================     Curtain Navbar       ======================================================-->  


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="../html/Home.html">Home</a>
    <a href="../html/About.html">About</a>
    <a href="#">Services</a>
    <a href="../index.php">Reservation</a>
    <a href="../html/registration.php">Register</a>
    <a href="../html/contact.html">Contact</a>
  </div>
</div>
<br>
<span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     



<!--=========================================     Register      ======================================================-->	

	
	<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="login-box">
    <img src="../images/avatar.png" class="avatar">
        <h1>Register Here</h1>
            <form method="post">
            <p>University ID</p>
            <input type="text" name="user" placeholder="University ID">
            
            <p>Password</p>
            <input type="password" name="pass" placeholder="Create Password">
			
			<p>Confirm Password</p>
            <input type="password" name="cpass" placeholder="Confirm Password">
			
			<p>Email</p>
            <input type="text" name="email" placeholder="Email">
			
            <input type="submit" value="Register" name="submit">   
            </form>
        
        
        </div>


        <!--===============================================================================================-->	

      

</div>
<br><br><br><br><br><br><br>
 <!--===============================================================================================<div class="container-fluid">
   
  <div class="row" >

      <div class="col-sm-2" style="background-color: #0f53c4; color: white;"> <br ><br><center><h3 >&nbsp</h3></center><img src="../images/11.jpg" width="210" height="180"></div>
  	<div class="col-sm-4" style="background-color: #0f53c4; color: white;"> <br ><br><br><br><h3 >About GRAPHIC ERA</h3>
     Graphic Era (Deemed to be University) formerly Graphic Era Institute of Technology is an institute of higher education Deemed to be University located in Clement Town, Dehradun, Uttarakhand, India. The university was founded as 'Graphic Era Institute of Technology' in 1993 and in 2008 it has accorded with the status of Deemed to be University. <br><br><br>
    </div>
    
    <div class="col-sm-3" style="background-color: #0e4db5; color: #fcf7f7;">
      <!-- Add font awesome icons --
<br><h4>&nbsp&nbsp<strong>Contact Us</strong></h4>
&nbsp&nbsp&nbsp
<a href="https://www.facebook.com/GEUALUMNI" class="fa fa-facebook"> </a>Graphic Era Alumni Association<br>
&nbsp&nbsp&nbsp
<a href="mailto:alumni@geu.ac.in"><i class="fa fa-envelope"></i></a>alumni@geu.ac.in<br>
&nbsp&nbsp&nbsp
<a href="https://in.linkedin.com/in/graphic-era-alumni-association-882b3a35" class="fa fa-linkedin"></a>Graphic Era Alumni Association<br>
&nbsp&nbsp&nbsp
<a href="https://www.youtube.com/user/GraphicEraUniversity" class="fa fa-youtube"></a>Graphic Era University<br>
&nbsp&nbsp&nbsp
<a href="https://www.instagram.com/geuofficial/" class="fa fa-instagram"></a>geuofficial<br>

      
    	
 	</div>

    <div class="col-sm-3" style="background-color: #0e4db5; color: #f9f4f4;">
    	<br>
    	<h5 style=" color: #fcf7f7;"><strong>Graphic Era University</strong></h5><br>
		<h6>566/6, Bell Road,<br>
 		Clement Town Dehradun,<br>
 		Uttarakhand India -248002</h6>
 		<h6 style=" color: #fcf7f7; text-decoration: none;">Phone +91-135-2643420, 2642727<br>
    	<br>alumni@geu.ac.in
 
<br>

			enquiry@geu.ac.in<br></h6>

			Fax 91-135-2644025</br>
    </div>
  
  </div>

  <div class="row" >
  	<div class="col-sm-12" style="background-color: #0644a8; color: white;"> <center><br><i style="font-size:24px" class="fa">&#xf1f9;</i> COPYRIGHT 2018| Bus Reservation Graphic Era<br>&nbsp </center></div>
  	 
 </div>

</div>


-->

</body>



</body>
</html>