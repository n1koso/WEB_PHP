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
echo $days_per_language;