<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="responsive.css"/>
    <link rel="stylesheet" href="faq.css">


    <title>ERRET BAZ'ART</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <h1>ERRET BAZ'ART</h1>
            <input id="searchInput" type="text" placeholder="Search" oninput="filterCards()"/>
            <li><a href="home.php">Home</a></li>


            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="logout.php">Log out</a></li>
            <li><a href="cart.php">Cart</a></li>


            <?php

            if (isset($_SESSION['user'])) {
                $username = $_SESSION['user'];

                echo '<li><a href="#userAccount" style="color:red">' . $username . '</a></li>';
            } else {
                header("Location: index.html");
            }
            ?>


        </ul>
    </nav>
</header>

<main>
    <div class="container">
        <p class="faq"> Frequently Asked Questions</p>
    </div>
    <div class="firstcard">
    <div class="container">
        <div class="row">
            <div class="block1">
                <div class="blockFeature">
                    <h4>Order status</h4>
                    <p>Check the status of your order easily by logging into your account and navigating <br>to the order history section. Here, you'll find detailed information about the current status of your order, whether it's been processed, shipped, or delivered.</p>
                </div>
            </div>
            <div class="block1">
                <div class="blockFeature">
                <h4>Shipping & Delivery</h4>
                <p>We offer fast and reliable shipping options to ensure your order reaches you promptly. Once your order is placed, you'll receive a confirmation email with tracking information. You can track your package in real-time to see its estimated delivery date.</p>
                </div>
            </div>
            <div class="block1">
                <div class="blockFeature">
                    <h4>Payments</h4>
                    <p>We accept a variety of payment methods to make your shopping experience convenient. You can pay using major credit cards, debit cards, or through secure online payment gateways. Rest assured that your payment information is safe and protected.</p>
                </div>
            </div>
            <div class="block1">
                <div class="blockFeature">
                    <h4>Returns & Exchanges</h4>
                    <p>We want you to be completely satisfied with your purchase. If for any reason <br>you're not happy with your order, you can return or exchange it within 30 days of purchase. Please refer to our returns policy for detailed instructions on how to initiate a return or exchange.</p>
                </div>
            </div>
            <div class="block1">
                <div class="blockFeature">
                    <h4>Privacy Policy</h4>
                    <p> Your privacy is important to us, and we are committed to protecting your personal information. Our privacy policy outlines how we collect, use, and protect your data when you use our website. Rest assured that your information is secure with us.</p>
                </div>
            </div>
            <div class="block1">
                <div class="blockFeature">
                    <h4>Refund Policy</h4>
                    <p> If you're eligible for a refund, we'll process it as soon as we receive the returned item. Refunds are issued to the original payment method used for the purchase. Please allow a few days for the refund to reflect in your account, depending on
                        <br>your bank's processing times.</p>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>



<footer>

    <section class="features">
        <div class="conttainer1">
            <div class="row">
                <div></div>
            </div>
        </div>
    </section>
    <p>Copyright &#169; 2023-2024</p>
</footer>
</body>
<script src="index.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
