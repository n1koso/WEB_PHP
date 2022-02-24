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

echo "<br>14.3 Работа с функциями округления<br>";

echo round(sqrt(379), 0) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";

$arr1 = ["floor" => floor(sqrt(587)) , "ceil" => ceil(sqrt(587))];
echo $arr1["floor"] . "<br>" . $arr1["ceil"] . "<br>";;

echo "<br>14.4 Работа с min и max<br>";

echo min(4,-2, 5, 19, -130, 0, 10) . "<br>";
echo max(4, -2, 5, 19, -130, 0, 10) . "<br>";

echo "<br>14.5 Работа с рандомом<br>";

echo rand(1, 100)  . "<br>";
$arr2 = [];
for($i = 0; $i < 10; $i++)
{
    $arr[$i] = rand(1, 100);
    echo $arr[$i] . " ";
}

echo "<br>14.6 Работа с модулем<br>";

echo abs($a - $b) . "<br>";
$arr3 = [1, 2, -1, -2, 3, -3];
for($i = 0; $i < 6; $i++)
{
    $arr3[$i] = abs($arr3[$i]);
    echo $arr3[$i] . " ";
}

echo "<br>";
echo "<br>14.7 Общее<br>";

$num = 30;
$arr4 = [];
$k = 30;
for($i = 0; $i < $num; $i++)
{
    if(($num % $k) == 0)
    {
        $arr4[$i] = ($num / $k);
        echo $arr4[$i] . " ";
    }
    $k--;
}

$arr5 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
while($sum <= 10)
{
    $sum += $arr5[$count];
    $count++;
}
echo "<br>$count<br>";


echo "<br>15. Функции<br>";

function printStringReturnNumber()
{
    echo "Hi!<br>";
    return 28;
}
$my_num = printStringReturnNumber();
echo $my_num . "<br>";


echo "<br>16. Функции<br>";
function increaseEnthusiasm($str = "")
{
    return $str . "!";
}
echo increaseEnthusiasm("Goodbye") . "<br>";

function repeatThreeTimes($str = "")
{
    $i = 0;
    while($i < 3)
    {
        echo $str . " ";
        $i ++;
    }
}
echo repeatThreeTimes("ha") . "<br>";

echo increaseEnthusiasm(repeatThreeTimes("HA")) . "<br>";

function cut($st = "", $num = 10)
{
    return substr($st , 0, $num);
}

$arr6 = [1, 2, 3, 4, 5];
function rec($arr6, $i)
{
    if($i >= 5)
        return;
    echo $arr6[$i] . " ";
    $i ++;
    rec($arr6, $i);
}
echo rec($arr6, 0) . "<br>";

function SumOfNumbers($n)
{
    $s = 0;
    while($n > 0)
    {
        $s += ($n % 10);
        $n /= 10;
    }
    if($s > 9)
        SumOfNumbers($s);
    return $s;
}
