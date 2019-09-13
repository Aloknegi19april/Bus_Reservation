<?php
$mysqli = new mysqli('localhost','root','','reg');

// if($_SERVER['REQUEST_METHOD']=='POST') {
//     if(isset($_POST['signup'])) {
//     if($_POST['password']==$_POST['cPassword']) {
        
//         $username = $mysqli->real_escape_string($_POST['username']);
//         $email = $mysqli->real_escape_string($_POST['email']);
//         $password = md5($_POST['password']);
//         $avatar_path = $mysqli->real_escape_string('images/avatar/'.$_FILES['avatar']['name']);
//         if(preg_match("!image!",$_FILES['avatar']['type'])) {
//             if(copy($_FILES['avatar']['tmp_name'],$avatar_path)) {
//                 $_SESSION['username'] = $username;
//                 $_SESSION['avatar'] = $avatar_path;
//                 $_SESSION['email'] = $email;
//                 $sql = "INSERT INTO users (name,email,password,avatar) VALUES ('$username','$email','$password','$avatar_path')";
                
//                 if($mysqli->query($sql) === true) {
//                     $_SESSION['message']='Congratulations ! You have been registered';
//                       mysqli_query($mysqli,"INSERT INTO userdetails (email) VALUES ('$email')");
//                       header("location: land.php");
//                 }
//                 else {
//                     $_SESSION['message']='Unexpected server problem! Please try again.';
//                     header("location: index.php");
//                      }
//             }
//             else {
//                 $_SESSION['message']='Image file cannot be uploaded';
//                 header("location:  index.php");
//                 }
//         }
//         else {
//             $_SESSION['message']='Invalid image type! please use jpg or png';
//             header("location: index.php");
//             }
//     }
//     else {
//     $_SESSION['message']='Your password does not match';
//     header("location: index.php");
//     }
//   }
    
        if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //3.1.2 Checking the values are existing in the database or not
        $query = "SELECT * FROM user WHERE user='$user' and pass='$pass'";

        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $count = mysqli_num_rows($result);
        //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
        if ($count == 1){
			
        header("location:html/Bus.php"); 
        }
        else{
			echo"Failed";
        header("location:");
        }
    }
        
 // else {
 // $_SESSION['message'] = 'Bad request';
 // header("location: index.php");
 // }

?>