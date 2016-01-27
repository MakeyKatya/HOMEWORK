<?php

if($_POST['days'] && $_POST['discount'] != ""){
    echo "<br>Надбавка к соимости составляет - ".$_POST['countries']."<br>";
    $price = $_POST['days'] * 400;
    $price_discount = $price * $_POST['discount'];
    $total_price = $price - $price_discount + $price*$_POST['countries']/100;
    echo "Стоимость поездки составляет  - $total_price грн.<br>";
}

?>
