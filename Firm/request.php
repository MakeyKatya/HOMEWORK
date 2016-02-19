<?php

    require 'Classes/Explode.class.inc';
    require 'Classes/Navigation.class.inc';
    require 'Classes/TableWithCountries.class.inc';
    require 'Classes/PriceOfTrip.class.inc';


    function write_file($document, $data){
        $handle = fopen($document,'a+');
        fwrite($handle, $data."\n");
        fclose($handle);
    };

    $document = 'request.txt';

    $price = new PriceOfTrip();
    $price->days_of_trip = $_POST['days'];
    $price->discount = $_POST['discount']/100;
    $price->add_price = $_POST['countries'];
    $price->count_price();


    write_file($document, "Ваше имя: ".$_POST['name']);
    write_file($document, "Ваш возраст: ".$_POST['age']);
    write_file($document, "Номер Вашей дисконтной карты: ".$_POST['card']);
    write_file($document, "Количество дней отдыха: ".$price->days_of_trip." дней");
    write_file($document, "Ваша скидка составляет: ".$_POST['discount']." процентов");
    write_file($document, "Надбавка составляет ".$price->add_price);
    write_file($document, "Общая стоимость путевки: ".$price->total_price." грн.");

