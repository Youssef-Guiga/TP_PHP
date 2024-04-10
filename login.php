

 <?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $loginquery = "SELECT * FROM users WHERE email=:email AND password=:password";
    $statement = $conn->prepare($loginquery);

    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $pass); //to prevent sql injection
    $statement->execute();
    $resu = $statement->fetch(PDO::FETCH_ASSOC);

    if ($resu) {
        if ($resu['role'] == 0) { // 0 admin
            header("Location: homeadmin.php");
            exit();
        } else if ($resu['role'] == 1) { // 1 user
            $_SESSION['user'] = $resu['username'];
            header("Location: home.php");
            exit();
        }
    } else {
        header("Location: authentinverif.html");
        exit();
    }

    $conn = NULL;
}
?>


