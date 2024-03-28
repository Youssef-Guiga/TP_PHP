

  <?php
    session_start();
  include ("connection.php");

  if (isset($_POST['submit'])) 
  {
      $email = $_POST['email'];
      $pass = $_POST['password'];

      $loginquery = "SELECT * FROM users WHERE email=:email AND password=:password";  
    $statement=$conn->prepare($loginquery);

    $statement->bindParam(':email', $email);
    $statement->bindParam(':password', $pass);
    $statement->execute();
    $resu=$statement->fetch(PDO::FETCH_ASSOC);
     
    if($resu){
      $_SESSION['user'] = $resu['username'];
      header("Location: home.php");
      exit();
    }else{
      header("Location: authentinverif.html");
        exit();
    }

     $conn=NULL;}




  ?>

