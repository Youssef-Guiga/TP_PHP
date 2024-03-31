<?php
session_start();

if (isset($_POST['productid']) && !empty($_POST['productid'])) {
    $productId = $_POST['productid'];

   
    if (in_array($productId, $_SESSION['cart'])) {
      
        $index = array_search($productId, $_SESSION['cart']);
        
       
        unset($_SESSION['cart'][$index]);
        
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        
        
        header("Location: cart.php");
        exit(); 
    } else {
        echo "Product not found in cart.";
    }
} else {
    echo "Invalid product ID.";
}
?>
