<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
          content="Product1, Abhi, Abhi GMbH" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/AbhiGmbh_Logo.png">
    <link rel="stylesheet" href="../styles/mystyles.css">
    <link rel="stylesheet" href="../styles/oneproducts.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <script
        src="./JS_files/navbar.js" defer>
    </script>
</head>
<body>
    <div class="container">
        <nav class="vertnavbar">
            <ul>
                <li class="logo"><img src="../images/AbhiGmbh_Logo.png" alt="Abhi_GMbH"/></li>
                <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
                <div class="dropdownfunctionality">
                    <li><a class="dropdownbutton" href="product_landing_page.php"><i class="fa fa-archive"></i>Products</a></li>
                    <div class="dropdowncontent">
                        <a href="product_landing_page.php">Toys</a>
                        <a href="product_landing_page.php">Decorations</a>
                    </div>
                </div>
                <li><a href="../content/customer.php"><i class="fa fa-user"></i>User Information</a></li>
                <li><a href="../content/about.php"><i class="fa fa-building"></i>About</a></li>
                <li><a href=""><i class="fa fa-phone"></i>Contact</a></li> <!-- we don't have a contact page yet -->
                <li class="loginregis"><a href="../content/login.php">Login / Registration</a></li>
            </ul>
        </nav>
        <div class="content">
            <p class="breadcrumb">Toys > Product Name</p>

            <div class="product-container">
                <!-- Left Side: Product Image -->
                <div class="product-image">
                    <img src="../images/product_wt_1.png" alt="Product Image">
                </div>
        
                <!-- Right Side: Product Details -->
                <div class="product-details">
                    <h1 class="product-title">Product Name</h1>
                    <p class="product-price">€10.348.692</p>
                    <div class="rating">★★★★★ <span class="reviews">(0 Reviews)</span></div>
                    
        
                    <!-- Size Selector -->
                    <div class="quantity-selector">
                        <label for="amount">Quantity:</label>
                        <select id="amount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
        
                    <!-- Add to Cart Button -->
                    <button class="add-to-cart">Add to Cart</button>
        
                    <!-- Delivery Info -->
                    <p class="delivery-info">Delivery in 4-5 business years</p>
        
                    <!-- Product Description -->
                    <div class="product-description">
                        <h3>Description</h3>
                        <p>Best Product Ever</p>
                    </div>
                </div>
            </div>
            <!-- <p>Toys > Product Name</p>

            <div class="grid-container">
                <div class="grid-item">
                    <img src="../images/product_wt_1.png" alt="Image not available"/>
                </div>
                <div class="grid-item">
                    <h2>Product1</h2>
                    <h4>Price : eur 0</h4>        
                    <h4>Description: Best product ever</h4>
                    <h4>Stock: Available</h4><br>
                </div>
            </div> -->


            <!-- <img src="../images/product_wt_1.png" alt="Image not available"/>
            <h2>Product1</h2>
            <h4>Price : eur 0</h4>        
            <h4>Description: Best product ever</h4>
            <h4>Stock: Available</h4><br> -->
        </div>
    </div>

    

    <!-- <hr> deal later
    <footer>
      Abhi GMbH &#8226 Esplanade 10, Ingolstadt &nbsp;85049 &#8226 704-555-1151
  </footer> -->
</body>
</html>