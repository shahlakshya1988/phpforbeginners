<?php
echo "<br>Identity<br>";
$a = "56";
var_dump($a);
var_dump(+$a);

$a = "56.23";
var_dump($a);
var_dump(+$a);

echo "<br>Negation<br>";
$a=56;
var_dump($a);
var_dump(-$a);

echo "<br>Other Operators<br>";
$a = 15;
$b = 6;
$var ="Addition ".$a+$b;
var_dump($var);
var_dump("Addition ".($a+$b));
var_dump("Substraction ".($a - $b));
var_dump("Multiplication ".($a * $b));
var_dump("Division ".($a/$b));
var_dump("Modulus ".($a % $b));
var_dump("Exponential ".($a ** $b));