<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>
<body>
<?php
echo "<h1><strong>Task 1</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number0" size="44" placeholder="Please write a number of elements you want to count"/>
    <input type="submit" name="Press0" value="Press to change " />
</form>
<?php
if( isset( $_POST['Press0'] ) ) {
    $number2 = $_POST['Number0'];
    $sum=0;
    for ($i=1;$i<=$number2;$i+=3){
        $sum += $i;
    }
    echo "The answer is $sum";
}
echo "<br>__________________________________________________________________</br>";
echo "<h1><strong>Task 2</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number" size="44" placeholder="Please write a number of elements you want in your array "/>
    <input type="submit" name="Press" value="Press to change " />
</form>
<?php
if( isset( $_POST['Press'] ) ) {
    $arMine = array();
    $count = $_POST['Number'];
    for ($number = 0; $number < $count; $number++) {
        $arMine[$number] = pow($number, 2);
    }
    print_r($arMine);
}
echo "<br>__________________________________________________________________</br>";


echo "<h1><strong>Task 3</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number1" size="22" placeholder="Please write an integer number"/>
    <input type="submit" name="Press1" value="Press to change " />
</form>
<?php
if( isset( $_POST['Press1'] ) ) {
    $number3 = $_POST['Number1'];
    $count=$number3%2;
    if ($count == 0){
        $number3 /= 2;
        echo "Your number divided by two and is $number3.";
    } else {
        $number3 *= 3;
        echo "Your number multiplied by three and is $number3.";
    }
}
echo "<br>__________________________________________________________________</br>";


echo "<h1><strong>Task 4</strong></h1>";
?>
<form method="POST">
    <input type="text" name="Number2" size="22" placeholder="Please write an integer number"/>
    <input type="text" name="Number3" size="27" placeholder="Please write another integer number"/>
    <input type="submit" name="Press2" value="Press to change " />
</form>
<?php
if( isset( $_POST['Press2'] ) ) {
    $number4= $_POST['Number2'];
    $number5 = $_POST['Number3'];
    $result=abs($number4-$number5);
    if ($result <= 20){
        echo "Yes, the difference is grater than 20";
    } else {
        echo "No, the difference is less than 20";
    }
}
echo "<br>__________________________________________________________________</br>";


echo "<h1><strong>Task 5</strong></h1>";
$arYears = array(1993,1861,2015,1867,1735,1999,2000,2005,1900,1503);
sort ($arYears);
echo "Sorting of array elements, using standard function:<br><br>";
print_r($arYears);
unset($arYears);
$arYears = array(1993,1861,2015,1867,1735,1999,2000,2005,1900,1503);
echo "<br><br>Sorting of array elements, not using standard function:<br><br>";
$count = count($arYears);
$arYears2 = array();
for($number6 = 0; $number6 < $count; $number6++) {
    $min = min($arYears); //1503
    $arg = array_search($min, $arYears);
    unset($arYears[$arg]);
    $arYears2[$number6] = $min;
}
print_r($arYears2);
?>
</body>
</html>