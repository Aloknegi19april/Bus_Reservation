<?php  include 'config.php'; ?>
<?php include 'admin_login.php'; ?>
<?php //include 'include/usersession.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body style="opacity:0.9;height:700px;background:linear-gradient(to bottom,#833ab4 0%, #fd1d1d 50%, #fcb045 100%); ">

<form action="2.php" method=post>
  <div class="container">
    <br/><br/><br/><br/><br/><br/>
  <div class="jumbotron">
    <h2>Admin login</h2>
    <hr/>
      <lable><h3><b>Email</b></h3></lable>
      <input type="text" placeholder="Enter Your Email" name="user" required>

      <lable><h3><b>Password</b></h3></lable>
      <input type="password" placeholder="Enter Password" name="pass" required>

      <button type="submit" name="admin_login_submit" >Login</button>
  </div>
</div>
</form>
</body>
</html>
