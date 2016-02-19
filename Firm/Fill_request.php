<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Турагенство</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <h1 align="center" style="color: black">
        <em><ins>Добро пожаловать на сайт Туристической фирмы "Sky"</ins></em>
    </h1>
    <?php

    require 'Classes/Explode.class.inc';
    require 'Classes/Navigation.class.inc';
    require 'Classes/TableWithCountries.class.inc';

    $countries = file('countries.txt');
    $select = new Explode();
    $select->arrExplode($countries);
    $nav = new Navigation();

    foreach($select->array as $key => $index){
        $nav -> add_item($index[0], "table_countries.php");
    }

    $nav -> nav_create();
    $parametr = $_GET['id'];
    echo $nav->arrFull[$parametr];
    ?>
    <div id="countries">
        <h2 align="center">Чтобы оформить заявку, выберите страну</h2>
        <div class="form">
            <form id="request_fill" method="POST" action="request.php" style="margin-left: 20%">
                <p align="center"><h1><b>Информация о Вас:</b></h1></p>
                <p>Введите Ваше имя:</p>
                <input type="text" name="name">
                <p>Введите Ваш возраст:</p>
                <input type="text" name="age">
                <p>Введите номер вашей дисконтной карты:</p>
                <input type="text" name="card">
                <p>Страна, в которую хотите поехать:</p>
                <select style="margin-left: 5%" name="countries">
                    <?php foreach($select->array as $key => $index):
                        if($index[0] == $nav->arrLinks[$parametr]['title']):?>
                            <option selected="selected" value="<?=$index[1] ?>"><?=$index[0]?></option>
                        <?php else:?>
                            <option value="<?=$index[1] ?>"><?=$index[0] ?></option>
                        <?php endif;
                    endforeach;?>
                </select>
                <p>Введите количество дней поездки:</p>
                <input type="text" name="days" style="margin-left: 6%">
                <p>Выберите вашу скидку:</p>
                <p><input type="radio" name="discount" class="parag" value="1">1% - пенсионерам и студентам</p>
                <p><input type="radio" name="discount" class="parag" value="5">5% - скидочная карта "Standart"</p>
                <p><input type="radio" name="discount" class="parag" value="10">10% - скидочная карта "Premium"</p>
                <input id="count" type="submit" name="count" style='font-size: 20px' value="Отправить заявку">
            </form>
        </div>
    </div>
    
    <!--реализация аякса-->
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#request_fill').submit(function(e){
                e.preventDefault();
                var formData = $(this).serializeArray();
                console.log(formData);
                $.ajax({
                    url: "request.php",
                    type: 'post',
                    data: formData,
                    response:'text',//тип возвращаемого ответа text либо xml
                    success: function(){
                        alert('Ваши данные отправлены на обработку. Спасибо, что воспользовались нашими услугами.')
                    }
                });
            });
        });
    </script>

</body>
</html>