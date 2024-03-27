<?php
include("connection.php");

$username = $_POST['username'];
$phone = $_POST['phonenumber'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confpass = $_POST['confpass'];


$sql_username = "SELECT * FROM users WHERE username='$username'";
$result_username = mysqli_query($conn, $sql_username); 
$num_username = mysqli_num_rows($result_username);  

$sql_email = "SELECT * FROM users WHERE email='$email'";
$result_email = mysqli_query($conn, $sql_email); 
$num_email = mysqli_num_rows($result_email);  

if ($num_username == 0 && $num_email == 0) {
    
    if ($pass == $confpass) {
  $sql_insert = "INSERT INTO `users` (`username`, `email`, `password`, `number`, `role`) 
          VALUES ('$username', '$email', '$pass', '$phone', '1')"; 
 $result_insert = mysqli_query($conn, $sql_insert); 

  if ($result_insert) { 
          
     echo '<script>alert("Registration successful");</script>';
     } else {
          
      echo '<script>alert("Registration failed. Please try again later.");</script>';
  }
    } else {  
    
 echo '<script>alert("Passwords don\'t match.");</script>';
    }  
} elseif ($num_username > 0) { 

    echo '<script>alert("Username already used.");</script>';
} elseif ($num_email > 0) { 
 
    echo '<script>alert("Email already used.");</script>';
}

echo '<script>window.location.href = "login.html";</script>';
?>
