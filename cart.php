<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="cart.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Your Cart</title>
    
</head>
<body>
<?php
session_start();
include("connection.php");


if (empty($_SESSION['cart'])) {
    echo "<div class='empty-cart'>Your cart is empty.</div>";
} else {
   
    if (isset($_SESSION['user'])) {
        echo "<div class='user-details'>";
        echo "<p>Name: " . $_SESSION['user'] . "</p>";
        echo "</div>";
    }


    foreach ($_SESSION['cart'] as $productid) {
        try {
       
            $statement = $conn->prepare('SELECT * FROM products WHERE id = :id');
            $statement->bindParam(':id', $productid);
            $statement->execute();
            $product = $statement->fetch(PDO::FETCH_ASSOC);

           
            if ($product) {
                echo '<div class="product">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '<p name="name" class="name">Name: ' . $product['name'] . '</p>';
                echo '<p>Price: <p name="price" class="price">'. $product['price'] .'</p> DT</p>';
               
                echo '<input type="hidden" name="productid" value="' . $product['id'] . '">'; 
                echo '<div class="quantity">';
                echo '<button class="minus-btn" type="button">-</button>';
                echo '<input type="number" id="quantity" name="quantity" value="1" min="1" max="10">'; 
                echo '<button class="plus-btn" type="button">+</button>';
                echo '</div>';
                
                echo '<form method="post" action="removefromcart.php">';
                echo '<input type="hidden" name="productid" value="' . $product['id'] . '">'; 
                echo '<input type="submit" name="remove" value="Remove from Cart">'; 
                echo '</form>';
                echo '</div>';  
            } 
            else {
                echo "Product not found!";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }   
        
    }
    echo'<div class="receip">';
echo '<button class="generate" type="submit" id="generate-receipt-btn">Generate Receipt</button>';
echo '<div id="receipt"></div>'; 
echo'</div>';
}


?>

<script src="plusminus.js"></script>
</body>
</html>


