<?php
session_start(); // Start the session to track cart items

// Check if 'Add to Cart' button was clicked and process the product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    
    // Add the product to the session cart
    $_SESSION['cart'][] = [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice
    ];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
          content="Abhi, Abhi GMbH" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/AbhiGmbh_Logo.png">
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/themeButton.css">
    <script
        src="../JS_files/darkmode.js" defer>
    </script>
    <script
    src="../JS_files/shoppingList.js" defer>
</script>
<script
        src="../JS_files/navbar.js" defer>
    </script>
</head>
<body>
  <div class="container">
  <div id="navbar-container"></div>
    <div class="content">
      <button id="themebutton", onclick="toggleMode()">test</button>
      <a href="shoppingList.php"><button>sc</button></a>
      <h1>Products</h1>
      <div class="grid-container">
      <?php
// Reading the JSON file
$jsonData = file_get_contents("../productData/product.json");

// Decoding JSON data to PHP array
$products = json_decode($jsonData, true);

// Displaying each product's details
// <button class="AddProd" onclick="addItem(\'' . $product['name'] . '\', \'' . $product['price'] . '\', \'desc\')">ADD TO CART</button>
foreach ($products as $product) {
  echo '
      <div class="grid-item">
          <img class="prodimg" src="../images/product_wt_1.png" alt="img not available">
          <p>Decorations</p>
          <!-- Modified anchor tag with query parameters -->
          <a href="product_detail.php?pid=' . $product['pid'] . '&name=' . urlencode($product['name']) . '&price=' . urlencode($product['price']) . '">
              <p class="producttitle">' . $product['name'] . '</p>
          </a>
          <p class="productprice">' . $product['price'] . '</p>
          <br>
          <br>
          <div class="setCenter">
              <form method="POST" action="">
                  <input type="hidden" name="product_id" value="' . $product['pid'] . '">
                  <input type="hidden" name="product_name" value="' . htmlspecialchars($product['name']) . '">
                  <input type="hidden" name="product_price" value="' . $product['price'] . '">
                  <button class="AddProd" name="add_to_cart">ADD TO CART</button>
              </form>
              
          </div>
      </div>';
}

?> 

  </div>
      </div>
    <ul id="itemList"></ul>
    <button onclick="getPrice()">Calculate Price</button>
    <div id="price"></div>
    </div>
    
  </div>
  
</body>
</html>