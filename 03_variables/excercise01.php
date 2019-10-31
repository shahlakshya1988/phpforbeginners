<?php 
/**
*Logical Operators
*https://www.php.net/manual/en/language.operators.logical.php
*/
function foo(){
	echo "<br>Called From Function Foo <br>";
}
$a = (false && foo());
var_dump($a);
$a1 = (false || foo());
var_dump($a1);
$b = (true  || foo());
var_dump($b);
$b1 = (true  && foo());
var_dump($b1);
$c = (false and foo());
var_dump($c);
$c1 = (false or foo());
var_dump($c1);
$d = (true  or  foo());
var_dump($d);
$d1 = (true  and  foo());
var_dump($d1);

echo "<br>==================<br>";
$e = false || true;
var_dump($e);
$f = false or true;
var_dump($f);

$g = true && false;
var_dump($g);
$h = true and false;
var_dump($h);