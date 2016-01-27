<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>
<body>
<?php
echo "<h1><strong>Task 1</strong></h1>";
$name = "Kate";
$age = 22;
echo "My name is $name. <br>";
echo "I am $age years old. <br>";

echo "<br>__________________________________________________________________</br>";


echo "<h1><strong>Task 2</strong></h1>";

$a = 10;
$s = (pow($a,2)*bcsqrt('3',2))/4; //квадратный корень из 3х с одним знаком после запятой
//pow(27,1/3) - возведение в степень 1/3 числа 27 либо корень кубический из числа 27
echo $s;
echo "<br>__________________________________________________________________</br>";


echo "<h1><strong>Task 3.1 (change number to binary)</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number" placeholder="Please write a number "/>
    <input type="submit" name="Press" value="Press to change " />
</form>
<?php
# Если кнопка нажата
if( isset( $_POST['Press'] ) ) {
    $number = $_POST['Number'];
    $null = "";
    while ($number != 0) {
        $rest = $number % 2;
        $rest1 = $number / 2;
        $number = (int)$rest1;
        if ($rest > 0) {
            $null ="1".$null;
        }
        else {
            $null = "0".$null;
        }
    }
    echo "Your binary number is $null";
}
echo "<br>__________________________________________________________________</br>";

echo "<h1><strong>Task 3.2 (change binary to number)</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number1" placeholder="Please write a number "/>
    <input type="submit" name="Press1" value="Press to change " />
</form>
<?php
# Если кнопка нажата
if( isset( $_POST['Press1'] ) ) {
    $number = $_POST['Number1'];
    $number = (string)$number;
    $count = strlen($number)-1;
    for ($t = 0, $binary = 0; $t < strlen($number); $t++) {
        $binary = 2 * $binary + $number[$t];
    }
    echo "Your integer number is $binary";
}
?>
</body>
</html>
