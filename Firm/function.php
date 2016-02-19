<?php

    require 'Classes/PriceOfTrip.class.inc';

    $price = new PriceOfTrip();
    $price->days_of_trip = $_POST['days'];
    $price->discount = ($_POST['discount'])/100;
    $price->add_price = $_POST['countries'];

    if($_POST['days'] != ""){
        echo "<br>Количество дней отдыха: ".$price->days_of_trip." дней<br>";
        if ($_POST['discount']) {
            echo "Ваша скидка составляет: " . $_POST['discount'] . " %<br>";
        }else{
            echo "Ваша скидка составляет: 0%<br>";
        }
        echo "Надбавка составляет ".$price->add_price."<br>";
        echo "<br>Общая стоимость путевки: ".$price->count_price()." грн.<br>";
    }else{
        echo "<h2 style='color: red;'>Заполните количество дней</h2>";
    }


