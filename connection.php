	<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   ="erret";

try{
	$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	
}catch(PDOException $e){
echo "connection failed";
}

?>