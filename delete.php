<?php
include("connection.php");


if (isset($_POST['id'])) {
$id=$_POST['id'];}



$db="DELETE FROM products WHERE id=:id";
$statement=$conn->prepare($db);
$statement->bindParam(':id', $id);

try {
    $statement->execute();
    echo "suppression avec succes";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn=null;
?>