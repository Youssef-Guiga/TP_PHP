    <?php
    include("connection.php");

    $username = $_POST['username'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confpass = $_POST['confpass'];

    $dbusername="SELECT * FROM users WHERE username:=username";
    $statementusername=$conn->prepare($dbusername);
    $statementusername = $conn->prepare($dbusername);
$statementusername->bindParam(':username', $username);
$statementusername->execute();
$numusers = $statementusername->rowCount();


$dbemail = "SELECT * FROM users WHERE email=:email";
$statementemail = $conn->prepare($dbemail);
$statementemail->bindParam(':email', $email);
$statementemail->execute();
$numemeails = $statementemail->rowCount();


if ($numusers == 0 && $numemeails == 0) {
    if ($pass == $confpass) {
      
        $sql_insert = "INSERT INTO `users` (`username`, `email`, `password`, `number`, `role`) 
                       VALUES (:username, :email, :pass, :phone, '1')";
        $statementinsert = $conn->prepare($sql_insert);
        $statementinsert->bindParam(':username', $username);
        $statementinsert->bindParam(':email', $email);
        $statementinsert->bindParam(':pass', $pass);
        $statementinsert->bindParam(':phone', $phone);
        if ($statementinsert->execute()) {
            echo '<script>alert("Registration successful");</script>';
        } else {
            echo '<script>alert("Registration failed. Please try again later.");</script>';
        }
    } else {
        echo '<script>alert("Passwords don\'t match.");</script>';
    }
} elseif ($numusers > 0) {
    echo '<script>alert("Username already used.");</script>';
} elseif ($numemeails > 0) {
    echo '<script>alert("Email already used.");</script>';
}

echo '<script>window.location.href = "login.html";</script>';
  
    ?>
