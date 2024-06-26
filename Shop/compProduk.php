<?php

function component($image, $name, $price, $idproduct, $desk){
    $element = '
    <a href="produk.php?id=' . $idproduct . '">
        <div class="Container">
            <div class="image">
                <img src="'. $image .'" alt="'. $name .'">
            </div>
            <div class="details">
                <div class="name">'. $name .'</div>
                <div class="stock">In Stock</div>
                <div class="harga">'. $price .'</div>
                <div class="deskripsi">'. $desk .'</div>
                <div class="amount_button">
                    <button onclick="decreaseQuantity()">-</button>
                    <input type="number" id="quantity" value="1">
                    <button onclick="increaseQuantity()">+</button>
                </div>
                <div class="add_button">
                    <button type="button" onclick="location.href=#">ADD TO CART</button>
                </div>
                <div class="wishlit">
                    <button type="button" onclick="location.href=#">
                        <img src="Images/love.png" alt="Add to Wishlist">
                    </button>
                </div>
                <div class="buy_button">
                    <button type="button" onclick="location.href=#">BUY NOW</button>
                </div>
            </div>
        </div>
    </a>
    ';
    return $element;
}

?>