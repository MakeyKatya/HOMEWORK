<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Document</title>
</head>
<body>

<?php
echo "<h2>Task A</h2>
        Дано натуральное число n. Выведите все числа от 1 до n.<br>";
?>

<form method="POST">
    <input type="text" name="write" size="44" placeholder="Please write a number"/>
    <input type="submit" name="length" value="Press to change " />
</form>

<?php
if( isset( $_POST['length'] ) ) {
    function natural($n, $a=1){
        echo $a." ";
        if ($n <= $a) {
            return;
        }else {
            natural($n, $a + 1);
        }
    }
   natural($_POST['write']);
}

echo "<h2>Task B</h2>
    Даны два целых числа A и В (каждое в отдельной строке).
    Выведите все числа от A до B включительно, в порядке возрастания, если A < B, или в порядке убывания в противном случае. <br>";
?>

<form method="POST">
    <input type="text" name="fromNtoN1" size="44" placeholder="Please write a number"/><br>
    <input type="text" name="fromNtoN2" size="44" placeholder="Please write a number"/>
    <input type="submit" name="length1" value="Press to change " />
</form>

<?php
if( isset( $_POST['length1'] ) ) {
    function from_NtoN($n, $a){
        echo $n. " ";
        if ($a == $n) {
            return;
        } elseif ($a > $n) {
            from_NtoN($n + 1,$a);
        }else {
            from_NtoN($n - 1, $a);
        }
    }
    from_NtoN($_POST['fromNtoN1'],$_POST['fromNtoN2']);
}

echo "<h2>Task C</h2>
    В теории вычислимости важную роль играет функция Аккермана
    Даны два целых неотрицательных числа m и n, каждое в отдельной строке. Выведите A(m,n).<br>";
?>

<form method="POST">
    <input type="text" name="number1" size="44" placeholder="Please write a number"/><br>
    <input type="text" name="number2" size="44" placeholder="Please write a number"/>
    <input type="submit" name="akkerman" value="Press to change " />
</form>

<?php
if( isset( $_POST['akkerman'] ) ) {

    function akkerman ($m, $n) {
        if ($m == 0) {
            return $n + 1;
        }
        elseif ($m > 0 && $n == 0) {
            return akkerman($m-1, 1);
        }
        elseif ($n > 0 && $m > 0){
            return akkerman($m - 1, akkerman($m, $n - 1));
        }
        else {
            return "Отрицательное число";
        }
    }
    echo akkerman ($_POST['number1'],$_POST['number2']);
}

echo "<h2>Task D</h2>
        Дано натуральное число N. Выведите слово YES, если число N является точной степенью двойки,
        или слово NO в противном случае. <br>";
?>

<form method="POST">
    <input type="text" name="number_pow" size="44" placeholder="Please write a number"/>
    <input type="submit" name="pow_two" value="Press to change " />
</form>

<?php
if( isset( $_POST['pow_two'] ) ) {
    function pow_two ($n){
        if ($n == 2){
            return "Yes";
        }elseif ($n > 2){
            return pow_two($n/2);
        }else{
            return "No";
        }
    }
    echo pow_two ($_POST['number_pow']);
}

echo "<h2>Task E</h2>
        Дано натуральное число N. Вычислите сумму его цифр.<br>";
?>

<form method="POST">
    <input type="text" name="number3" size="44" placeholder="Please write a number"/>
    <input type="submit" name="sum" value="Press to change " />
</form>

<?php
if( isset( $_POST['sum'] ) ) {
    function summ ($n){ //123
        $num = $n % 10; //3
        $n = ($n - $num)/10;
        if ($n<1){
            return $num;
        } else {
            return $num + summ($n);
        }
    }
    echo summ ($_POST['number3']);
}

echo "<h2>Task F</h2>
        Дано натуральное число N.
        Выведите все его цифры по одной, в обратном порядке, разделяя их пробелами или новыми строками.<br>";
?>

<form method="POST">
    <input type="text" name="number" size="44" placeholder="Please write a number"/>
    <input type="submit" name="reverse" value="Press to change " />
</form>

<?php
if( isset( $_POST['reverse'] ) ) {
    function reverse($n){
        $num = $n % 10;
        $n = ($n - $num)/10;
        if ($n<1){
            return $num;
        } else {
            return $num." ".reverse($n);
        }
    }
    echo reverse ($_POST['number']);
}

echo "<h2>Task G</h2>
        Дано натуральное число N.
        Выведите все его цифры по одной, в обычном порядке, разделяя их пробелами или новыми строками. <br>";
?>

<form method="POST">
    <input type="text" name="number" size="44" placeholder="Please write a number"/>
    <input type="submit" name="no_reverse" value="Press to change " />
</form>

<?php
if( isset( $_POST['no_reverse'] ) ) {
    function no_reverse ($n){
        $num = $n % 10;
        $n = ($n - $num)/10;
        if ($n<1){
            return $num;
        } else {
            return no_reverse($n)." ".$num;
        }
    }
    echo no_reverse ($_POST['number']);
}

echo "<h2>Task J</h2>
        Дано слово, состоящее только из строчных латинских букв.
        Проверьте, является ли это слово палиндромом. Выведите YES или NO.  <br>";
?>

<form method="POST">
    <input type="text" name="number" size="44" placeholder="Please write a number"/>
    <input type="submit" name="palindrom" value="Press to change " />
</form>

<?php
if( isset( $_POST['palindrom'] ) ) {
    function palindrom(&$n){
        $length = strlen($n)-1;
        if ($length === 0){
            return "Yes";
            }elseif($n[$length] === $n[0]){
                    $num = substr($n,1,$length -1);
                    $n = $num;
                    return palindrom($n);
                        }else {
                            return "No";
                        }
    }
 echo palindrom($_POST['number']);
}

?>

<br><br>
</body>
</html>