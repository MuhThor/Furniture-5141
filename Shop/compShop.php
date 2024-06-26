<?php

function component($image, $name, $price, $idproduct){
    $element = '
        <div class="product-item">
            <a href="produk.php?id_product=' . $idproduct . '">
                <img src="' . $image . '" alt="' . $name . '">
                <h3>' . $name . '</h3>
                <p>' . $price . '</p>
            </a>
        </div>
    ';
    return $element;
}

?>