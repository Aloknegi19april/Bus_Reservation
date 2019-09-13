<?php  

 if(isset($_POST['admin_login_submit']))
  {

	//$email = filter_var(mysqli_real_escape_string($con,$_POST['uname']), FILTER_SANITIZE_EMAIL); //sanitize email
 
	$_SESSION['uname'] = $email;
      $user=mysqli_real_escape_string($con,md5($_POST['user']));      
    $pass=mysqli_real_escape_string($con,md5($_POST['pass']));

	$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE user='$email' AND pass='$password'");

	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1)
	 {   echo "<script type='text/javascript'>alert('sucessfull');</script>";
		$row = mysqli_fetch_array($check_database_query);
		$username = $row['username'];
        $_SESSION['username'] = $username;
		header("Location:list.php");
		exit();
	  }
	else
	 {
		
		echo "<script type='text/javascript'>alert('Email or password was incorrect.');</script>";

	}
}

?>