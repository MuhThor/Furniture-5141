<?php
    // Include database connection
    include 'createDb.php';
    include 'compProduk.php';

    // Retrieve the product ID from the query string
    $idproduct = isset($_GET['id_product']) ? intval($_GET['id_product']) : 0;

    $database = new createDb("dbmebel", "product");

    // Fetch product details based on the product ID
    $product = null;
    if ($idproduct > 0) {
        $result = $db->getProductById($idproduct);
        if ($result !== false) {
            $product = $result->fetch_assoc();
        }
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="Produk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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


  <?php if ($product): ?>
    <div class="product-detail">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h1><?php echo $product['name']; ?></h1>
        <p><?php echo $product['price']; ?></p>
        <p><?php echo $product['desk']; ?></p>
    </div>
    <?php else: ?>
        <p>Product not found!</p>
    <?php endif; ?>
    
</div>

<script>
    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    }
</script>

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

    <div class="footer-right">
        <div class="payment-methods">
            <h4>Payments Method</h4>
            <img src="Images/pay.png" alt="pay">
        </div>
    </div>
</div>
</body>
</html>