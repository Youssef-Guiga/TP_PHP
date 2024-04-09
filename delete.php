<?php
include("connection.php");
$id=$_POST['id'];
$name=$_POST['name'];


$db="DELETE FROM products WHERE id=:id AND name=:name";
$satetement=$conn->prepare($db);
$statement->bindParam(':id', $id);
$statement->bindParam(':name', $name);
try {
    $statement->execute();
    echo "suppression avec succes";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>