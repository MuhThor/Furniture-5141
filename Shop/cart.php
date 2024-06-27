<?php

    require_once('component.php');
    require_once('createDb.php');

    // create instance of createdb class
    $database = new createDb("cart", "product");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <section id="header">
        <div class="header header">
            <div class="header-1">
                <a href="Homepage.html" class="logo">
                    <img src="Images/logo.png" alt="Logo" width="100">
                </a>

                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>

                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <a href="#" class="fa-regular fa-heart"></a>
                    <a href="#" class="fa-solid fa-cart-plus"></a>
                    <div id="login-btn" class="fa-regular fa-user"></div>
                </div>
            </div>

            <div class="header-2">
                <nav class="navbar">
                    <a href="Homepage.html">HOME</a>
                    <a href="shop.html">SHOP</a>
                    <a href="Produk.html">PRODUCTS</a>
                    <a href="AboutUs.html">ABOUT US</a>
                    <a href="contact.html">CONTACT</a>
                </nav>
            </div>
        </div>

        <nav class="bottom-navbar">
            <a href="Homepage.html" class="fas fa-home"></a>
            <a href="shop.html" class="fas fa-bag-shopping"></a>
            <a href="Produk.html" class="fas fa-chair"></a>
            <a href="contact.html" class="fas fa-comments"></a>
        </nav>
    </section>

    <section id="cart" >
        <table width="100%">
            <thead>
                <tr>
                    <td>REMOVE</td>
                    <td>IMAGE</td>
                    <td>PRODUCT</td>
                    <td>PRICE</td>
                    <td>QUANTITY</td>
                    <td>SUBTOTAL</td>
                </tr>
            </thead>
            <tbody>
                <?php
                        $result = $database->getData();
                        if ($result !== false) {
                            while ($row = $result->fetch_assoc()) {
                                echo component($row['image'], $row['name'], $row['color'], $row['price'], $row['price']);
                            }
                        }
                    ?>
            </tbody>
        </table>
        <!-- <button class="btn-Proceed-checkout">Proceed to Checkout</button> -->
    </section>

    <section id="cart-add">
        <div id="subtotal" class="section-p1">
            <h2>Cart Total</h2>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>IDR 27,340,000</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>IDR 27,340,000</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to Checkout</button>
        </div>
    </section>

    <section id="footer">
        <div class="footer">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="Images/logo.png" alt="Logo">
                </div>
                <div>
                    <p>Email: furniturQyu@gmail.com</p>
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
    </section>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>