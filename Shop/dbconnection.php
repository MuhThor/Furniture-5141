<?php
    $con = mysqli_connect("localhost","root","","cart");

    if($con == false){
        die("Connection failed:". mysqli_connect_error());
    }
?>