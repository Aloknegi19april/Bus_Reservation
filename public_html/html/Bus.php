<?



?>


<html>
<head>
	<title>Resrve Seat</title>

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
   background-image: url("../images/6.jpg");
  

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0px;
	background-attachment:fixed;

}

.button {
    background-color: #008CBA;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10%;
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
    

    <!--=========================================   End of  Curtain Navbar       ======================================================-->  


<br>
<br>



<div class="row" >

  	   <div class="col-sm-3">
  	   		<p align="center"></p>
		</div>
 
    	<div class="col-sm-6" style="padding-top: 50px;" >
    		<img src="../images/7.png" align="middle" class="responsive" style="width: 100%;   border-radius: 50px 50px 50px 50px;""  >

    	</div>
       <div class="col-sm-3">
  	   		<p align="center"></p>
		</div>
 </div>

<br>
<br>
 
<div class="container">
 
  
  <form method="POST" name ="myform" action="Seat.php">
  	<div class="radio">
  		<div class="row" >
	<div class="col-sm-2">
  	   	 
		</div>
	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=1"/><h3 style="color: white;">Bus No. 1</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=2"/><h3 style="color: white;">Bus No. 2</h3><br>
		</div>
 
    	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=3"/><h3 style="color: white;">Bus No. 3</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=4"/><h3 style="color: white;">Bus No. 4</h3><br>
		</div>
		<div class="col-sm-2">
  	   	 
		</div>
 </div>

 
 <div class="row" >
	<div class="col-sm-2">
  	   	 
		</div>
	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=5"/><h3 style="color: white;">Bus No. 5</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=6"/><h3 style="color: white;">Bus No. 6</h3><br>
		</div>
 
    	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=7"/><h3 style="color: white;">Bus No. 7</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=8"/><h3 style="color: white;">Bus No. 8</h3><br>
		</div>
		<div class="col-sm-2">
  	   	 
		</div>
 </div>


<div class="row" >
	<div class="col-sm-2">
  	   	 
		</div>
	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=9"/><h3 style="color: white;">Bus No. 9</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=10"/><h3 style="color: white;">Bus No. 10</h3><br>
		</div>
 
    	<div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=11"/><h3 style="color: white;">Bus No. 11</h3><br>
		</div>
  	   <div class="col-sm-2">
  	   	  <input type="radio" name="site" onchange="document.myform.formVar.value=12"/><h3 style="color: white;">Bus No. 12</h3><br>
		</div>
		<div class="col-sm-2">
  	   	 
		</div>
 </div>

 <div class="row" >
	<div class="col-sm-4">
  	   	 
		</div>
	<div class="col-sm-4">
  	   	<input type ="hidden" name="formVar" value="">
<input type="submit" name="submit" value="SUBMIT" />
		</div>
  	   <div class="col-sm-4">
  	   	  
		</div>
 
  	   	 </div>
	
  </form>



</div>







</body>
</html>