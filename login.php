

<?php

include ("connection.php");

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $loginquery="SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $loginres = $conn->query($loginquery);

    echo $loginres->num_rows;

    if ($loginres->num_rows ==1) 
    {

      header("Location: authentverif.html");
      exit();
    }
    else
    {
        header("Location: authentinverif.html");
        exit();
    }
    $conn->close();
}





?>

