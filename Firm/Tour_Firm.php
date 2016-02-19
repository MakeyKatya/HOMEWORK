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
    <div id="countries">

        <h2 align="center">Чтобы оформить заявку, выберите страну</h2>

        <div id="select_country">
            <?php
                require 'Classes/Explode.class.inc';
                require 'Classes/Navigation.class.inc';
                require 'Classes/TableWithCountries.class.inc';

                $countries = file('countries.txt');
                $select = new Explode();
                $select->arrExplode($countries);

                $nav = new Navigation();

                foreach($select->array as $key => $index){
                    $nav -> add_item($index[0], "Fill_request.php");
                }
                $nav -> nav_create();
                $nav->show_array();
            ?>
        </div>

            <h2 align="center">Быстрый калькулятор путевок</h2>

            <div style="float: left; margin-left: 5%">
                <form id="function" method="POST" action="" >
                    <p>Выберите страну, в которую хотите поехать:</p>
                    <select style="margin-left: 5%" name="countries">
                        <?php foreach($select->array as $key => $index):
                            if($index[0] == $_REQUEST['countries']):?>
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
                    <p><input type="radio" name="discount" class="parag" value="1">10% - скидочная карта "Premium"</p>
                    <input id="count" type="submit" name="count" style='font-size: 20px' value="Рассчитать стоимость путевки">
                </form>
            </div>

            <!--вывод таблицы с наценками и странами-->
            <div style="margin-left: 60%;">
                <strong>
                    <table cellspacing="2" border="1" cellpadding="5" class='do_file'>
                        <tr>
                            <td><p>Список стран</p></td>
                            <td>Надбавки</td>
                        </tr>

                        <?php
                        //помещение элементов массива в таблицу
                        $table = new Countries($countries);
                        $table->set_table($table->array);
                        $value = $table->array;
                        ?>

                    </table>
                </strong>
            </div>

            <!--вывод результата на экран-->
            <div id="res" align="center"><br></div>

    </div>

    <!--реализация аякса-->
    <script src="jquery.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#function').submit(function(e){
                e.preventDefault();
                var formData = $(this).serializeArray();
                console.log(formData);
                $.ajax({
                    url: "function.php",
                    type: 'post',
                    data: formData,
                    response:'text',//тип возвращаемого ответа text либо xml
                    success: function(data){
                        $('#res').html(data);
                    }
                });
            });
        });
        /*реализация реакции на нажатие картинки*/
        $('a').click(function(){
            alert("Ваш выбор сделан");
        });
    </script>
</body>
</html>
