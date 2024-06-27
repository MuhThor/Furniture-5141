<?php

function component($image, $name, $color, $price){
    $element = '
        <tr class="product-row">
            <td><a href="#"><i class="far fa-times-circle"></i></a></td>
            <td><img src="' . $image . '" alt=""></td>
            <td><h4>' . $name . '</h4>
                <p>' . $color . '</p>
            </td>
            <td>' . $price . '</td>
            <td><input type="number" value="1"></td>
            <td>' . $price . '</td>
        </tr>
    ';
    return $element;
}

?>
