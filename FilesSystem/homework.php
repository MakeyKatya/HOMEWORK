<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>
<body>
<?php

echo "<br>____________________TASK 1________________________<br><br>";

function read_file($path){
    if (file_exists($path)) {
        $to_array = file($path);
        return $to_array;
    }
};

function write_file($document, $number){
    $handle = fopen($document,'w+');
    fwrite($handle, $number);
    fclose($handle);
};

$path = 'input.txt';

$to_array = read_file($path);

$multiply = $to_array[0] + $to_array[1];

echo $multiply;

$document = 'result.txt';

write_file($document, $multiply);

echo "<br>____________________TASK 2________________________<br><br>";

$array = 'array.txt';

$to_array = file($array);

$value = $to_array[0];
$divide = explode(' ', $value);

var_dump($divide);

$pow_file = 'pow.txt';

$handle = fopen($pow_file, 'r');
$text = "";
if($handle) {
    $text .= fgets($handle) . "<br>";
    fclose($handle);
}
$arPow = array();
for ($i=0;$i<count($divide);$i++) {
        $pow = pow($divide[$i], $text);
        $arPow[$i]=$pow;
    }
var_dump($arPow);

$arPow = implode(" ", $arPow);

$pow_2 = 'pow_value.txt';
write_file($pow_2, $arPow);


echo "<br><br>";
?>

