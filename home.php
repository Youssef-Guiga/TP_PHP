  <?php    session_start(); ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css" />
    

    <title>ERRET BAZ'ART</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <h1>ERRET BAZ'ART</h1>
          <input id="searchInput" type="text" placeholder="Search" oninput="filterCards()" />
          
          <li><a href="cart.php">Panier</a></li>
          
          <li><a href="contact.html">Contact</a></li>
          <li><a href="logout.php">logout</a></li>
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
         
    <div class="slideshow-container">
    
      
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img class= "sliderimg" src="./pict/1.jpg" style="width:100%" >
        <div class="text">coming soon</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img class= "sliderimg" src="./pict/2.jpg" style="width:100%">
        <div class="text">coming soon</div>
      </div>
    
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img class= "sliderimg" src="./pict/3.jpg" style="width:100%">
        <div class="text">coming soon</div>
      </div>
    
      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <a name="trikouet"></a>
    <div class="first">
      <div class="trikouet firstcard">
          <h2 class="salem"> PRODUCTS </h2>
          
          <?php
  include("connection.php");

  try {
      $statement = $conn->query('SELECT * FROM products');
      $products = $statement->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
      die("Error: " . $e->getMessage());
  }


  foreach ($products as $product) {
    echo '<div class="card-items">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
    echo '<p class="titre">' . $product['name'] . '</p>';
    echo '<p>' . $product['price'] . '</p>';
    
       echo '<form method="post" action="addtocart.php">';
    echo '<input type="hidden" name="productid" value="' . $product['id'] . '">';
    echo '<button class="btn" type="submit">Add to Cart</button>';
    echo '</form>';
    echo '</div>';
  }


  ?>
          
          
      </div>
  </div>
        
            </main>
        </main>
        <footer>
          <p>Copyright &#169; 2023-2024</p>
        </footer>
        <script src="index.js"></script>
      </body>
      
    </html>