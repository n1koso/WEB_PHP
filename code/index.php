<?php

echo "1.Доступ по ссылке";
/* Imagine a lot of code here */

$very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order = &$very_bad_unclear_name;
$order .= " for me";

// Don't change the line below

echo "<br>Your order is: $very_bad_unclear_name.";