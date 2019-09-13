<?php

$user = $_POST["user"];
$pass = $_POST["pass"];

//$user = stripcslashes($user);
//$pass = stripcslashes($pass);

$pass = mysql_real_escape_string($user);
 @mysql_connect("localhost","root","");
  @mysql_select_db("reg");
  
  $result = mysql_query("select * from user where user='$user' and pass = '$pass'")
            or die("Failed to query database ".mysql_error());
			
			$row=mysql_fetch_array($result);
			if($row['user'] == $user && $row['pass'] ==$pass)
			{
			  echo "Login success!!! Welcome ".$row['user'];
			  }
			  else{
			   echo "Faild to Login !";
			   }
			   
			   ?>
			   