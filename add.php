<?php
include("connection.php");
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];
$db="INSERT INTO products (name, price, image) VALUES (:name,:price,:image) ";
$statement=$conn->prepare($db);

$statement->bindParam(':name', $name);
$statement->bindParam(':price', $price);
$statement->bindParam(':image', $image);
try {
    $statement->execute();
    echo "ajout avec succes";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



$conn = null;
?>

