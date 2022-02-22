<?php

echo "1. Доступ по ссылке";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " for me";
// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.<br>";


echo "<br>2. Числа<br>";

$num1 = 7;
echo $num1;
$num2 = 3.14;
echo "<br>$num2<br>";
echo 4 * 3 . "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month . "<br>";


echo "<br>11. Умножение и деление<br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "<br>";


echo "<br>12. Степень<br>";

echo 8**2 . "<br>";


echo "<br>13. Операторы присвоения<br>";

$my_num = 123;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer. "<br>";


echo "<br>14. Математические функции<br>";

echo "<br>14.1 Работа с %<br>";

$a=10;
$b=3;
echo $a % $b;
if(($a % $b) == 0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком. Остаток = " . ($a % $b) . "<br>";

echo "<br>14.2 Работа со степенью и корнем<br>";

$st = pow(2,10);
echo "$st<br>";
echo sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$k = 0;
foreach ($arr as $value)
    $k += $value**2;
echo "<br>" . sqrt($k) . "<br>";

