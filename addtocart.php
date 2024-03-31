<?php
session_start();

if ( isset($_POST['productid'])) {
    
    $productid = $_POST['productid'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    //$_SESSION['cart'][] = $productid; 93Adt 3 ayyem n9Oul chbih yehseb bel prodduct louwel akahaw
    array_push($_SESSION['cart'], $productid);

    header("Location: {$_SERVER['HTTP_REFERER']}");// http referer bch traj3ek lel page elli baatht menha request . ki tsir request el post yhot el url eli tbaathet menha ka refer (fama browsers mayaamlouhech a securite)
    exit();
} else {
    echo "Invalid request!";
}
?>
