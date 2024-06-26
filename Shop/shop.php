<?php

    // start session
    session_start();

    require_once('compShop.php');
    include 'createDb.php';

    // create instance of createdb class
    $database = new createDb("dbmebel", "product");

    if(isset($_POST['product-item'])){
        print_r($_POST['id_product']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniturQyu Shop</title>
    <link rel="stylesheet" href="shops.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Overpass&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="Images/logo.png" alt="Logo" width="150">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Cari...">
        </div>
        <div class="user-links">
            <a href="#">
                <img src="Images/person.png" alt="person" width="30">
            </a>
            <a href="#">
                <img src="Images/love.png" alt="love" width="30">
            </a>
            <a href="#">
                <img src="Images/shopping-cart.png" alt="cart" width="30">
            </a>
        </div>
        <div style="clear: both;"></div>
    </div>
  <div class="banner">
    <div class="row">
        <div class="col1">
            <a href="Homepage.html">Home </a> 
            <a href="shop.html">Shop</a> 
            <a href="Produk.html">Products </a>  
            <a href="AboutUs.html">About Us </a>
            <a href="contact.html">Contacts </a> 
        </div>
    </div>
  </div>

    <div class="container">
        <aside class="sidebar"> 
            <h3>Product Categories</h2>
            <ul class="category-list">
                <li class="category-item active">All</li>       <!--active menandakan kategori yg dipilih-->
                <li class="category-item">Furnitures</li>
                <li class="category-item">Chairs</li>
                <li class="category-item">Sofas</li>
                <li class="category-item">Lighting</li>
            </ul>
            <h3>Home decor</h2>
            <ul class="category-list">
                <li class="category-item">Living Room</li>
                <li class="category-item">Dining Room</li>
                <li class="category-item">Entry Way</li>
                <li class="category-item">Outdoor</li>
            </ul>
        </aside>
        <main class="product-list">    
                <?php
                    $result = $database->getData();
                    if ($result !== false) {
                        while ($row = $result->fetch_assoc()) {
                            echo component($row['image'], $row['name'], $row['price'], $row['id_product'], $row['desk']);
                        }
                    }
                ?>
        </main>
    </div>
    <div class="footer">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="Images/logo.png" alt="Logo">
            </div>
            <div>
                <p>Email: example@example.com</p>
                <br>
                <p>Alamat: Jalan Contoh No. 123</p>
                <br>
                <p>Nomor HP: 08123456789</p>
            </div>
        </div>
         <!--Test Footer di tengah-->
        <div class="footer-center">
            <div class="useful-links">
                <h4>Useful Links</h4>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Blog</a>
            </div>
            <div class="idea-advice">
                <h4>Idea & Advice</h4>
                <a href="#">Reviews</a>
                <a href="#">Get Design Help</a>
                <a href="#">Material Care</a>
            </div>
        </div>
              <!--Footer Logo pembayaran-->
        <div class="footer-right">
            <div class="payment-methods">
                <h4>Payments Method</h4>
                <img src="Images/pay.png" alt="pay">
            </div>
        </div>
    </div>
</body>
</html>
